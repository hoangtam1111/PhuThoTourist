<?php
namespace App\Repositories\Interfaces;
interface TypePostInterface{
    public function getAllTypePost();
    public function getTypePost($id);
    public function insertTypePost($data);
    public function updateTypePost($data,$id);
    public function deleteTypePost($id);
}
