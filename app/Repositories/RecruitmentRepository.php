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
    public function getRecruitmentsWithFilter($field, $type_work, $working_place, $sizePage, $currentPage){
        $query = Recruitment::query();

        if (!empty($field)) {
            $query->where('field_id', $field);
        }

        if (!empty($type_work)) {
            $query->where('type_work_id', $type_work);
        }

        if (!empty($working_place)) {
            $query->where('working_place_id', $working_place);
        }

        $skip = ($currentPage - 1) * $sizePage;

        // Sử dụng skip và take để giới hạn số lượng bản ghi trả về
        $results = $query->skip($skip)->take($sizePage)->get();

        return $results;
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
