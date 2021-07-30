@extends("layouts/main")
@section("title","Edit Koperasi")
@section("content")
@include("layouts/navbar")
@include("layouts/sidebar")

<form method="post" action="/edittpi/{{ $tpi->id_tpi }}">
  @csrf
<div class="main-content">
<section class="section">
          <div class="section-header">
            <h1>Edit Data Koperasi</h1>
          </div>
          <div class="section-body">
          <div class="row">
              <div class="col">
                <div class="card">
                  <div class="card-body">
                    <div class="form-group">
                      <label>Nama Koperasi</label>
                      <input type="text" class="form-control" name="nama_tpi" value="{{ $datatpi->nama_tpi }}">
                    </div>
                    <div class="form-group">
                      <label>No Telepon</label>
                      <input type="text" class="form-control" name="no_telp" value="{{ $datatpi->notelp_tpi }}">
                    </div>
                    <div class="form-group">
                      <label>Alamat</label>
                      <input class="form-control" name="alamat" value="{{ $datatpi->alamat_tpi }}">
                    </div>
                    <div class="card-footer text-right">
                    <button class="btn btn-primary mr-1" type="submit">Confirm</button>
                    <button class="btn btn-secondary" type="reset">Reset</button>
                  </div>
</form>