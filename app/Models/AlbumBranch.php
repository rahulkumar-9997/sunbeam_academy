<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class AlbumBranch extends Model
{
    use HasFactory;
    protected $table = 'album_branches';
    protected $fillable = [
        'album_id', 'branch_id',
    ];
    
    public function album()
    {
        return $this->belongsTo(Album::class);
    }

    public function branch()
    {
        return $this->belongsTo(Branch::class);
    }
}
