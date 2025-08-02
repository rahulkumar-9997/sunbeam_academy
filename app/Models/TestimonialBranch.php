<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TestimonialBranch extends Model
{
    use HasFactory;
    protected $table = 'testimonials_branch';
    protected $fillable = [
        'testimonials_id',
        'branch_id',
    ];

    public function testimonial()
    {
        return $this->belongsTo(Testimonial::class, 'testimonials_id');
    }

    public function branch()
    {
        return $this->belongsTo(Branch::class, 'branch_id');
    }
}
