<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class adminController extends Controller
{
    public function index()
    {
        return view('backend.index');
    }

    public function adminCategory()
    {
        $data = DB::table('category')->get();
        return view('backend.category', ['data' => $data]);
    }
}
