<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::where('level', 'TPI')->get();
        return view('admin.user', compact('user'));
    }

    public function koperasi()
    {
        $user = User::where('level', 'koperasi')->get();
        return view('admin.koperasi', compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.tambahuser');
    }
    public function createKoperasi()
    {
        return view('admin.tambahkoperasi');
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
    		'nama' => 'required',
    		'username' => 'required|unique:users,username',
    		'email' => 'required|unique:users,email',
            'telepon' => 'required',
            'alamat' => 'required',
    	]);
 
        User::create([
    		'nama' => $request->nama,
    		'username' => $request->username,
            'password' => Hash::make('admintpi123'),
    		'email' => $request->email,
            'telepon' => $request->telepon,
    		'alamat' => $request->alamat,
            'level' => 'TPI',
    		'image' => 'default.png'
    	]);
 
    	return redirect('/user');
    }
    public function storeKoperasi(Request $request)
    {
        $this->validate($request,[
    		'nama' => 'required',
    		'username' => 'required|unique:users,username',
    		'email' => 'required|unique:users,email',
            'telepon' => 'required',
            'alamat' => 'required',
    	]);
 
        User::create([
    		'nama' => $request->nama,
    		'username' => $request->username,
            'password' => Hash::make('koperasi123'),
    		'email' => $request->email,
            'telepon' => $request->telepon,
    		'alamat' => $request->alamat,
            'level' => 'koperasi',
    		'image' => 'default.png'
    	]);
 
    	return redirect('/koperasi');
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
    public function editTPI($user)
    {
        $user = User::where('id_user', $user)->first();
        return view('admin.edituser', compact('user'));
    }
    public function editKoperasi($user)
    {
        $user = User::where('id_user', $user)->first();
        return view('admin.editkoperasi', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateTPI(Request $request, User $user)
    {
        $this->validate($request,[
            'nama' => 'required',
    		'username' => 'required|' . Rule::unique('users')->ignore($user->id_user, 'id_user'),
    		'email' => 'required|' . Rule::unique('users')->ignore($user->id_user, 'id_user'),
            'telepon' => 'required',
            'alamat' => 'required',
         ]);
         User::where('id_user',$user->id)->update([
            'nama' => $request->nama,
            'username' => $request->username,
            'email' => $request->email,
            'telepon' => $request->telepon,
            'alamat' => $request->alamat,
         ]);
        
         return redirect('/user');
    }
    public function updateKoperasi(Request $request, User $user)
    {
        $this->validate($request,[
            'nama' => 'required',
    		'username' => 'required|' . Rule::unique('users')->ignore($user->id_user, 'id_user'),
    		'email' => 'required|'. Rule::unique('users')->ignore($user->id_user, 'id_user'),
            'telepon' => 'required',
            'alamat' => 'required',
         ]);
         User::where('id_user',$user->id_user)->update([
            'nama' => $request->nama,
            'username' => $request->username,
            'email' => $request->email,
            'telepon' => $request->telepon,
            'alamat' => $request->alamat,
         ]);
        
         return redirect('/koperasi');
    }

    public function deleteTPI(User $user)
    {
        $user->delete();
        return redirect('/user');
    }
    public function deleteKoperasi(User $user)
    {
        $user->delete();
        return redirect('/koperasi');
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
