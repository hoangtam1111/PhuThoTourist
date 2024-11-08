<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Repositories\Interfaces\FieldInterface;
use Illuminate\Http\Request;

class FieldController extends Controller
{
    private $field;
    public function __construct(FieldInterface $fieldInterface){
        $this->field = $fieldInterface;
    }
    public function index(){
        $fields=$this->field->getAllField();
        return view('', compact('fields'));
    }
    public function insert(){
        return view();
    }
    public function postInsert(Request $request){
        $request->validate([
            'name' => 'required'
        ],[
            'name.required' => 'Please enter a name field'
        ]);
        $this->field->insertField($request->all());
        return redirect()->route('');
    }
    public function update($id){
        $field=$this->field->getField($id);
        return view('', compact('field'));
    }
    public function postUpdate(Request $request){
        $request->validate([
            'name' => 'required'
        ],[
            'name.required' => 'Please enter a name field'
        ]);
        $this->field->updateField($request->all(),$request->get('id'));
        return redirect()->route('');
    }
    public function delete($id){
        $this->field->deleteField($id);
        return view('');
    }
}
