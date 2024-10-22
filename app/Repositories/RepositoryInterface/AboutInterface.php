<?php
namespace App\Repositories\Interfaces;
interface AboutInterface{
    public function getAbout($id);
    public function insertAbout($data);
    public function updateAbout($data,$id);
    public function deleteAbout($id);
}
