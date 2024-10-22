<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recruitment extends Model
{
    use HasFactory;
    protected $table = 'recruitments';
    protected $fillable=[
        'id',
        'location',
        'address',
        'job_description',
        'date',
        'working_time',
        'interest',
        'requirement',
        'age',
        'level',
        'file',
        'field_id',
        'type_work_id',
        'working_place_id'
    ];
    public function field(){
        return $this->belongsTo(Field::class);
    }
    public function type_work(){
        return $this->belongsTo(TypeWork::class);
    }
    public function working_place(){
        return $this->belongsTo(WorkingPlace::class);
    }
}
