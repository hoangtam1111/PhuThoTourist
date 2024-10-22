<?php
namespace App\Repositories\Interfaces;
interface CentralServiceInterface{
    public function getAllCentralService();
    public function getCentralService($id);
    public function insertCentralService($data);
    public function updateCentralService($data,$id);
    public function deleteCentralService($id);
}
