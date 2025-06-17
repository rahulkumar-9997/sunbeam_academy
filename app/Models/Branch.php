<?php

namespace App\Models;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;

class Branch extends Model
{
    protected $table = 'branches';
    protected $fillable = [
        'name',
        'status',
        'slug',
        'description',
        'phone_1',
        'email_1',
        'phone_2',
        'email_2',
        'address',
        'user_id',
    ];

    protected static function boot()
    {
        parent::boot();
        static::creating(function ($branch) {
            if (empty($branch->slug)) {
                $slug = Str::slug($branch->name);
                $originalSlug = $slug;
                $count = 1;
                while (Branch::where('slug', $slug)->exists()) {
                    $slug = $originalSlug . '-' . $count++;
                }

                $branch->slug = $slug;
            }
        });
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    public function classes()
    {
        return $this->belongsToMany(ClassModel::class, 'classes_branche', 'branches_id', 'classes_id');
    }
}
