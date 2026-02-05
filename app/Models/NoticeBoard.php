<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
class NoticeBoard extends Model
{
    protected $table = 'notice_boards';
    protected $fillable = [
        'title',
        'page_heading',
        'meta_title', 
        'meta_description', 
        'slug',
        'notice_type',
        'description',
        'start_date',
        'end_date',
        'file',
        'page_link',
        'status'
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($notice) {
            if (empty($notice->slug)) {
                $slug = Str::slug($notice->title);
                $originalSlug = $slug;
                $count = 1;
                while (self::where('slug', $slug)->exists()) {
                    $slug = $originalSlug . '-' . $count++;
                }
                $notice->slug = $slug;
            }
        });
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function branches()
    {
        return $this->belongsToMany(Branch::class, 'notice_board_branch', 'notice_board_id', 'branch_id');
    }

    public function noticeImages()
    {
        return $this->hasMany(NoticeBoardImages::class, 'notice_board_id');
    }

   
}
