<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Repositories\Interfaces\TypePostInterface;
use Illuminate\Http\Request;

class TypePostController extends Controller
{
    private $typePost;
    public function __construct(TypePostInterface $typePostInterface){
        $this->typePost = $typePostInterface;
    }
    public function index(){
        $typePosts=$this->typePost->getAllTypePost();
        return view('', compact('typePosts'));
    }
    public function insert(){
        return view();
    }
    public function postInsert(Request $request){
        $request->validate([
            'name' => 'required'
        ],[
            'name.required' => 'Please enter a name working place'
        ]);
        $this->typePost->insertTypePost($request->all());
        return redirect()->route('');
    }
    public function update($id){
        $typePost=$this->typePost->getTypePost($id);
        return view('', compact('typePost'));
    }
    public function postUpdate(Request $request){
        $request->validate([
            'name' => 'required'
        ],[
            'name.required' => 'Please enter a name typePost'
        ]);
        $this->typePost->updateTypePost($request->all(),$request->get('id'));
        return redirect()->route('');
    }
    public function delete($id){
        $this->typePost->deleteTypePost($id);
        return view('');
    }
}
