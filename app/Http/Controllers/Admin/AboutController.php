<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Repositories\Interfaces\AboutInterface;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    private $about;
    public function __construct(AboutInterface $aboutInterface){
        $this->about = $aboutInterface;
    }
    public function insert(Request $request){
        $request->validate([
            'post_id'=>'required|integer',
        ],[
            'post_id.required'=>'Please choose a post',
        ]);
        $this->about->insertAbout($request->all());
        return redirect()->route('');
    }
    public function update($id){
        $about=$this->about->getAbout($id);
        if(!empty($about)){
            return view('', compact('about'));
        }
        return view('');
    }
    public function postUpdate(Request $request){
        $request->validate([
            'post_id' => 'required|integer'
        ],[
            'post_id.required'=>'Please choose a post',
        ]);
        $this->about->updateAbout($request->all(),$request->get('id'));
        return redirect()->route('');
    }
    public function delete($id){
        $this->about->deleteAbout($id);
        return redirect()->route('');
    }
}
