<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DisclosureBranch extends Model
{
    use HasFactory;
    protected $table = 'disclosure_branch';
    protected $fillable = [
        'disclosure_id',
        'branch_id',
    ];

    public function disclosure()
    {
        return $this->belongsTo(Disclosure::class);
    }

    public function branch()
    {
        return $this->belongsTo(Branch::class);
    }
}
