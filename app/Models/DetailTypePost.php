<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailTypePost extends Model
{
    use HasFactory;
    protected $table = 'ddetail_type_posts';
    protected $fillable=[
        'id',
        'post_id',
        'type_post_id'
    ];
    public function post(){
        return $this->belongsTo(Post::class);
    }
    public function type_post(){
        return $this->belongsTo(TypePost::class);
    }
}
