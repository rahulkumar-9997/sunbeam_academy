<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
class ClassModel extends Model
{
    protected $table = 'classes';

    protected $fillable = [
        'title',
        'slug',
        'heading_name',
        'meta_title',
        'meta_description',
        'main_image',
        'description',
        'status',
        'user_id',
    ];

    public function branches()
    {
        return $this->belongsToMany(Branch::class, 'classes_branche', 'classes_id', 'branches_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
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
