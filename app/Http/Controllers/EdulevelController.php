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
        $request->validate([
            'name' => 'required|min:2',
            'desc' => 'required',
        ],[
            'name.required'=>'Nama Jenjang Tidak Boleh Kosong'
        ]);
        DB::table('edulevels')->insert(
        [
            'name' => $request->name,
            'desc' => $request->desc
        ]);
        return redirect('edulevel')->with('status', 'Jenjang Berhasil di tambah');

    }
    public function edit(string $id){

        // return view('edulevel.edit');
        // dd($id);

        $edulevel=DB::table('edulevels')->where('id', $id)->first();
        // dd($edulevel);
        return view('edulevel.edit',compact('edulevel'));
    }
    public function editProcess(Request $request, $id){
        $validated = $request->validate([
            'name' => 'required|min:2',
            'desc' => 'required',
        ]);
        DB::table('edulevels')->where('id', $id)
        ->update(
            [
                'name' => $request->name,
                'desc' => $request->desc
            ]
        );
        return redirect('edulevel')->with('status', 'Jenjang Berhasil diupdate');
    }
    public function delete($id){
        $deleted = DB::table('edulevels')->where('id', $id)->delete();
        return redirect('edulevel')->with('status', 'Jenjang Berhasil dihapus');
    }
    }

