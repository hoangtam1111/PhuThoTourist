<?php
namespace App\Repositories\Interfaces;
interface DetailTypePostInterface{
    public function getDetailTypePost($id);
    public function getAllDetailOnPost($idPost);
    public function insertDetailTypePost($data);
    public function deleteDetailTypePostWithPostId($idPost);
    public function deleteDetailTypePost($id);
}
