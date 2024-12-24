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
        $search = $request->input('search', null);
        $from = $request->input('from', null);
        $to = $request->input('to', null);

        $posts=$this->post->getPostsOnPage($page,12,$type_id, $search,$from,$to);
        $newPosts = $this->post->getNewPost(10);
        $sliders=$this->post->getNewPost(4);
        $types=$this->type->getAllTypePost();
        $total=$this->post->getTotalPages(12,$type_id, $search,$from,$to);

        return view('post', compact(
            'posts',
            'newPosts',
            'sliders',
            'types',
            'type_id',
            'search',
            'from',
            'to',
            'total',
            'page'
        ));
    }
    public function sliders(){
        $sliders=$this->post->getNewPost(4);
        return response()->json($sliders);
    }
    public function document(Request $request){
        $page = $request->input('page', 1);
        $page_size = $request->input('page_size', 10);
        $search = $request->input('search', null);
        $from = $request->input('from', null);
        $to = $request->input('to', null);
        $total=$this->post->getTotalPages(12,null, $search,$from,$to);

        $posts=$this->post->getPostsOnPage($page,$page_size,null, $search,$from,$to);
        return view('document', compact(
            'posts',
            'search',
            'from',
            'to',
            'total',
            'page'
        ));
    }
    public function detailDocument($id){
        $post=$this->post->getPost($id);
        $posts=$this->post->getNewPost(4);
        $this->post->updatePost([
            'view' => $post->view+1
        ],$post->id);
        return view('detail_document', compact('post', 'posts'));
    }
}
