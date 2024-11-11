<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Repositories\Interfaces\CentralServiceInterface;
use App\Repositories\Interfaces\SliderInterface;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    private $slider, $centralService;
    public function __construct(SliderInterface $sliderInterface, CentralServiceInterface $centralServiceInterface){
        $this->slider=$sliderInterface;
        $this->centralService=$centralServiceInterface;
    }
    public function index(){
        $sliders=$this->slider->getAllSlider();
        $centralServices=$this->centralService->getAllCentralService();
        return view('admin.index', compact('sliders', 'centralServices'));
    }
}
