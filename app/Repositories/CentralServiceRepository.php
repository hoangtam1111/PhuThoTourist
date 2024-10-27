<?php

namespace App\Repositories;

use App\Repositories\Interfaces\CentralServiceInterface;
use App\Models\CentralService;

class CentralServiceRepository implements CentralServiceInterface
{
    public function getCentralService($id)
    {
        return CentralService::find($id) ;
    }
    public function getAllCentralService(){
        return CentralService::get();
    }
    public function getAllCentralServiceActive(){
        return CentralService::where('active',1)->get();
    }

    public function insertCentralService($data)
    {
        CentralService::create($data);
    }
    public function updateCentralService($data, $id)
    {
        $CentralService=CentralService::find($id);
        $CentralService->update($data);
    }
    public function deleteCentralService($id)
    {
        $CentralService = CentralService::find($id);
        if(!empty($CentralService)){
            $CentralService->delete();
        }
    }
}
