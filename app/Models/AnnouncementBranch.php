<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AnnouncementBranch extends Model
{
    protected $table = 'announcements_branch';
    protected $fillable = [
        'announcement_id',
        'branch_id',
    ];
}
