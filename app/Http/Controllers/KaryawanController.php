<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\category;
use App\karyawan;
use App\jabatan;
use Illuminate\Support\Facades\DB;

class KaryawanController extends Controller
{
    
    public function index(\Illuminate\Http\Request $request)
    {
        //tampil data jabatan
        $jabatan = jabatan::all();
        $karyawan = karyawan::with(['get_jabatan'])->when($request->keywoard, function ($query) use ($request){
            $query->where('nama', 'like', "%{$request->keywoard}%");
        })->get();

        return view('karyawan.karyawan', compact('karyawan','jabatan'));
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
        $image = time().'.'.$request->image->getClientOriginalExtension();
        $request->image->move(public_path('images'), $image);
        
        $karyawan = new karyawan([
            'id_jabatan' =>$request->id_jabatan,
            'nama' => $request->nama,
            'email' => $request->email,
            'alamat' => $request->alamat,
            'image' => $image
            ]);
            $karyawan->save();
        return redirect('/karyawan');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
          //tampil data jabatan
          $jabatan = jabatan::all();
        $karyawan = karyawan::find($id);
        return view('karyawan.edit',compact('karyawan','jabatan'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        
        $karyawan = karyawan::find($id);
        $karyawan->id_jabatan  = $request->get('id_jabatan');
        $karyawan->nama  = $request->get('nama');
        $karyawan->email = $request->get('email');
        $karyawan->alamat = $request->get('alamat');
        $karyawan->image = $request->get('image');
        $karyawan->save();
        return redirect('/karyawan');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $karyawan = karyawan::find($id);
        $karyawan->delete();
        return redirect('/karyawan');
    }
    
}
