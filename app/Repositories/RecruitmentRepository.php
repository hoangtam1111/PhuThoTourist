<?php

namespace App\Repositories;

use App\Repositories\Interfaces\RecruitmentInterface;
use App\Models\Recruitment;

class RecruitmentRepository implements RecruitmentInterface
{
    public function getAllRecruitment(){
        return Recruitment::get();
    }
    public function getRecruitment($id)
    {
        return Recruitment::find($id);
    }
    public function insertRecruitment($data)
    {
        Recruitment::create($data);
    }
    public function updateRecruitment($data, $id)
    {
        $Recruitment=Recruitment::find($id);
        $Recruitment->update($data);
    }
    public function deleteRecruitment($id)
    {
        $Recruitment = Recruitment::find($id);
        if(!empty($Recruitment)){
            $Recruitment->delete();
        }
    }
}
