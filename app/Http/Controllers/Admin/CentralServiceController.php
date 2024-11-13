<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Repositories\Interfaces\CentralServiceInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class CentralServiceController extends Controller
{
    private $centralService;
    public function __construct(CentralServiceInterface $centralServiceInterface){
        $this->centralService=$centralServiceInterface;
    }
    public function index(){
        $centralServices=$this->centralService->getAllCentralService();
        return view('admin.index',compact('centralServices'));
    }
    public function insert(){
        return view('admin.central-service.insert');
    }
    public function postInsert(Request $request){
        $request->validate([
            'title' =>'required',
            'description' => 'required|string',
            'image' => 'required|image',
        ],[
            'title.required' =>'Please enter a title',
            'description.required' =>'Please enter a description',
            'image.required' =>'Please choose image central work'
        ]);
        $extension=$request->file('image')->getClientOriginalName();
        $request->file('image')->move('image/central',$extension);
        $this->centralService->insertCentralService([
            'title' => $request->get('title'),
            'description' => $request->get('description'),
            'image' => $extension
        ]);
        return redirect()->route('admin.index');
    }
    public function update($id){
        $centralService = $this->centralService->getCentralService($id);
        return view('admin.central-service.update', compact('centralService'));
    }
    public function updateState($id){
        $this->centralService->updateStateCentralService($id);
        return redirect()->route('admin.index');
    }
    public function postUpdate(Request $request){
        $request->validate([
            'title' =>'required',
            'description' => 'required|string',
            'image' => 'required|image',
        ],[
            'title.required' =>'Please enter a title',
            'description.required' =>'Please enter a description',
            'image.required' =>'Please choose image central work'
        ]);
        $central=$this->centralService->getCentralService($request->get('id'));
        $extension=$central->image;
        if($request->file('image')){
            $filePath='image/central/'.$central->image;
            if(File::exists($filePath)){
                File::delete($filePath);
            }
            $extension=$request->file('image')->getClientOriginalName();
            $request->file('image')->move('image/central',$extension);
        }
        $this->centralService->updateCentralService([
            'title' => $request->get('title'),
            'description' => $request->get('description'),
            'image' => $extension
        ],$request->get('id'));
        return redirect()->route('admin.index');
    }
    public function delete($id){
        $central=$this->centralService->getCentralService($id);
        $filePath='image/central/'.$central->image;
        if(File::exists($filePath)){
            File::delete($filePath);
        }
        $this->centralService->deleteCentralService($id);
        return redirect()->route('admin.index');
    }
}
