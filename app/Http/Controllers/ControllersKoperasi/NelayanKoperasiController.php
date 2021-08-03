<?php

namespace App\Http\Controllers;
namespace App\Http\Controllers\ControllersKoperasi;

use App\Models\Nelayan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NelayanKoperasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $nelayan = Nelayan::all();
        return view('koperasi.nelayankoperasi', compact('nelayan'));
        // return 'nelaan koperasi';
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('koperasi.tambahnelayankoperasi');
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
 
    	return redirect('/nelayankoperasi');
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
        return view('koperasi.editnelayankoperasi', compact('datanelayankoperasi'));
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
         return redirect('/nelayankoperasi');
    }

    public function delete(Nelayan $nelayan)
    {
        $nelayan->delete();
        return redirect('/nelayankoperasi');
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
