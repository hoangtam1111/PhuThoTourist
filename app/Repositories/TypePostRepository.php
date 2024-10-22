<?php

namespace App\Repositories;

use App\Repositories\Interfaces\TypePostInterface;
use App\Models\TypePost;

class TypePostRepository implements TypePostInterface
{
    public function getAllTypePost(){
        return TypePost::get();
    }
    public function getTypePost($id)
    {
        return TypePost::find($id);
    }
    public function insertTypePost($data)
    {
        TypePost::create($data);
    }
    public function updateTypePost($data, $id)
    {
        $TypePost=TypePost::find($id);
        $TypePost->update($data);
    }
    public function deleteTypePost($id)
    {
        $TypePost = TypePost::find($id);
        if(!empty($TypePost)){
            $TypePost->delete();
        }
    }
}
