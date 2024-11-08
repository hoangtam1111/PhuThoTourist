<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Repositories\Interfaces\DetailTypePostInterface;
use App\Repositories\Interfaces\PostInterface;
use Illuminate\Http\Request;

class PostController extends Controller
{
    private $post, $detailTypePost;
    public function __construct(PostInterface $postInterface, DetailTypePostInterface $detailTypePostInterface){
        $this->post = $postInterface;
        $this->detailTypePost = $detailTypePostInterface;
    }
    public function indexAdmin(){
        $posts=$this->post->getAllPost();
        return view('', compact('posts'));
    }
    public function insert(){
        return view();
    }
    public function postInsert(Request $request){
        $request->validate([
            'title' => 'required',
            'description'=>'required',
            'image'=>'required|file',
            'file'=>'required|file',
        ],[
            'title.required' => 'Please enter a title post',
            'description.required' => 'Please enter a description',
            'image.required' => 'Please enter image',
            'file.required' => 'Please enter file',
        ]);
        $post=$this->post->insertPost($request->all());
        foreach ($request->get('type_id') as $index => $typeId){
            $this->detailTypePost->insertDetailTypePost([
                'type_post_id' => $typeId,
                'post_id' => $post->id
            ]);
        }
        return redirect()->route('');
    }
    public function update($id){
        $post=$this->post->getpost($id);
        return view('', compact('post'));
    }
    public function postUpdate(Request $request){
        $request->validate([
            'title' => 'required',
            'description'=>'required',
            'image'=>'required|file',
            'file'=>'required|file',
        ],[
            'title.required' => 'Please enter a title post',
            'description.required' => 'Please enter a description',
            'image.required' => 'Please enter image',
            'file.required' => 'Please enter file',
        ]);
        $this->post->updatePost($request->all(),$request->get('id'));
        $this->detailTypePost->deleteDetailTypePostWithPostId($request->get('id'));
        foreach ($request->get('type_id') as $index => $typeId){
            $this->detailTypePost->insertDetailTypePost([
                'type_post_id' => $typeId,
                'post_id' => $request->get('id'),
            ]);
        }
        return redirect()->route('');
    }
    public function delete($id){
        $this->post->deletePost($id);
        return view('');
    }
}
