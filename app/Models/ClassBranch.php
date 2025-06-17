<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ClassBranch extends Model
{
    protected $table = 'classes_branche';

    protected $fillable = [
        'classes_id',
        'branches_id',
    ];
}
