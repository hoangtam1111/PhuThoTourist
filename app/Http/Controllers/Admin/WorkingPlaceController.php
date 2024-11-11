<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Repositories\Interfaces\WorkingPlaceInterface;
use Illuminate\Http\Request;

class WorkingPlaceController extends Controller
{
    private $workingPlace;
    public function __construct(WorkingPlaceInterface $workingPlaceInterface){
        $this->workingPlace = $workingPlaceInterface;
    }
    public function index(){
        $workingPlaces=$this->workingPlace->getAllWorkingPlace();
        return view('admin.working-place.index', compact('workingPlaces'));
    }
    public function insert(){
        return view('admin.working-place.insert');
    }
    public function postInsert(Request $request){
        $request->validate([
            'name' => 'required'
        ],[
            'name.required' => 'Please enter a name working place'
        ]);
        $this->workingPlace->insertworkingPlace($request->all());
        return redirect()->route('admin.working-place.index');
    }
    public function update($id){
        $workingPlace=$this->workingPlace->getWorkingPlace($id);
        return view('admin.working-place.update', compact('workingPlace'));
    }
    public function postUpdate(Request $request){
        $request->validate([
            'name' => 'required'
        ],[
            'name.required' => 'Please enter a name workingPlace'
        ]);
        $this->workingPlace->updateWorkingPlace($request->all(),$request->get('id'));
        return redirect()->route('admin.working-place.index');
    }
    public function delete($id){
        $this->workingPlace->deleteWorkingPlace($id);
        return view('admin.working-place.index');
    }
}
