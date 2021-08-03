<?php

namespace App\Http\Controllers\ControllersKoperasi;
use App\Http\Controllers\ControllerKoperasi;
use App\Models\Dataikan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DataikanKoperasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dataikan = Dataikan::all();
        return view('koperasi.dataikankoperasi', compact('dataikan'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('koperasi.tambahdataikankoperasi');
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
    		'nama_ikan' => 'required',
    		'harga_ikan' => 'required'
    	]);
 
        Dataikan::create([
    		'nama_ikan' => $request->nama_ikan,
    		'harga_ikan' => $request->harga_ikan
    	]);
 
    	return redirect('/dataikankoperasi');
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
    public function edit(Dataikan $dataikan)
    {
        $dataikan = Dataikan::where('id_ikan', $dataikan->id_ikan)->first();
        return view('koperasi.editdataikankoperasi', compact('dataikankoperasi'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Dataikan $dataikan)
    {
        $this->validate($request,[
            'nama_ikan' => 'required',
            'harga_ikan' => 'required'
         ]);
         $dataikan->nama_ikan = $request->nama_ikan;
         $dataikan->harga_ikan = $request->harga_ikan;
         $dataikan->save();
         return redirect('/dataikankoperasi');
        
    }

    public function delete(Dataikan $dataikan)
    {
        $dataikan->delete();
        return redirect('/dataikankoperasi');
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
