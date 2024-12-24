<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $table = 'posts';
    protected $fillable=[
        'id',
        'title',
        'description',
        'image',
        'file',
        'date',
        'user_id',
        'view'
    ];
    public function typePost(){
        return $this->belongsToMany(TypePost::class, 'detail_type_posts', 'post_id', 'type_post_id');
    }
    public function parseArray($string){
        return explode('\n', $string);
    }
    public function parseArrayTab($string){
        return explode('\t', $string);
    }
}
