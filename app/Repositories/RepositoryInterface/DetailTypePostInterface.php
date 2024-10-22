<?php
namespace App\Repositories\Interfaces;
interface DetailTypePostInterface{
    public function getDetailTypePost($id);
    public function getAllDetailOnPost($idPost);
    public function insertDetailTypePost($data);
    public function updateDetailTypePost($data,$id);
    public function deleteDetailTypePost($id);
}
