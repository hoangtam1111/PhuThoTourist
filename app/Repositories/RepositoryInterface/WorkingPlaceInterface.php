<?php
namespace App\Repositories\Interfaces;
interface WorkingPlaceInterface{
    public function getAllWorkingPlace();
    public function getWorkingPlace($id);
    public function insertWorkingPlace($data);
    public function updateWorkingPlace($data,$id);
    public function deleteWorkingPlace($id);
}
