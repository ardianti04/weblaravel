<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EdulevelController extends Controller
{
    public function data(){
        $edulevel=DB::table('edulevels')->get();
        // return $edulevel;
        // return view('edulevel.data',['edulevel'=>$edulevel])
        return view('edulevel.data',compact('edulevel'));
    }
    public function add(){
        return view('edulevel.add');
    }
    public function addProcess(Request $request)
    {
        $data=[
            'name' => $request->name,
            'desc' => $request->desc
        ];
        DB::table('edulevels')->insert($data);
        return view('edulevel.data',[
            'name' => $request->name,
            'desc' => $request->desc
        ]);


    }
}
