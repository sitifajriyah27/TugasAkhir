@extends("layouts/main")
@section("title","user")
@section("content")
@include("layouts/navbar")
@include("layouts/sidebar")

<div class="main-content">
<section class="section">
          <div class="section-header">
            <h1>Data User</h1>
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
                          <th>Nama</th>
                          <th>Username</th>
                          <th>Email</th>
                          <th>Level</th>
                          <th>Image</th>
                          <th>Aksi</th>
                        </tr>
                        @foreach($user as $u)
                        <tr>
                          <td>{{$u->id_user}}</td>
                          <td>{{$u->nama}}</td>
                          <td>{{$u->username}}</td>
                          <td>{{$u->email}}</td>
                          <td>{{$u->level}}</td>
                          <td>{{$u->Image}}</div></td>
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
                    <nav class="d-inline-block">
                      <ul class="pagination mb-0">
                        <li class="page-item disabled">
                          <a class="page-link" href="#" tabindex="-1"><i class="fas fa-chevron-left"></i></a>
                        </li>
                        <li class="page-item active"><a class="page-link" href="#">1 <span class="sr-only">(current)</span></a></li>
                        <li class="page-item">
                          <a class="page-link" href="#">2</a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                          <a class="page-link" href="#"><i class="fas fa-chevron-right"></i></a>
                        </li>
                      </ul>
                    </nav>
                  </div>
                </div>
              </div>
</section>
</div>

