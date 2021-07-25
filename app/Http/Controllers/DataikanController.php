<?php

namespace App\Http\Controllers;

use App\Models\Dataikan;
use Illuminate\Http\Request;

class DataikanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dataikan = Dataikan::all();
        return view('admin.dataikan', compact('dataikan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.tambahdataikan');
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
 
    	return redirect('/dataikan');
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
        return view('admin.editdataikan', compact('dataikan'));
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
         return redirect('/dataikan');
        
    }

    public function delete(Dataikan $dataikan)
    {
        $dataikan->delete();
        return redirect('/dataikan');
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
