<?php

namespace App\Repositories;

use App\Repositories\Interfaces\FieldInterface;
use App\Models\Field;

class FieldRepository implements FieldInterface
{
    public function getAllField(){
        return Field::get();
    }
    public function getField($id)
    {
        return Field::find($id);
    }
    public function insertField($data)
    {
        Field::create($data);
    }
    public function updateField($data, $id)
    {
        $Field=Field::find($id);
        $Field->update($data);
    }
    public function deleteField($id)
    {
        $Field = Field::find($id);
        if(!empty($Field)){
            $Field->delete();
        }
    }
}
