<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Announcement extends Model
{
    protected $table = 'announcements';
    protected $fillable = [
        'title',
        'slug',
        'image',
        'description',
        'link_page',
        'start_date',
        'end_date',
        'status'
    ];

    protected static function boot()
    {
        parent::boot();
        
        static::creating(function ($page) {
            $page->slug = $page->createSlug($page->title);
        });
    }

    private function createSlug($title)
    {
        $slug = Str::slug($title);
        $count = static::whereRaw("slug RLIKE '^{$slug}(-[0-9]+)?$'")->count();
        return $count ? "{$slug}-{$count}" : $slug;
    }

    public function branches()
    {
        return $this->belongsToMany(Branch::class, 'announcements_branch', 'announcement_id', 'branch_id');
    }
}
