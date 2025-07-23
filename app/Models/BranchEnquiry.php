<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BranchEnquiry extends Model
{
    protected $table = 'branch_enquiries';
    protected $fillable = [
        'branch_name',
        'name',
        'email',
        'phone',
        'message'
    ];
}
