<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Repositories\Interfaces\TypeWorkInterface;
use Illuminate\Http\Request;

class TypeWorkController extends Controller
{
    private $typeWork;
    public function __construct(TypeWorkInterface $typeWorkInterface){
        $this->typeWork = $typeWorkInterface;
    }
    public function index(){
        $typeWorks=$this->typeWork->getAlltypeWork();
        return view('', compact('typeWorks'));
    }
    public function insert(){
        return view();
    }
    public function postInsert(Request $request){
        $request->validate([
            'name' => 'required'
        ],[
            'name.required' => 'Please enter a name typeWork'
        ]);
        $this->typeWork->insertTypeWork($request->all());
        return redirect()->route('');
    }
    public function update($id){
        $typeWork=$this->typeWork->gettypeWork($id);
        return view('', compact('typeWork'));
    }
    public function postUpdate(Request $request){
        $request->validate([
            'name' => 'required'
        ],[
            'name.required' => 'Please enter a name typeWork'
        ]);
        $this->typeWork->updateTypeWork($request->all(),$request->get('id'));
        return redirect()->route('');
    }
    public function delete($id){
        $this->typeWork->deleteTypeWork($id);
        return view('');
    }
}
