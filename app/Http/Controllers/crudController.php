<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpFoundation\Session\Session;

class crudController extends Controller
{
    public function insertData()
    {
        $data = Request::capture();
        $data->replace($data->except(['_token']));
        $tbl = decrypt($data['tbl']);
        unset($data['tbl']);
        //print_r($data);
        DB::table($tbl)->insert($data->toArray());
    }
}
