<?php
namespace App\Repositories\Interfaces;
interface PostInterface{
    public function getAllPost();
    public function getPost($id);
    public function getNewPost($quantiyPost);
    public function insertPost($data);
    public function updatePost($data,$id);
    public function deletePost($id);
}
