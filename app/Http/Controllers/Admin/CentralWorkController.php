<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Repositories\Interfaces\CentralServiceInterface;
use Illuminate\Http\Request;

class CentralWorkController extends Controller
{
    private $centralService;
    public function __construct(CentralServiceInterface $centralServiceInterface){
        $this->centralService=$centralServiceInterface;
    }
    public function index(){
        $centralServices=$this->centralService->getAllCentralService();
        return view('',compact('centralServices'));
    }
    public function insert(){
        return view();
    }
    public function insertCentralService(Request $request){
        $request->validate([
            'title' =>'required',
            'description' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ],[
            'title.required' =>'Please enter a title',
            'description.required' =>'Please enter a description',
            'image.required' =>'Please choose image central work'
        ]);
        $this->centralService->insertCentralService($request->all());
        return redirect()->route('');
    }
    public function update($id){
        $centralService = $this->centralService->getCentralService($id);
        return view('', compact('centralService'));
    }
    public function updateState($id){
        $this->centralService->updateStateCentralService($id);
        return redirect()->route('');
    }
    public function postUpdate(Request $request){
        $request->validate([
            'title' =>'required',
            'description' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ],[
            'title.required' =>'Please enter a title',
            'description.required' =>'Please enter a description',
            'image.required' =>'Please choose image central work'
        ]);
        $this->centralService->updateCentralService($request->all(),$request->get('id'));
        return redirect()->route('');
    }
    public function delete($id){
        $this->centralService->deleteCentralService($id);
        return view();
    }
}
