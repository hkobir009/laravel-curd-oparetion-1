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

    public function edit($id){
        $data = curd::findOrFail($id);
        return view('update',compact('data'));
    }

    public function update(Request $request, $id){
        $info = curd::findOrFail($id);
        $info->first_name=$request->first_name;
        $info->last_name=$request->last_name;
        $info->address=$request->address;
        $info->phone_no=$request->phone_no;
        $info->post_code=$request->post_code;
        $info->save();
        return redirect()->route('home');
    }

    public function delete($id){
        $id = curd::findOrFail($id);
        $id->delete();
        return redirect()->back()->with('msg','delete success');
    }








    public function store(Request $request){
        //    $info = new curd();
        //    $info->first_name=$request->first_name;
        //    $info->last_name=$request->last_name;
        //    $info->address=$request->address;
        //    $info->phone_no=$request->phone_no;
        //    $info->post_code=$request->post_code;
        //    $info->save();
        //    return redirect()->back()->with('msg','insert successfully');


//            mass assignment

        curd::create([
            'first_name'=>$request->first_name,
            'last_name'=>$request->last_name,
            'address'=>$request->address,
            'phone_no'=>$request->phone_no,
            'post_code'=>$request->post_code,
        ]);

        return redirect()->back()->with('msg','insert successfully');

    }

}
