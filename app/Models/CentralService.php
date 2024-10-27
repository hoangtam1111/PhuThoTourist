<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CentralService extends Model
{
    use HasFactory;
    protected $table = 'central_services';
    protected $fillable=[
        'id',
        'title',
        'description',
        'image',
        'active'
    ];
}
