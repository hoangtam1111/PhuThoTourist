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
    public function getPostsOnPage($page, $pageSize, $type = null, $search = null, $from = null, $to = null)
    {
        $query = Post::query();
        if ($search) {
            $query->where('title', 'like', '%' . $search . '%');
        }
        if ($type) {
            $query->whereHas('typePost', function($q) use ($type) {
                $q->where('type_posts.id', $type);
            });
        }
        if ($from) {
            $query->where('date', '>=', $from);
        }
        if ($to) {
            $query->where('date', '<=', $to);
        }
        return $query->skip(($page - 1) * $pageSize)->take($pageSize)->get();
    }
    public function getTotalPages($pageSize, $type = null, $search = null, $from = null, $to = null)
    {
        $query = Post::query();
        if ($search) {
            $query->where('title', 'like', '%' . $search . '%');
        }
        if ($type) {
            $query->whereHas('typePost', function($q) use ($type) {
                $q->where('type_posts.id', $type);
            });
        }
        if ($from) {
            $query->where('date', '>=', $from);
        }
        if ($to) {
            $query->where('date', '<=', $to);
        }
        // Tổng số bản ghi
        $totalRecords = $query->count();

        // Tính số lượng trang
        return ceil($totalRecords / $pageSize);
    }

    public function getNewPost($quantiyPost){
        return Post::latest()->take($quantiyPost)->get();
    }
    public function insertPost($data)
    {
        return Post::create($data);
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
