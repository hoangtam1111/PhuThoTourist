<?php

namespace App\Http\Controllers;

use App\Repositories\Interfaces\FieldInterface;
use App\Repositories\Interfaces\RecruitmentInterface;
use App\Repositories\Interfaces\TypeWorkInterface;
use App\Repositories\Interfaces\WorkingPlaceInterface;
use Illuminate\Http\Request;

class RecruitmentController extends Controller
{
    private $recruiment, $field, $typeWork, $workingPlace;
    public function __construct(RecruitmentInterface $recruitmentInterface, FieldInterface $fieldInterface, TypeWorkInterface $typeWorkInterface, WorkingPlaceInterface $workingPlaceInterface){
        $this->recruiment = $recruitmentInterface;
        $this->field= $fieldInterface;
        $this->typeWork = $typeWorkInterface;
        $this->workingPlace= $workingPlaceInterface;
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
}
