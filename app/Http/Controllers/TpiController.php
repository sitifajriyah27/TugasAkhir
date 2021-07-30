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
    public function create()
    {
        return view('admin.tambahtpi');
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
    		'nama_tpi' => 'required',
    		'alamat_tpi' => 'required',
            'notelp_tpi' => 'required'
    	]);
 
        Tpi::create([
    		'nama_tpi' => $request->nama_tpi,
    		'alamat_tpi' => $request->alamat_tpi,
            'notelp_tpi' => $request->notelp_tpi
    	]);
 
    	return redirect('/tpi');
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
        $this->validate($request,[
            'nama_tpi' => 'required',
    		'alamat_tpi' => 'required',
            'notelp_tpi' => 'required'
         ]);
         $tpi->nama_tpi = $request->nama_tpi;
         $tpi->alamat_tpi = $request->alamat_tpi;
         $tpi->notelp_tpi = $request->notelp_tpi;
         $tpi->save();
         return redirect('/tpi');
        
    }

    public function delete(Tpi $tpi)
    {
        $tpi->delete();
        return redirect('/tpi');
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
