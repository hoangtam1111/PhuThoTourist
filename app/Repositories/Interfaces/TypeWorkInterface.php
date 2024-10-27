<?php
namespace App\Repositories\Interfaces;
interface TypeWorkInterface{
    public function getAllTypeWork();
    public function getTypeWork($id);
    public function insertTypeWork($data);
    public function updateTypeWork($data,$id);
    public function deleteTypeWork($id);
}
