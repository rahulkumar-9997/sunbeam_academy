<?php

function clean_html_content($html)
{
    if (empty($html)) return '';
    return preg_replace([
        '/<p[^>]*>\s*&nbsp;\s*<\/p>/i', 
        '/<p[^>]*>\s*<\/p>/i',         
        '/<p[^>]*>\s*<br\s*\/?>\s*<\/p>/i',
        '/(<br\s*\/?>\s*){2,}/i'         
    ], '', $html);
}

if (!function_exists('branch_urls')) {
    function branch_urls() {
        return [
            'samneghat' => [
                'name' => 'Sunbeam Academy Samneghat',
                'url' => 'https://www.sunbeamacademysmn.com/',
                'slug' => 'sunbeam-academy-samneghat'
            ],
            'durgakund' => [
                'name' => 'Sunbeam Academy Durgakund',
                'url' => 'https://www.sunbeamacademydkd.com/',
                'slug' => 'sunbeam-academy-durgakund'
            ],
            'sarainandan' => [
                'name' => 'Sunbeam Academy Sarainandan', 
                'url' => 'https://www.sunbeamacademysrn.com/',
                'slug' => 'sunbeam-academy-sarainandan'
            ],
            'knowledge-park' => [
                'name' => 'Sunbeam Academy Knowledge Park',
                'url' => 'https://sunbeamacademykp.com/',
                'slug' => 'sunbeam-academy-knowledge-park'
            ]
        ];
    }
}
