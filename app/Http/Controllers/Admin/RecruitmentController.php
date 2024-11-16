<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Repositories\Interfaces\FieldInterface;
use App\Repositories\Interfaces\RecruitmentInterface;
use App\Repositories\Interfaces\TypeWorkInterface;
use App\Repositories\Interfaces\WorkingPlaceInterface;
use Illuminate\Http\Request;

class RecruitmentController extends Controller
{
    private $recruitment, $field, $typeWork, $workingPlace;
    public function __construct(RecruitmentInterface $recruitmentInterface, FieldInterface $fieldInterface, TypeWorkInterface $typeWorkInterface, WorkingPlaceInterface $workingPlaceInterface){
        $this->recruitment = $recruitmentInterface;
        $this->field = $fieldInterface;
        $this->typeWork = $typeWorkInterface;
        $this->workingPlace = $workingPlaceInterface;
    }
    public function index(){
        $recruitments=$this->recruitment->getAllRecruitment();
        return view('admin.recruitment.index', compact('recruitments'));
    }
    public function insert(){
        $fields=$this->field->getAllField();
        $typeWorks=$this->typeWork->getAllTypeWork();
        $workingPlaces=$this->workingPlace->getAllWorkingPlace();
        return view('admin.recruitment.insert',compact('fields', 'typeWorks', 'workingPlaces'));
    }
    public function postInsert(Request $request){
        $request->validate([
            'location' => 'required|string',
            'address' =>'required|string',
            'job_description'=>'required|string',
            'date'=>'required|date',
            'interest'=>'required|string',
            'requirement'=>'required|string',
            'age'=>'required|string',
            'level'=>'required|string',
        ],[
            'location.required' => 'Please enter a location',
            'address.required'=> 'Please enter a address',
            'job_description.required'=> 'Please enter a job description',
            'date.required'=> 'Please enter a date',
            'interest.required'=> 'Please enter a interest',
            'requirement.required'=> 'Please enter requiredirement',
            'age.required'=> 'Please enter age',
            'level.required'=> 'Please enter level requirements',

        ]);
        $this->recruitment->insertRecruitment($request->all());
        return redirect()->route('admin.recruitment.index');
    }
    public function update($id){
        $recruitment=$this->recruitment->getRecruitment($id);
        $fields=$this->field->getAllField();
        $typeWorks=$this->typeWork->getAllTypeWork();
        $workingPlaces=$this->workingPlace->getAllWorkingPlace();
        // die($recruitment);
        return view('admin.recruitment.update',compact('recruitment','fields', 'typeWorks', 'workingPlaces'));
    }
    public function postUpdate(Request $request){
        $request->validate([
            'location' => 'required|string',
            'quantity' => 'required|integer',
            'address' =>'required|string',
            'job_description'=>'required|string',
            'date'=>'required|date',
            'interest'=>'required|string',
            'requirement'=>'required|string',
            'age'=>'required|string',
            'level'=>'required|string',
        ],[
            'location.required' => 'Please enter a location',
            'quantity.required'=> 'Please enter a quantity',
            'address.required'=> 'Please enter a address',
            'job_description.required'=> 'Please enter a job description',
            'date.required'=> 'Please enter a date',
            'interest.required'=> 'Please enter a interest',
            'requirement.required'=> 'Please enter requiredirement',
            'age.required'=> 'Please enter age',
            'level.required'=> 'Please enter level requirements',

        ]);
        $this->recruitment->updateRecruitment($request->all(),$request->get('id'));
        return redirect()->route('admin.recruitment.index');
    }
    public function delete($id){
        $this->recruitment->deleteRecruitment($id);
        return redirect()->route('admin.recruitment.index');
    }
}
