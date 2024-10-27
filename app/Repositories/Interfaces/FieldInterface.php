<?php
namespace App\Repositories\Interfaces;
interface FieldInterface{
    public function getAllField();
    public function getField($id);
    public function insertField($data);
    public function updateField($data,$id);
    public function deleteField($id);
}
