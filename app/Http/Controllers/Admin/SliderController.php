<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Repositories\Interfaces\SliderInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class SliderController extends Controller
{
    private $slider;
    public function __construct(SliderInterface $sliderInterface){
        $this->slider = $sliderInterface;
    }
    public function insert(){
        return view('admin.slider.insert');
    }
    public function postInsert(Request $request){
        $request->validate([
            'title' => 'required',
            'image' =>'required|image|mimes:jpeg,png,jpg,gif|max:2048'
        ],[
            'title.required' => 'Please enter a title slider',
            'image.required' => 'Please enter image of slide',
        ]);
        $extension=$request->file('image')->getClientOriginalName();
        $request->file('image')->move('image/sliders',$extension);
        $this->slider->insertSlider([
            'title' => $request->get('title'),
            'image' => $extension
        ]);
        return redirect()->route('admin.index');
    }
    public function update($id){
        $slider=$this->slider->getSlider($id);
        return view('admin.slider.update', compact('slider'));
    }
    public function postUpdate(Request $request){
        $request->validate([
            'title' => 'required',
        ],[
            'title.required' => 'Please enter a title slider',
        ]);
        $slider=$this->slider->getSlider($request->get('id'));
        $extension=$slider->image;
        if($request->file('image')){
            $filePath='image/sliders/'.$slider->image;
            File::deletedelete($filePath);
            $extension=$request->file('image')->getClientOriginalName();
            $request->file('image')->move('image/sliders',$extension);
        }
        $this->slider->updateslider([
            'title' => $request->get('title'),
            'image' => $extension
        ],$request->get('id'));
        return redirect()->route('admin.index');
    }
    public function updateState($id){
        $this->slider->updateStateSlider($id);
        return redirect()->route('admin.index');
    }
    public function delete($id){
        $slider=$this->slider->getSlider($id);
        $filePath='image/sliders/'.$slider->image;
        File::delete($filePath);
        $this->slider->deleteSlider($id);
        return redirect()->route('admin.index');
    }
}
