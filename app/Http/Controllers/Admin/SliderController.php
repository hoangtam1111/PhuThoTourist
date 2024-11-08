<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Repositories\Interfaces\SliderInterface;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    private $slider;
    public function __construct(SliderInterface $sliderInterface){
        $this->slider = $sliderInterface;
    }
    public function index(){
        $sliders=$this->slider->getAllSlider();
        return view('', compact('sliders'));
    }
    public function insert(){
        return view();
    }
    public function postInsert(Request $request){
        $request->validate([
            'title' => 'required',
            'image' =>'required|file'
        ],[
            'title.required' => 'Please enter a title slider',
            'image.required' => 'Please enter image of slide',
        ]);
        $this->slider->insertSlider($request->all());
        return redirect()->route('');
    }
    public function update($id){
        $slider=$this->slider->getSlider($id);
        return view('', compact('slider'));
    }
    public function postUpdate(Request $request){
        $request->validate([
            'title' => 'required',
            'image' =>'required|file'
        ],[
            'title.required' => 'Please enter a title slider',
            'image.required' => 'Please enter image of slide',
        ]);
        $this->slider->updateslider($request->all(),$request->get('id'));
        return redirect()->route('');
    }
    public function updateState($id){
        $this->slider->updateStateSlider($id);
        return redirect()->route('');
    }
    public function delete($id){
        $this->slider->deleteSlider($id);
        return view('');
    }
}
