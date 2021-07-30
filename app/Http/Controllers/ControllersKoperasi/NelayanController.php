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
        return view('koperasi.nelayan', compact('nelayan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('koperasi.tambahnelayan');
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
    		'nama_nelayan' => 'required',
    		'alamat_nelayan' => 'required',
            'notelp_nelayan' => 'required'
    	]);
 
        Nelayan::create([
    		'nama_nelayan' => $request->nama_nelayan,
    		'alamat_nelayan' => $request->alamat_nelayan,
            'notelp_nelayan' => $request->notelp_nelayan
    	]);
 
    	return redirect('/nelayan');
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
        return view('koperasi.editnelayan', compact('datanelayan'));
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
        $this->validate($request,[
            'nama_nelayan' => 'required',
    		'alamat_nelayan' => 'required',
            'notelp_nelayan' => 'required'
         ]);
         $nelayan->nama_nelayan = $request->nama_nelayan;
         $nelayan->alamat_nelayan = $request->alamat_nelayan;
         $nelayan->notelp_nelayan = $request->notelp_nelayan;
         $nelayan->save();
         return redirect('/nelayan');
    }

    public function delete(Nelayan $nelayan)
    {
        $nelayan->delete();
        return redirect('/nelayan');
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
