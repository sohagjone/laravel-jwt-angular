<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;

class Crud extends Model
{
    use HasFactory;

    function getCurd()
    {
        $data = DB::table('cruds')->get();
        return $data;
    }
    function addCrud()
    {
        dd("model_called");
    }
}
