<?php
namespace App\Repositories\Interfaces;
interface ApplyWorkInterface{
    public function getApplyWork($id);
    public function getAllApplyOnWork($idRecruiment);
    public function insertApplyWork($data);
    public function updateApplyWork($data,$id);
    public function deleteApplyWork($id);
}
