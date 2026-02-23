<?php

namespace App\Helpers;

use Illuminate\Support\Facades\File;

class ImageHelper
{
    /**
     * WebP with exact dimensions
     */
    public static function getWebP($path, $width = null, $height = null, $quality = 85)
    {
        if (!$path) {
            return null;
        }

        // Agar SVG hai to waise hi return
        if (str_contains($path, '.svg')) {
            return asset($path);
        }

        // Path normalize karo
        $path = ltrim(str_replace(['http://', 'https://', url('')], '', $path), '/\\');
        $sourcePath = public_path($path);
        
        if (!File::exists($sourcePath)) {
            return asset($path);
        }

        // Dimensions calculate karo
        if ($width || $height) {
            list($origWidth, $origHeight) = getimagesize($sourcePath);
            
            if (!$width) {
                $width = round(($height / $origHeight) * $origWidth);
            }
            if (!$height) {
                $height = round(($width / $origWidth) * $origHeight);
            }
            
            // WebP path with dimensions
            $pathInfo = pathinfo($sourcePath);
            $webpPath = $pathInfo['dirname'] . DIRECTORY_SEPARATOR . 
                       $pathInfo['filename'] . "-{$width}x{$height}.webp";
        } else {
            // Simple WebP without dimensions
            $pathInfo = pathinfo($sourcePath);
            $webpPath = $pathInfo['dirname'] . DIRECTORY_SEPARATOR . 
                       $pathInfo['filename'] . '.webp';
        }
        
        $relativeWebpPath = str_replace([public_path(), '\\'], ['', '/'], $webpPath);
        $relativeWebpPath = ltrim($relativeWebpPath, '/');

        // Agar WebP already exists to wahi return karo
        if (File::exists($webpPath)) {
            return asset($relativeWebpPath);
        }

        try {
            // Image create karo
            $extension = strtolower($pathInfo['extension']);
            
            switch ($extension) {
                case 'jpg':
                case 'jpeg':
                    $image = imagecreatefromjpeg($sourcePath);
                    break;
                case 'png':
                    $image = imagecreatefrompng($sourcePath);
                    imagepalettetotruecolor($image);
                    imagealphablending($image, true);
                    imagesavealpha($image, true);
                    break;
                default:
                    return asset($path);
            }

            // Resize agar dimensions diye hain
            if ($width && $height && ($width != $origWidth || $height != $origHeight)) {
                $resized = imagecreatetruecolor($width, $height);
                
                // Transparency preserve karo
                if ($extension == 'png') {
                    imagealphablending($resized, false);
                    imagesavealpha($resized, true);
                    $transparent = imagecolorallocatealpha($resized, 255, 255, 255, 127);
                    imagefilledrectangle($resized, 0, 0, $width, $height, $transparent);
                }
                
                imagecopyresampled($resized, $image, 0, 0, 0, 0, $width, $height, $origWidth, $origHeight);
                imagedestroy($image);
                $image = $resized;
            }

            // WebP me convert karo
            imagewebp($image, $webpPath, $quality);
            imagedestroy($image);

            return asset($relativeWebpPath);

        } catch (\Exception $e) {
            \Log::error('WebP conversion failed: ' . $e->getMessage());
            return asset($path);
        }
    }
}