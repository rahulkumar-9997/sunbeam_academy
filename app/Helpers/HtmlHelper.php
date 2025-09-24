<?php

function clean_html_content($html)
{
    if (empty($html)) return '';
    return preg_replace([
        '/<p[^>]*>\s*&nbsp;\s*<\/p>/i',     // remove <p>&nbsp;</p>
        '/<p[^>]*>\s*<\/p>/i',              // remove empty <p></p>
        '/<p[^>]*>\s*<br\s*\/?>\s*<\/p>/i', // remove <p><br></p>
        '/(<br\s*\/?>\s*){2,}/i'            // remove repeated <br><br>
    ], '', $html);
}

if (!function_exists('branch_urls')) {
    function branch_urls() {
        return [
            'samneghat' => [
                'name' => 'Sunbeam Academy Samneghat',
                'url' => 'https://sunbeamacademysmn.inforbit.in/',
                'slug' => 'sunbeam-academy-samneghat'
            ],
            'durgakund' => [
                'name' => 'Sunbeam Academy Durgakund',
                'url' => 'https://sunbeamacademydkd.com/',
                'slug' => 'sunbeam-academy-durgakund'
            ],
            'sarainandan' => [
                'name' => 'Sunbeam Academy Sarainandan', 
                'url' => 'https://sunbeamacademysrn.com/',
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
