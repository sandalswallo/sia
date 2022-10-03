<?php

namespace App\Http\Controllers;

use App\Models\kelas;
use Illuminate\Http\Request;
use Validator;

class KelasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kelas = Kelas::all();
        return view('kelas.index',compact('kelas'));
    }


    public function data()
    {
        $kelas = Kelas::orderBy('id', 'desc')->get();

        return datatables()
        ->of($kelas)
        ->addIndexColumn()
        ->addColumn('aksi' , function($kelas){
            return '
            <div class="btn-group">

            <button onclick="editData(`' .route('kelas.update', $kelas->id). '`)" class="btn btn-flat btn-xs btn-warning"><i class="fa fa-edit"></i></button> 
            <button onclick="deleteData(`' .route('kelas.destroy', $kelas->id). '`)" class="btn btn-flat btn-xs btn-danger"><i class="fa fa-trash"></i></button> 
            
            </div>
            ';
        })
        ->rawColumns(['aksi'])
        ->make(true);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'nama' => 'required'
        ]);

        if($validator -> fails()){
            return response()->json($validator->errors(), 422);
        }

        $kelas = Kelas::create([
            'nama' => $request->nama
        ]);

        return response()->json([
            'succses' => true,
            'message' => 'Data berhasil disimpan',
            'data' => $kelas
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\kelas  $kelas
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $kelas = Kelas::find($id);
        return response()->json($kelas);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\kelas  $kelas
     * @return \Illuminate\Http\Response
     */
    public function edit(kelas $kelas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\kelas  $kelas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $kelas= Kelas::find($id);
        $kelas->nama = $request->nama;
        $kelas->update();
        return response()->json('Data berhasil disimpan');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\kelas  $kelas
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kelas= Kelas::find($id);
        $kelas->delete();

        return response()->json(null, 204);
    }
}
