@extends("layouts/main")
@section("title","Pendapatan Ikan")
@section("content")
@include("layouts/navbar")
@include("layouts/sidebar")

<div class="main-content">
<section class="section">
          <div class="section-header">
            <h1>Pendapatan Ikan</h1>
          </div>

          <div class="section-body">
            <div class="row">
              <div class="col">
                <div class="card">
                  <div class="card-header">
                  <a href="{{url('#')}}" class="btn btn-success">Tambah</a>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-bordered table-md">
                        <tr>
                          <th>Keterangan</th>
                          <th>Satuan</th>
                          <th>Koperasi Primer</th>
                          <th>Cabang Koperasi</th>
                          <th>Jumlah</th>
                        </tr>
                        @foreach($pendapatan as $p)
                        <tr>
                          <td>{{$p->ket}}</td>
                          <td>{{$p->satuan}}</td>
                          <td>{{$p->kptk}}</td>
                          <td>{{$p->ck}}</td>
                          <td>{{$p->jumlah}}</td>
                          <td>
                            <a href="editdataikan/{{ $p->id_pendapatan }}" class="btn btn-primary mr-2">Edit</a>
                            <a href="hapusdataikan/{{ $p->id_pendapatan }}" class="btn btn-danger">hapus</a>
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

