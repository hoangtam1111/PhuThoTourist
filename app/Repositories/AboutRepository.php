<?php

namespace App\Repositories;

use App\Models\About;
use App\Repositories\Interfaces\AboutInterface;

class AboutRepository implements AboutInterface
{
    public function getAbout()
    {
        return About::get();
    }
    public function insertAbout($data)
    {
        About::create($data);
    }
    public function updateAbout($data, $id)
    {
        $about=About::find($id);
        $about->update($data);
    }
    public function deleteAbout($id)
    {
        $about = About::find($id);
        if(!empty($about)){
            $about->delete();
        }
    }
}
