<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
class NoticeBoard extends Model
{
    protected $table = 'notice_boards';
    protected $fillable = [
        'title',
        'slug',
        'notice_type',
        'description',
        'start_date',
        'end_date',
        'file',
        'page_link',
        'status',
        'branch_id'
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

    public function branch()
    {
        return $this->belongsTo(Branch::class);
    }
}
