<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypeWord extends Model
{
    use HasFactory;
    protected $table = 'type_works';
    protected $fillable=[
        'id',
        'name'
    ];
}
