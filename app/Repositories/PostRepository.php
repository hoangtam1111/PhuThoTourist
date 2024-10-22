<?php

namespace App\Repositories;

use App\Repositories\Interfaces\PostInterface;
use App\Models\Post;

class PostRepository implements PostInterface
{
    public function getAllPost(){
        return Post::get();
    }
    public function getPost($id)
    {
        return Post::find($id);
    }
    public function getPostsOnPage($page, $pageSize){
        return Post::skip(($page - 1) * $pageSize)->take($pageSize)->get();
    }
    public function getNewPost($quantiyPost){
        return Post::latest()->take($quantiyPost)->get();
    }
    public function insertPost($data)
    {
        Post::create($data);
    }
    public function updatePost($data, $id)
    {
        $Post=Post::find($id);
        $Post->update($data);
    }
    public function deletePost($id)
    {
        $Post = Post::find($id);
        if(!empty($Post)){
            $Post->delete();
        }
    }
}
