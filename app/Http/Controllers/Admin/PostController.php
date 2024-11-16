<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Repositories\Interfaces\DetailTypePostInterface;
use App\Repositories\Interfaces\PostInterface;
use App\Repositories\Interfaces\TypePostInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Ramsey\Uuid\Type\TypeInterface;

class PostController extends Controller
{
    private $post, $detailTypePost, $type;
    public function __construct(PostInterface $postInterface, DetailTypePostInterface $detailTypePostInterface, TypePostInterface $typePostInterface){
        $this->post = $postInterface;
        $this->detailTypePost = $detailTypePostInterface;
        $this->type=$typePostInterface;
    }
    public function indexAdmin(){
        $posts=$this->post->getAllPost();
        return view('admin.post.index', compact('posts'));
    }
    public function insert(){
        $types=$this->type->getAllTypePost();
        return view('admin.post.insert', compact('types'));
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
        // insert image
        $image=$request->file('image')->getClientOriginalName();
        $request->file('image')->move('image/post',$image);
        // insert file
        $file=$request->file('file')->getClientOriginalName();
        $request->file('file')->move('files/post',$file);

        $post=$this->post->insertPost([
            'title' => $request->get('title'),
            'description' => $request->get('description'),
            'image' => $image,
            'file' => $file,
            'user_id' => 1
        ]);
        foreach ($request->get('types') as $type){
            $this->detailTypePost->insertDetailTypePost([
                'type_post_id' => $type,
                'post_id' => $post->id
            ]);
        }
        return redirect()->route('admin.post.index');
    }
    public function update($id){
        $post=$this->post->getpost($id);
        $types=$this->type->getAllTypePost();
        $details=$this->detailTypePost->getAllDetailOnPost($post->id);
        $itemTypes=[];
        foreach($types as $type){
            $state=0;
            foreach($details as $detail){
                if($type->id==$detail->type_post_id){
                    $state=1;
                }
            }
            $itemTypes[]= [
                'type' => $type,
                'state' => $state
            ];
        }
        // die(response()->json($itemTypes));
        return view('admin.post.update', compact('post','itemTypes'));
    }
    public function postUpdate(Request $request){
        $request->validate([
            'title' => 'required',
            'description'=>'required',
        ],[
            'title.required' => 'Please enter a title post',
            'description.required' => 'Please enter a description',
        ]);
        $post=$this->post->getPost($request->get('id'));
        $image=$post->image;
        $file=$post->file;
        // insert image
        if(!empty($request->get('image'))){
            $image=$request->file('image')->getClientOriginalName();
            $request->file('image')->move('image/post',$image);
            $image='image/post/'.$post->image;
            if(File::exists($image)){
                File::delete($image);
            }
        }
        // insert file
        if(!empty($request->get('file'))){
            $file=$request->file('file')->getClientOriginalName();
            $request->file('file')->move('files/post',$file);
            $file='files/post/'.$post->file;
            if(File::exists($file)){
                File::delete($file);
            }
        }
        $this->post->updatePost([
            'title' => $request->get('title'),
            'description' => $request->get('description'),
            'image' => $image,
            'file' => $file,
            'user_id' => 1
        ],$request->get('id'));
        $this->detailTypePost->deleteDetailTypePostWithPostId($request->get('id'));
        foreach ($request->get('types') as $type){
            $this->detailTypePost->insertDetailTypePost([
                'type_post_id' => $type,
                'post_id' => $post->id
            ]);
        }
        return redirect()->route('admin.post.index');
    }
    public function delete($id){
        $post=$this->post->getPost($id);
        $image='image/post/'.$post->image;
        if(File::exists($image)){
            File::delete($image);
        }
        $file='files/post/'.$post->file;
        if(File::exists($file)){
            File::delete($file);
        }
        $this->post->deletePost($id);
        return redirect()->route('admin.post.index');
    }
}
