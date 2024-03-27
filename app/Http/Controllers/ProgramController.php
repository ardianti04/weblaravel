<?php

namespace App\Http\Controllers;

use App\Models\Program;
use App\Models\Edulevel;
use Illuminate\Http\Request;

class ProgramController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $programs=Program::all();
        $programs = Program::with('edulevel')->get();
        // return $programs;
        return view("program/index", compact('programs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $edulevels = Edulevel::all();
        return view('program/create', compact('edulevels'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|min:3',
            'edulevel_id' => 'required',
        ], [
            'edulevel_id.required' => 'Jenjang Tidak Boleh Kosong',
            'name.required' => 'Nama Jenjang Tidak Boleh Kosong',

        ]);
        // return $request;
        //cara 1
        //     $program = new Program;
        //     $program->name = $request->name;
        //    $program->edulevel_id = $request->edulevel_id;
        //    $program->student_price = $request->student_price;
        //    $program->student_max = $request->student_max;
        //    $program->info = $request->info;

        //     $program->save();

        // cara 2
        // Program::create([
        //     'name' => $request->name,
        //     'edulevel_id' => $request->edulevel_id,
        //     'student_price' => $request->student_price,
        //     'student_max' => $request->student_max,
        //     'info' => $request->info,
        // ]);

        //cara 3 :quick mass assignment> syarat : field tabel dan nama inputan harus sama
        Program::create($request->all());


        //cara 4 gabungan
        // $program = new Program([
        //     'name' => $request->name,
        //     'edulevel_id' => $request->edulevel_id,
        //     'student_price' => $request->student_price,
        //     'student_max' => $request->student_max,
        //     'info' => $request->info,
        // ]);
        // //jika ingin memunculkan dari default kodingnnya
        // $program->student_price= $request->student_price;
        // $program->save();


        return redirect('programs')->with('status', 'Program Berhasil di tambah');
    }

    /**
     * Display the specified resource.
     */
    public function show(Program $program)
    {
        // $program=Program::find($id);

        // $program=Program::where('id',$id)->get();
        // $program=$program[0];

        $program->makeHidden(['edulevel_id']);
        // return $program;
        return view("program/show", compact('program'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Program $program)
    {
        $edulevels = Edulevel::all();
        return view('program.edit', compact('program', 'edulevels'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Program $program)
    {
        $request->validate([
            'name' => 'required|min:3',
            'edulevel_id' => 'required',
        ], [
            'edulevel_id.required' => 'Jenjang Tidak Boleh Kosong',
            'name.required' => 'Nama Jenjang Tidak Boleh Kosong',

        ]);
        //cara 1
        //     $program = new Program;
        //     $program->name = $request->name;
        //    $program->edulevel_id = $request->edulevel_id;
        //    $program->student_price = $request->student_price;
        //    $program->student_max = $request->student_max;
        //    $program->info = $request->info;

        //     $program->save();

        //cara 2 :mass assignment
        Program::where('id', $program->id)
            ->update([
                'name' => $request->name,
                'edulevel_id' => $request->edulevel_id,
                'student_price' => $request->student_price,
                'student_max' => $request->student_max,
                'info' => $request->info,
            ]);
        return redirect('programs')->with('status', 'Program Berhasil diupdate');


        // return $request;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Program $program)
    {
        //
    }
}
