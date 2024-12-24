<?php

namespace App\Http\Controllers;

use App\Repositories\Interfaces\AboutInterface;
use App\Repositories\Interfaces\CentralServiceInterface;
use App\Repositories\Interfaces\PostInterface;
use App\Repositories\Interfaces\SliderInterface;
use App\Repositories\Interfaces\UserInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    private $about, $post, $centralService, $slider, $user;
    public function __construct(AboutInterface $aboutInterface, PostInterface $postInterface, CentralServiceInterface $centralService, SliderInterface $sliderInterface, UserInterface $userInterface){
        $this->about = $aboutInterface;
        $this->post = $postInterface;
        $this->centralService = $centralService;
        $this->slider = $sliderInterface;
        $this->user=$userInterface;
    }
    public function index(){
        $sliders=$this->slider->getAllSliderActive();
        // $about=$this->about->getAbout()->post();
        $newPosts=$this->post->getNewPost(3);
        // die($newPosts[1]->typePost()->get());
        $centralServices=$this->centralService->getAllCentralServiceActive();
        return view('index', compact('sliders', 'newPosts', 'centralServices'));
    }
    public function login(){
        return view('login');
    }
    public function loginAdmin(Request $request){
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ],[
            'email.required' => 'Vui lòng nhập email',
            'password.required' => 'Vui lòng nhập mật khẩu'
        ]);
        $user=$this->user->getUserByEmail($request->get('email'));
        if (Hash::check($request->get('password'), $user->password)){
            auth()->login($user);
            return redirect()->route('admin.index');
        }
        return redirect()->route('login')->with('error', 'Sai email hoặc mật khẩu');
    }
    public function logoutAdmin(){
        auth()->logout();
        return redirect()->route('login');
    }
}
