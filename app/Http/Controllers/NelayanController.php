<?php

namespace App\Http\Controllers;

use App\Models\Nelayan;
use Illuminate\Http\Request;

class NelayanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $nelayan = Nelayan::all();
        return view('admin.nelayan', compact('nelayan'));
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
        //
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
    public function edit(Nelayan $nelayan)
    {
        $datanelayan = Nelayan::where('id_nelayan', $nelayan->id_nelayan)->first();
        return view('admin.editnelayan', compact('datanelayan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Nelayan $nelayan)
    {
        $request->validate([
            'nama' => $request->nama,
            'notelp' => $request->notelp,
            'alamat' => $request->alamat,    
        ]);
        return Nelayan::firstWhere('id_nelayan', $nelayan->id_nelayan)->update($fields);
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
