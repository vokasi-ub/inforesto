<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\category;
use App\menu;
use Illuminate\Support\Facades\DB;

class MenuController extends Controller
{
    
    public function index(\Illuminate\Http\Request $request)
    {
        $menu = menu::when($request->keyword, function ($query) use ($request) {
        $query->where('kategori', 'like', "%{$request->keyword}%");
        })->get();

        return view('menu.menu', compact('menu'));

    }

    public function search(Request $request)
    {
        $query = $request->input('cari');
        $menu = menu::where('kategori', 'LIKE', '%' . $query . '%')->paginate(10);
        return view('menu.result', compact('menu'));
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
        DB::table('menu')->insert([
            'kategori' => $request->kategori,
            'deskripsi' => $request->deskripsi
        ]);

        return redirect('/menu');
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
        $menu = DB::table('menu')->where('id',$id)->get();
        return view('menu.edit',['menu' => $menu]);
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        DB::table('menu')->where('id',$request->id)->update([
            'kategori' => $request->kategori,
            'deskripsi' => $request->deskripsi
             
           
        ]);
            return redirect('/menu');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('menu')->where('id',$id)->delete();
        return redirect('/menu');
    }
    
}
