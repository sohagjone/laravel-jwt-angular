<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Crud;

class CrudController extends Controller
{
    public function manage_product()
    {
        $crudModel =  new Crud();
        $data = $curdModel->getCrud();
        return response()->json($data);

    }
    /*public function add_product(Request $request)
    {
       $crud = Crud::all();
       return $crud;
    }*/
    public function add_product(Request $request)
    {
        $crudModel  = new Crud();
        $data = $crudModel->getCrud();
        return dd($data);
    }
}
