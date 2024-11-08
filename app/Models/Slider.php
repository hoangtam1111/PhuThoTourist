<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    use HasFactory;
    protected $table = 'sliders';
    protected $fillable=[
        'id',
        'image',
        'active',
        'title',
    ];
    public function post(){
        return $this->belongsTo(Post::class);
    }
}
