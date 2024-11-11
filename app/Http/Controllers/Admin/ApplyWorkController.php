<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Repositories\Interfaces\ApplyWorkInterface;
use Illuminate\Http\Request;

class ApplyWorkController extends Controller
{
    private $applyWork;
    public function __construct(ApplyWorkInterface $applyWorkInterface){
        $this->applyWork = $applyWorkInterface;
    }
    public function index(Request $request){
        $recruitment_id=$request->input('recruitment_id', null);
        $applyWorks=null;
        if($recruitment_id!=null){
            $applyWorks=$this->applyWork->getAllApplyOnWork($recruitment_id);
        }else{
            $applyWorks=$this->applyWork->getAllApplyWork();
        }
        return view('',compact('recruitment_id','applyWorks'));
    }
    public function insert(){
        return view('admin.apply-work.insert');
    }
    public function postInsert(Request $request){
        $request->validate([
            'name'=>'required|string',
            'dob'=>'required|date',
            'place_of_birth'=>'required|string',
            'current_residence'=>'required|string',
            'phone'=>'required|string',
            'email'=>'required|email',
            'level'=>'required|string',
            'file_cv'=>'required|file',
            'previous_workplace'=>'required|string',
            'experiance'=>'required|string',
            'recruitment_id'=>'required',
        ],[
            'name.required'=>'Please enter your name',
            'place_of_birth.required'=>'Please enter your place of birth',
            'current_residence'=>'Please enter your current residence',
            'phone.required'=>'Please enter your phone',
            'email.required'=>'Please enter your email',
            'level.required'=>'Please enter your level',
            'file_cv.required'=>'Please enter your file CV',
            'previous_workplace.required'=>'Please enter your previous work',
            'experince.required'=>'Please enter your experience',
            'recruitment.required'=>'Please choose work recruiment'
        ]);
        $this->applyWork->insertApplyWork($request->all());
        return redirect()->route('');
    }
    public function update($id){
        $applyWork=$this->applyWork->getApplyWork($id);
        return view('', compact('applyWork'));
    }
    public function postUpdate(Request $request){
        $request->validate([
            'name'=>'required|string',
            'dob'=>'required|date',
            'place_of_birth'=>'required|string',
            'current_residence'=>'required|string',
            'phone'=>'required|string',
            'email'=>'required|email',
            'level'=>'required|string',
            'file_cv'=>'required|file',
            'previous_workplace'=>'required|string',
            'experiance'=>'required|string',
            'recruitment_id'=>'required',
        ],[
            'name.required'=>'Please enter your name',
            'place_of_birth.required'=>'Please enter your place of birth',
            'current_residence'=>'Please enter your current residence',
            'phone.required'=>'Please enter your phone',
            'email.required'=>'Please enter your email',
            'level.required'=>'Please enter your level',
            'file_cv.required'=>'Please enter your file CV',
            'previous_workplace.required'=>'Please enter your previous work',
            'experince.required'=>'Please enter your experience',
            'recruitment.required'=>'Please choose work recruiment'
        ]);
        $this->applyWork->updateApplyWork($request->all(),$request->get('id'));
        return redirect()->route('');
    }
    public function delete($id){
        $this->applyWork->deleteApplyWork($id);
        return view('');
    }
}
