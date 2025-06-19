<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class BlogParagraph extends Model
{
    use HasFactory;

    protected $table = 'blog_paragraphs';

    protected $fillable = [
        'blog_id',
        'paragraph_title',
        'paragraph_image',
        'paragraph_description',
    ];

    public function blog()
    {
        return $this->belongsTo(Blog::class);
    }
}
