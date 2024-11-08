<?php

namespace App\Repositories;

use App\Repositories\Interfaces\SliderInterface;
use App\Models\Slider;

class SliderRepository implements SliderInterface
{
    public function getAllSlider(){
        return Slider::get();
    }
    public function getAllSliderActive(){
        return Slider::where('active',1)->get();
    }
    public function getSlider($id)
    {
        return Slider::find($id);
    }
    public function insertSlider($data)
    {
        Slider::create($data);
    }
    public function updateSlider($data, $id)
    {
        $Slider=Slider::find($id);
        $Slider->update($data);
    }
    public function updateStateSlider($id){
        $slider=Slider::find($id);
        $slider->state=!$slider->state;
        $slider->save();
    }
    public function deleteSlider($id)
    {
        $Slider = Slider::find($id);
        if(!empty($Slider)){
            $Slider->delete();
        }
    }
}
