<?php

namespace App\Models;

use App\Models\Member;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_profile',
        'post_img',
        'post_sentence',
        'post_title'
    ];

    public function member()
    {
        return $this->belongsTo(Member::class);
    }
}