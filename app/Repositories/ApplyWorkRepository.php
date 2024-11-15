<?php

namespace App\Repositories;

use App\Repositories\Interfaces\ApplyWorkInterface;
use App\Models\ApplyWork;

class ApplyWorkRepository implements ApplyWorkInterface
{
    public function getAllApplyWork()
    {
        return ApplyWork::get();
    }
    public function getApplyWork($id)
    {
        return ApplyWork::find($id);
    }
    public function getAllApplyOnWork($idRecruiment){
        return ApplyWork::where('recruitment_id',$idRecruiment)->get();
    }
    public function insertApplyWork($data)
    {
        return ApplyWork::create($data);
    }
    public function updateApplyWork($data, $id)
    {
        $ApplyWork=ApplyWork::find($id);
        $ApplyWork->update($data);
    }
    public function deleteApplyWork($id)
    {
        $ApplyWork = ApplyWork::find($id);
        if(!empty($ApplyWork)){
            $ApplyWork->delete();
        }
    }
}
