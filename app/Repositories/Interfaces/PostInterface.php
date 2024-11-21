<?php
namespace App\Repositories\Interfaces;
interface PostInterface{
    public function getAllPost();
    public function getPost($id);
    public function getNewPost($quantiyPost);
    public function getPostsOnPage($page, $pageSize, $type = null, $search = null, $from = null, $to = null);
    public function getTotalPages($pageSize, $type = null, $search = null, $from = null, $to = null);
    public function insertPost($data);
    public function updatePost($data,$id);
    public function deletePost($id);
}
