<?php

namespace App\Http\Controllers;

use App\Repositories\Interfaces\PostInterface;
use App\Repositories\Interfaces\TypePostInterface;
use Illuminate\Http\Request;

class PostController extends Controller
{
    private $post, $type;
    public function __construct(PostInterface $postInterface, TypePostInterface $typePostInterface){
        $this->post = $postInterface;
        $this->type = $typePostInterface;
    }
    public function index(Request $request){
        $page = $request->input('page', 1);
        $type_id = $request->input('type', null);

        $posts=$this->post->getPostsOnPage($page,12);
        $newPosts = $this->post->getNewPost(10);
        $slider=$this->post->getNewPost(4);
        $types=$this->type->getAllTypePost();
        return view('post', compact('posts','newPosts', 'slider', 'types', 'type_id'));
    }
    public function document(Request $request){
        $page = $request->input('page', 1);
        $page_size = $request->input('page_size', 10);
        $posts=$this->post->getPostsOnPage($page,$page_size);
        return view('document', compact('posts'));
    }
    public function detailDocument($id){
        $post=$this->post->getPost($id);
        $posts=$this->post->getNewPost(4);
        return view('detail_document', compact('post', 'posts'));
    }
}
