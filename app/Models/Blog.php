<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Blog extends Model
{
    use HasFactory;
    protected $table = 'blogs';
    protected $fillable = [
        'title',
        'slug',
        'main_image',
        'user_id',
        'description',
        'status',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function paragraphs()
    {
        return $this->hasMany(BlogParagraph::class);
    }

    public function branches()
    {
        return $this->hasMany(BlogBranch::class);
    }
}
