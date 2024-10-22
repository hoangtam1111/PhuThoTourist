<?php

namespace App\Repositories;

use App\Repositories\Interfaces\WorkingPlaceInterface;
use App\Models\WorkingPlace;

class WorkingPlaceRepository implements WorkingPlaceInterface
{
    public function getAllWorkingPlace(){
        return WorkingPlace::get();
    }
    public function getWorkingPlace($id)
    {
        return WorkingPlace::find($id);
    }
    public function insertWorkingPlace($data)
    {
        WorkingPlace::create($data);
    }
    public function updateWorkingPlace($data, $id)
    {
        $WorkingPlace=WorkingPlace::find($id);
        $WorkingPlace->update($data);
    }
    public function deleteWorkingPlace($id)
    {
        $WorkingPlace = WorkingPlace::find($id);
        if(!empty($WorkingPlace)){
            $WorkingPlace->delete();
        }
    }
}
