<?php

namespace App\Http\Controllers;
namespace App\Http\Controllers\ControllersKoperasi;
use App\Http\Controllers\Controller;
use App\Models\Pegawai;
use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pegawai = Pegawai::all();
        return view('koperasi.pegawai', compact('pegawai'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('koperasi.tambahpegawai');
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
    		'nama_pgw' => 'required',
    		'jabatan' => 'required',
    		'telp' => 'required',
    		'alamat' => 'required'
    	]);
 
        Pegawai::create([
    		'nama_pgw' => $request->nama_pgw,
    		'jabatan' => $request->jabatan,
    		'telp' => $request->telp,
    		'alamat' => $request->alamat
    	]);
 
    	return redirect('/pegawai');
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
    public function edit(Pegawai $pegawai)
    {
        $pegawai = Pegawai::where('id_pgw', $pegawai->id_pgw)->first();
        return view('koperasi.editpegawai', compact('pegawai'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pegawai $pegawai)
    {
        $this->validate($request,[
            'nama_pgw' => 'required',
    		'jabatan' => 'required',
    		'telp' => 'required',
    		'alamat' => 'required'
         ]);
         $pegawai->nama_pgw = $request->nama_pgw;
         $pegawai->jabatan = $request->jabatan;
         $pegawai->telp = $request->telp;
         $pegawai->alamat = $request->alamat;
         $pegawai->save();
         return redirect('/pegawai');
    }

    public function delete(Pegawai $pegawai)
    {
        $pegawai->delete();
        return redirect('/pegawai');
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
