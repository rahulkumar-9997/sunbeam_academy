<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Disclosure extends Model
{
    use HasFactory;
    protected $table = 'disclosures';
    protected $fillable = [
        'title',
        'file',
        'file_type',
        'status',
    ];

    public function branches()
    {
        return $this->belongsToMany(Branch::class, 'disclosure_branch');
    }
}
