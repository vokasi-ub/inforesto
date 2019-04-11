<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\category;
use App\jabatan;

use Illuminate\Support\Facades\DB;

class JabatanController extends Controller
{
    
    public function index(\Illuminate\Http\Request $request)
    {
        $jabatan = jabatan::when($request->keyword, function ($query) use ($request) {
        $query->where('nama_jabatan', 'like', "%{$request->keyword}%");
        })->get();

        return view('jabatan.jabatan', compact('jabatan'));
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
        $jabatan = new jabatan([
            'nama_jabatan'   => $request->get('nama_jabatan'),
            'jumlah'         => $request->get('jumlah')
            ]);
            $jabatan->save();
            return redirect('/jabatan');
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
        $jabatan = jabatan::find($id);
        return view('jabatan.edit',compact('jabatan'));

    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $jabatan = jabatan::find($id);
        $jabatan->nama_jabatan   = $request->get('nama_jabatan');
        $jabatan->jumlah        = $request->get('jumlah');
        $jabatan->save();
        return redirect('/jabatan');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $jabatan = jabatan::find($id);
        $jabatan->delete();
        return redirect('/jabatan');
    }
    
}
