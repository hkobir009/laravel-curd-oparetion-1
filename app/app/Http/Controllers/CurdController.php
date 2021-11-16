<?php

namespace App\Http\Controllers;
use App\Models\curd;
use Illuminate\Http\Request;

class CurdController extends Controller
{
    public function index(){
        $informations = curd::all();
        return view('curd',compact('informations'));
    }

    public function insert(){
        return view('insert');
    }

    public function store(Request $request){
           $info = new curd();
           $info->first_name=$request->first_name;
           $info->last_name=$request->last_name;
           $info->address=$request->address;
           $info->phone_no=$request->phone_no;
           $info->post_code=$request->post_code;
           $info->save();
    }
}
