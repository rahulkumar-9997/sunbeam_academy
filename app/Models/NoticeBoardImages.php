<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NoticeBoardImages extends Model
{
    protected $table = 'notice_board_images';
    protected $fillable = [
        'notice_board_id',
        'title',
        'order',
        'file'
    ];
    public function noticeBoard()
    {
        return $this->belongsTo(NoticeBoard::class, 'notice_board_id');
    }
}
