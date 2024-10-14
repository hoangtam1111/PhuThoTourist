<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApplyWork extends Model
{
    use HasFactory;
    protected $table = 'apply_works';
    protected $fillable=[
        'id',
        'name',
        'sex',
        'dob',
        'place_of_birth',
        'current_residence',
        'phone',
        'email',
        'facebook',
        'level',
        'file_cv',
        'long_day_work',
        'overtime',
        'previous_workplace',
        'experience',
        'recruitment_id'
    ];
    public function post(){
        return $this->belongsTo(Post::class);
    }
}
