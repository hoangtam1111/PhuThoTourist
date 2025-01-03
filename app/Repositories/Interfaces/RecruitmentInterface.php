<?php
namespace App\Repositories\Interfaces;
interface RecruitmentInterface{
    public function getAllRecruitment();
    public function getRecruitment($id);
    public function getRecruitmentsWithFilter($search,$field, $type_work, $working_place, $sizePage, $currentPage);
    public function getTotalRecruitmentPages($search, $field, $type_work, $working_place, $sizePage);
    public function insertRecruitment($data);
    public function updateRecruitment($data,$id);
    public function deleteRecruitment($id);
}
