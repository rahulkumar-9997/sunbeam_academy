<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    protected $table = 'banners';
    protected $fillable = [
        'title',
        'sub_title',
        'short_content',
        'desktop_img',
        'mobile_img',
        'about_more_link',
    ];
}
