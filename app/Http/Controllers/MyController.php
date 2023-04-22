<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    public function index()
    {
        return view('sum');
    }
    public function test(){
        $title="Đây là tiêu đề";
        $desc="Đây là mô tả";
        $copyright="Học web chuẩn";
        return view('test')->with(['title'=>$title,'desc'=>$desc,'copyright'=>$copyright]);
    }
    public function store(Request $request){
        $sum=$request ->soA + $request->soB;
        return view('sum',['sum'=>$sum]);
    }
}
