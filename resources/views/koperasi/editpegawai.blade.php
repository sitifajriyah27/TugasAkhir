@extends("layouts/main")
@section("title","Edit Data Pegawai")
@section("content")
@include("layouts/navbar")
@include("layouts/sidebar-koperasi")

<form method="post" action="/editpegawai/{{ $pegawai->id_pgw }}">
 @csrf
<div class="main-content">
<section class="section">
          <div class="section-header">
            <h1>Edit Data Pegawai</h1>
          </div>
          <div class="section-body">
          <div class="row">
              <div class="col">
                <div class="card">
                  <div class="card-body">
                    <div class="form-group">
                      <label>Nama Pegawai</label>
                      <input type="text" class="form-control" name="nama_pgw" value="{{ $pegawai->nama_pgw }}">
                    </div>
                    <div class="form-group">
                      <label>Jabatan</label>
                      <input type="text" class="form-control" name="jabatan" value="{{ $pegawai->jabatan }}">
                    </div>
                    <div class="form-group">
                      <label>No Telepon</label>
                      <input type="text" class="form-control" name="telp" value="{{ $pegawai->telp }}">
                    </div>
                    <div class="form-group">
                      <label>Alamat</label>
                      <input type="text" class="form-control" name="alamat" value="{{ $pegawai->alamat }}">
                    </div>
                    <div class="card-footer text-right">
                    <button class="btn btn-primary mr-1" type="submit">Confirm</button>
                    <button class="btn btn-secondary" type="reset">Reset</button>
                  </div>
</form>