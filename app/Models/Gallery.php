<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Gallery extends Model
{
    use HasFactory;
    protected $table = 'galleries';
    protected $fillable = [
        'album_id', 'image_file', 'sort_order',
    ];
    public function album()
    {
        return $this->belongsTo(Album::class);
    }
}
