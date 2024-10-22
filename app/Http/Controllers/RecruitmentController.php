<?php

namespace App\Http\Controllers;

use App\Repositories\Interfaces\RecruitmentInterface;
use Illuminate\Http\Request;

class RecruitmentController extends Controller
{
    private $recruiment;
    public function __construct(RecruitmentInterface $recruitmentInterface){
        $this->recruiment = $recruitmentInterface;
    }
    public function index($page=1, $field="", $type_work="", $working_place=""){
        $recruitments=$this->recruiment->getRecruitmentsWithFilter($field, $type_work, $working_place,$page);
        return view('recruitment', compact('recruitments'));
    }
    public function getRecruitment($id){
        $recruitment=$this->recruiment->getRecruitment($id);
        return view('recruitment', compact('recruitment'));
    }
}
