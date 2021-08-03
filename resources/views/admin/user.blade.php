@extends("layouts/main")
@section("title","User")
@section("content")
@include("layouts/navbar")
@include("layouts/sidebar")

<div class="main-content">
<section class="section">
          <div class="section-header">
            <h1>Admin TPI</h1>
          </div>

          <div class="section-body">

            <div class="row">
              <div class="col">
                <div class="card">
                  <div class="card-header">
                  <a href="{{url('tambahuser')}}" class="btn btn-success">Tambah</a>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-bordered table-md">
                        <tr>
                          <th>No</th>
                          <th>Nama TPI</th>
                          <th>Username</th>
                          {{-- <th>Email</th> --}}
                          <th>Telepon</th>
                          <th>Alamat</th>
                          <th>Level</th>
                          <th>Image</th>
                          <th>Aksi</th>
                        </tr>
                        @foreach($user as $u)
                        <tr>
                          <td>{{$loop->iteration}}</td>
                          <td>{{$u->nama}}</td>
                          <td>{{$u->username}}</td>
                          {{-- <td>{{$u->email}}</td> --}}
                          <td>{{$u->telepon}}</td>
                          <td>{{$u->alamat}}</td>
                          <td>{{$u->level}}</td>
                          <td><img src="{{ asset('img/avatar/'.$u->image) }}" alt="" height="50"></div></td>
                          <td>
                            <a href="edituser/{{ $u->id_user }}" class="btn btn-primary mr-2">Edit</a>
                            <a href="hapususer/{{ $u->id_user }}" class="btn btn-danger">hapus</a>
                          </td>
                        </tr>
                        @endforeach
                      </table>
                    </div>
                  </div>
                  <div class="card-footer text-right">
                  </div>
                </div>
              </div>
</section>
</div>

