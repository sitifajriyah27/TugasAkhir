@extends("layouts/main")
@section("title","BBM")
@section("content")
@include("layouts/navbar")
@include("layouts/sidebar")

<div class="main-content">
<section class="section">
          <div class="section-header">
            <h1>Data BBM</h1>
          </div>

          <div class="section-body">
            <div class="row">
              <div class="col">
                <div class="card">
                  <div class="card-header">
                  <a href="{{url('tambahbbm')}}" class="btn btn-success">Tambah</a>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-bordered table-md">
                        <tr>
                          <th>No</th>
                          <th>Merk</th>
                          <th>Mesin</th>
                          <th>Kecepatan</th>
                          <th>Jarak Tempuh</th>
                          <th>Aksi</th>
                        </tr>
                        @foreach($bbm as $b)
                        <tr>
                          <td>{{$loop->iteration}}</td>
                          <td>{{$b->merk_mesin}}</td>
                          <td>{{$b->type_mesin}}</td>
                          <td>{{$b->kecepatan}}</td>
                          <td>{{$b->jarak_tempuh}}</div></td>
                          <td>
                            <a href="editbbm/{{ $b->id_bhnbakar }}" class="btn btn-primary mr-2">Edit</a>
                            <a href="hapusbbm/{{ $b->id_bhnbakar }}" class="btn btn-danger">hapus</a>
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

