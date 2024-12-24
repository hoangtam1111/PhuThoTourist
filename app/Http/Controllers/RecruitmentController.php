<?php

namespace App\Http\Controllers;

use App\Repositories\Interfaces\ApplyWorkInterface;
use App\Repositories\Interfaces\FieldInterface;
use App\Repositories\Interfaces\RecruitmentInterface;
use App\Repositories\Interfaces\TypeWorkInterface;
use App\Repositories\Interfaces\WorkingPlaceInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Carbon\Carbon;
class RecruitmentController extends Controller
{
    private $recruiment, $field, $typeWork, $workingPlace, $applyWork;
    public function __construct(RecruitmentInterface $recruitmentInterface, FieldInterface $fieldInterface, TypeWorkInterface $typeWorkInterface, WorkingPlaceInterface $workingPlaceInterface, ApplyWorkInterface $applyWorkInterface){
        $this->recruiment = $recruitmentInterface;
        $this->field= $fieldInterface;
        $this->typeWork = $typeWorkInterface;
        $this->workingPlace= $workingPlaceInterface;
        $this->applyWork=$applyWorkInterface;
    }
    public function index(Request $request){
        $page = $request->input('page', 1);
        $search = $request->input('search', null);
        $field=$request->input('field', null);
        $type_work=$request->input('type_work', null);
        $working_place=$request->input('working_place', null);

        $recruitments=$this->recruiment->getRecruitmentsWithFilter($search,$field, $type_work, $working_place,9,$page);
        $fields=$this->field->getAllField();
        $type_works=$this->typeWork->getAllTypeWork();
        $working_places=$this->workingPlace->getAllWorkingPlace();
        $field_id=$field; $type_work_id=$type_work; $working_place_id=$working_place;
        $total=$this->recruiment->getTotalRecruitmentPages($search,$field, $type_work, $working_place,9);
        return view('recruitment', compact(
            'recruitments',
            'fields',
            'type_works',
            'working_places',
            'page',
            'field_id',
            'type_work_id',
            'working_place_id',
            'search',
            'total'
        ));
    }
    public function detail($id){
        $recruitment=$this->recruiment->getRecruitment($id);
        return view('detail_recruitment', compact('recruitment'));
    }
    public function apply(Request $request){
        $request->validate([
            'name' => 'required',
            'dob' => 'required|date',
            'current_residence' => 'required',
            'email' => 'required|email',
            'level' => 'required',
            'place_of_birth' => 'required',
            'phone' => 'required',
            'file_cv' => 'required',
            'previous_workplace' => 'required',
            'experience' => 'required',
        ],[
            'name.required' => 'Vui lòng nhập tên',
            'dob.required' => 'Vui lòng nhập ngày sinh',
            'dob.date' => 'Vui lòng nhập đúng định dạng dd/mm/yyyy',
            'current_residence.required' => 'Vui lòng nhập nơi ở hiện nay',
            'email.required' => 'Vui lòng nhập email',
            'email.email' => 'Vui lòng nhập đúng định dạng email',
            'level.required' => 'Vui lòng nhập trình độ',
            'place_of_birth.required' => 'Vui lòng nhập nơi sinh',
            'phone.required' => 'Vui lòng nhập số điện thoại',
            'file_cv.required' => 'Vui lòng chọn file CV',
            'file_cv.file' => 'Vui lòng chọn file đúng định dạng',
            'previous_workplace.required' => 'Vui lòng nhập những vị trí làm trước đây',
            'experience.required' => 'Vui lòng nhập kinh nghiệm làm việc',
        ]);
        $file=$request->file('file_cv')->getClientOriginalName();
        $request->file('file_cv')->move('files/cv',$file);

        $this->applyWork->insertApplyWork([
            'name' => $request->get('name'),
            'sex' => $request->get('sex'),
            'dob' => Carbon::createFromFormat('d-m-Y',  $request->get('dob')),
            'place_of_birth' => $request->get('place_of_birth'),
            'current_residence' => $request->get('current_residence'),
            'phone' => $request->get('phone'),
            'email' => $request->get('email'),
            'facebook' => $request->get('facebook'),
            'level' => $request->get('level'),
            'file_cv' => $file,
            'long_day_work' => $request->get('long_day_work'),
            'overtime' => $request->get('overtime'),
            'previous_workplace' => $request->get('previous_workplace'),
            'experience' => $request->get('experience'),
            'recruitment_id' => $request->get('id'),
        ]);
        return redirect()->route('detail_recruitment',$request->get('id'));
    }
}
