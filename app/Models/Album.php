<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Str;

class Album extends Model
{
    use HasFactory;
    protected $table = 'albums';
    protected $fillable = [
        'title', 'slug', 'short_details', 'image', 'sort_order', 'status',
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
        return $this->belongsToMany(Branch::class, 'album_branches', 'album_id', 'branch_id');
    }

    public function galleries()
    {
        return $this->hasMany(Gallery::class);
    }
}
