@extends("layouts/main")
@section("title","Data Pegawai")
@section("content")
@include("layouts/navbar")
@include("layouts/sidebar-koperasi")

<div class="main-content">
<section class="section">
          <div class="section-header">
            <h1>Data Pegawai</h1>
          </div>

          <div class="section-body">
            <div class="row">
              <div class="col">
                <div class="card">
                  <div class="card-header">
                  <a href="{{url('tambahpegawai')}}" class="btn btn-success">Tambah</a>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-bordered table-md">
                        <tr>
                          <th>No</th>
                          <th>Nama Pegawai</th>
                          <th>Jabatan</th>
                          <th>Nomer Telepon</th>
                          <th>Alamat</th>
                          <th>Aksi</th>
                        </tr>
                        @foreach($pegawai as $p)
                        <tr>
                          <td>{{$loop->iteration}}</td>
                          <td>{{$p->nama_pgw}}</td>
                          <td>{{$p->jabatan}}</td>
                          <td>{{$p->telp}}</td>
                          <td>{{$p->alamat}}</td>
                          <td>
                            <a href="editpegawai/{{ $p->id_pgw }}" class="btn btn-primary mr-2">Edit</a>
                            <a href="hapuspegawai/{{ $p->id_pgw }}" class="btn btn-danger">hapus</a>
                          </td>
                        </tr>
                        @endforeach
                      </table>
                    </div>
                  </div>
                  <div class="card-footer text-right">
                    {{-- <nav class="d-inline-block">
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
                    </nav> --}}
                  </div>
                </div>
              </div>
</section>
</div>

