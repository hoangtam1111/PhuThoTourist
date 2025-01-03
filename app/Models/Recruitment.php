<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recruitment extends Model
{
    use HasFactory;
    protected $table = 'recruitments';
    protected $fillable=[
        'id',
        'state',
        'location',
        'address',
        'quantity',
        'job_description',
        'date',
        'interest',
        'requirement',
        'age',
        'level',
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
    public function getWeek($date){
        $currentDate = now();
        $targetDate = Carbon::parse($date);
        return $currentDate->diffInWeeks($targetDate);
    }
    public function parseArray($string){
        return explode('\n', $string);
    }
}
