<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Tpi;
use Illuminate\Http\Request;


class TpiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tpi = Tpi::all();
        return view('admin.tpi', compact('tpi'));
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function tambahtpi()
    {
        return view('admin.tambahtpi');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

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
    public function edit(Tpi $tpi)
    {
        $datatpi = Tpi::where('id_tpi', $tpi->id_tpi)->first();
        return view('admin.edittpi', compact('datatpi'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tpi $tpi)
    {

        //validasi  sesuai nama di input
        
        //kiri sesuai field ditabel dan kanan ambil dari name input
        $request->validate([
            'nama' => $request->nama,
            'notelp' => $request->notelp,
            'alamat' => $request->alamat,    
        ]);
        return Tpi::firstWhere('id_tpi', $tpi->id_tpi)->update($fields);
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
