<?php
namespace App\Repositories\Interfaces;
interface RecruitmentInterface{
    public function getAllRecruitment();
    public function getRecruitment($id);
    public function insertRecruitment($data);
    public function updateRecruitment($data,$id);
    public function deleteRecruitment($id);
}
