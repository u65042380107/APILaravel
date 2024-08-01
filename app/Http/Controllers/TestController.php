<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;


use Illuminate\Http\Request;

class TestController extends Controller
{
    function index(){
        $att = DB::table('attractions')->get();
        // dd($att);
        return view('welcome',compact('att'));
    }

    public function detail($id)
    {
        $att = DB::table('attractions')->where('id',$id)->get();

        return view('detail',compact('att','id'));
    }
}
