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
        return view('admin.field.index', compact('fields'));
    }
    public function insert(){
        return view('admin.field.insert');
    }
    public function postInsert(Request $request){
        $request->validate([
            'name' => 'required'
        ],[
            'name.required' => 'Please enter a name field'
        ]);
        $this->field->insertField($request->all());
        return redirect()->route('admin.field.index');
    }
    public function update($id){
        $field=$this->field->getField($id);
        return view('admin.field.update', compact('field'));
    }
    public function postUpdate(Request $request){
        $request->validate([
            'name' => 'required'
        ],[
            'name.required' => 'Please enter a name field'
        ]);
        // die($request->get('id'));
        $this->field->updateField($request->all(),$request->get('id'));
        return redirect()->route('admin.field.index');
    }
    public function delete($id){
        $this->field->deleteField($id);
        return redirect()->route('admin.field.index');
    }
}
