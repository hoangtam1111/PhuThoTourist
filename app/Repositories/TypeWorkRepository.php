<?php

namespace App\Repositories;

use App\Repositories\Interfaces\TypeWorkInterface;
use App\Models\TypeWork;

class TypeWorkRepository implements TypeWorkInterface
{
    public function getAllTypeWork(){
        return TypeWork::get();
    }
    public function getTypeWork($id)
    {
        return TypeWork::find($id);
    }
    public function insertTypeWork($data)
    {
        return TypeWork::create($data);
    }
    public function updateTypeWork($data, $id)
    {
        $TypeWork=TypeWork::find($id);
        $TypeWork->update($data);
    }
    public function deleteTypeWork($id)
    {
        $TypeWork = TypeWork::find($id);
        if(!empty($TypeWork)){
            $TypeWork->delete();
        }
    }
}
