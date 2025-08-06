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
