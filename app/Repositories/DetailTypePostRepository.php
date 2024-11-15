<?php

namespace App\Repositories;

use App\Repositories\Interfaces\DetailTypePostInterface;
use App\Models\DetailTypePost;

class DetailTypePostRepository implements DetailTypePostInterface
{
    public function getDetailTypePost($id)
    {
        return DetailTypePost::find($id);
    }
    public function getAllDetailOnPost($idPost){
        return DetailTypePost::where('post_id',$idPost)->get();
    }
    public function insertDetailTypePost($data)
    {
        return DetailTypePost::create($data);
    }
    public function deleteDetailTypePostWithPostId($idPost){
        DetailTypePost::where('post_id',$idPost)->delete();
    }
    public function deleteDetailTypePost($id)
    {
        $DetailTypePost = DetailTypePost::find($id);
        if(!empty($DetailTypePost)){
            $DetailTypePost->delete();
        }
    }
}
