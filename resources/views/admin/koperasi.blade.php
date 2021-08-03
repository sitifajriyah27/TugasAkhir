@extends("layouts/main")
@section("title","Koperasi")
@section("content")
@include("layouts/navbar")
@include("layouts/sidebar")

<div class="main-content">
<section class="section">
          <div class="section-header">
            <h1>Admin Koperasi</h1>
          </div>

          <div class="section-body">

            <div class="row">
              <div class="col">
                <div class="card">
                  <div class="card-header">
                  <a href="{{url('tambahkoperasi')}}" class="btn btn-success">Tambah</a>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-bordered table-md">
                        <tr>
                          <th>No</th>
                          <th>Nama Koperasi</th>
                          <th>Username</th>
                          {{-- <th>Email</th> --}}
                          <th>Telepon</th>
                          <th>Alamat</th>
                          <th>Level</th>
                          <th>Image</th>
                          <th>Aksi</th>
                        </tr>

                        @foreach($user as $k)
                        <tr>
                          <td>{{$loop->iteration}}</td>
                          <td>{{$k->nama}}</td>
                          <td>{{$k->username}}</td>
                          {{-- <td>{{$k->email}}</td> --}}
                          <td>{{$k->telepon}}</td>
                          <td>{{$k->alamat}}</td>
                          <td>{{$k->level}}</td>
                          <td><img src="{{ asset('img/avatar/'.$k->image) }}" alt="" height="50"></td>
                          <td>
                            <a href="editkoperasi/{{ $k->id_user }}" class="btn btn-primary mr-2">Edit</a>
                            <a href="hapuskoperasi/{{ $k->id_user }}" class="btn btn-danger">hapus</a>
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

