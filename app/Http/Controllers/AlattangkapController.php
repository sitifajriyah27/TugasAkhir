<?php

namespace App\Http\Controllers;

use App\Models\Alattangkap;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AlattangkapController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $alattangkap = Alattangkap::all();
        return view('admin.alattangkap', compact('alattangkap'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.tambahalat');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
    		'nama_alat' => 'required',
            'stok' => 'required'
    	]);
 
        Alattangkap::create([
    		'nama_alat' => $request->nama_alat,
    		'stok' => $request->stok
            
    	]);
 
    	return redirect('/alattangkap');
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
    public function edit(Alattangkap $alattangkap)
    {
        $alattangkap = Alattangkap::where('id_alat', $alattangkap->id_alat)->first();
        return view('admin.editalattangkap', compact('alattangkap'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Alattangkap $alattangkap)
    {
        $this->validate($request,[
            'nama_alat' => 'required',
            'nama_alat' => 'required'
         ]);
         $alattangkap->nama_alat = $request->nama_alat;
         $alattangkap->stok = $request->stok;
         $alattangkap->save();
         return redirect('/alattangkap');
    }

    public function delete(Alattangkap $alattangkap)
    {
        $alattangkap->delete();
        return redirect('/alattangkap');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
