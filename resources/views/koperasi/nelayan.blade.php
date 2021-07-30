@extends("layouts/main")
@section("title","Nelayan")
@section("content")
@include("layouts/navbar")
@include("layouts/sidebar-koperasi")

<div class="main-content">
<section class="section">
          <div class="section-header">
            <h1>Data Nelayan</h1>
          </div>
          <div class="section-body">
            <div class="row">
              <div class="col">
                <div class="card">
                  <div class="card-header">
                  <a href="{{url('tambahnelayan')}}" class="btn btn-success">Tambah</a>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-bordered table-md">
                        <tr>
                          <th>No</th>
                          <th>Nama Nelayan</th>
                          <th>No. Telepon</th>
                          <th>Alamat</th>
                          <th>Aksi</th>
                        </tr>
                        @foreach($nelayan as $n)
                        <tr>
                          <td>{{$loop->iteration}}</td>
                          <td>{{$n->nama_nelayan}}</td>
                          <td>{{$n->notelp_nelayan}}</td>
                          <td>{{$n->alamat_nelayan}}</div></td>
                          <td>
                            <a href="editnelayan/{{ $n->id_nelayan }}" class="btn btn-primary mr-2">Edit</a>
                            <a href="hapusnelayan/{{ $n->id_nelayan }}" class="btn btn-danger">hapus</a>
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

