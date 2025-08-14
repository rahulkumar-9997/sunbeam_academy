<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NoticeBoardBranch extends Model
{
    protected $table = 'notice_board_branch';
    protected $fillable = [
        'notice_board_id',
        'branch_id',
    ];
}
