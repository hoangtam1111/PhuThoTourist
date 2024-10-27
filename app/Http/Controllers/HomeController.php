<?php

namespace App\Http\Controllers;

use App\Repositories\Interfaces\AboutInterface;
use App\Repositories\Interfaces\CentralServiceInterface;
use App\Repositories\Interfaces\PostInterface;
use App\Repositories\Interfaces\SliderInterface;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    private $about, $post, $centralService, $slider;
    public function __construct(AboutInterface $aboutInterface, PostInterface $postInterface, CentralServiceInterface $centralService, SliderInterface $sliderInterface){
        $this->about = $aboutInterface;
        $this->post = $postInterface;
        $this->centralService = $centralService;
        $this->slider = $sliderInterface;
    }
    public function index(){
        $sliders=$this->slider->getAllSliderActive();
        // $about=$this->about->getAbout()->post();
        $newPosts=$this->post->getNewPost(3);
        $centralServices=$this->centralService->getAllCentralServiceActive();
        return view('index', compact('sliders', 'newPosts', 'centralServices'));
    }
}
