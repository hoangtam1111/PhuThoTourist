<?php
namespace App\Repositories\Interfaces;
interface SliderInterface{
    public function getAllSlider();
    public function getAllSliderActive();
    public function getSlider($id);
    public function insertSlider($data);
    public function updateSlider($data,$id);
    public function updateStateSlider($id);
    public function deleteSlider($id);
}
