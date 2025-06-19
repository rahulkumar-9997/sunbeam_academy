<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class BlogBranch extends Model
{
    use HasFactory;

    protected $table = 'blog_branches';

    protected $fillable = [
        'blog_id',
        'branches_id',
    ];

    public function blog()
    {
        return $this->belongsTo(Blog::class);
    }

    public function branch()
    {
        return $this->belongsTo(Branch::class, 'branches_id');
    }
}
