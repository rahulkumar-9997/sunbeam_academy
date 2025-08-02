<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
class Testimonial extends Model
{
    use HasFactory;
    protected $table = 'testimonials';
    protected $fillable = [
        'title',
        'slug',
        'type',
        'image',
        'content',
        'status',
    ];

    public function branches()
    {
        return $this->belongsToMany(Branch::class, 'testimonials_branch', 'testimonials_id', 'branch_id');
    }

    protected static function boot()
    {
        parent::boot();
        static::creating(function ($model) {
            if (empty($model->slug)) {
                $slug = Str::slug($model->title);
                $originalSlug = $slug;
                $count = 1;

                while (self::where('slug', $slug)->exists()) {
                    $slug = $originalSlug . '-' . $count++;
                }

                $model->slug = $slug;
            }
        });
    }
}
