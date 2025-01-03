<?php
namespace App\Repositories\Interfaces;
interface CentralServiceInterface{
    public function getAllCentralService();
    public function getCentralService($id);
    public function getAllCentralServiceActive();
    public function insertCentralService($data);
    public function updateCentralService($data,$id);
    public function updateStateCentralService($id);
    public function deleteCentralService($id);
}
