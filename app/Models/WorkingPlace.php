<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WorkingPlace extends Model
{
    use HasFactory;
    protected $table = 'working_places';
    protected $fillable=[
        'id',
        'name'
    ];
}
