<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class test extends Controller
{
    public function index(){
        $data = DB::table('users')
                ->select('role', DB::raw('count(*) as total'))
                ->groupBy('role')
                ->get();

                // dd($data);
    return view('Test.test', compact('data'));
    }
}
