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
        DetailTypePost::create($data);
    }
    public function updateDetailTypePost($data, $id)
    {
        $DetailTypePost=DetailTypePost::find($id);
        $DetailTypePost->update($data);
    }
    public function deleteDetailTypePost($id)
    {
        $DetailTypePost = DetailTypePost::find($id);
        if(!empty($DetailTypePost)){
            $DetailTypePost->delete();
        }
    }
}
