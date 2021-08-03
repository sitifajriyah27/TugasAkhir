@extends("layouts/main")
@section("title","Tambah Data Pegawai")
@section("content")
@include("layouts/navbar")
@include("layouts/sidebar-koperasi")

<form method="post" action="/pegawai/store">
  @csrf
<div class="main-content">
<section class="section">
          <div class="section-header">
            <h1>Tambah Data Pegawai</h1>
          </div>
          <div class="section-body">
          <div class="row">
              <div class="col">
                <div class="card">
                  <div class="card-body">
                    <div class="form-group">
                      <label>Nama Pegawai</label>
                      <input type="text" name="nama_pgw" class="form-control">
                      @if($errors->has('nama_pgw'))
                      <div class="text-danger">
                          {{ $errors->first('nama_pgw')}}
                      </div>
                      @endif
                    </div>
                    <div class="form-group">
                      <label>Jabatan</label>
                      <input type="text" name="jabatan" class="form-control">
                    </div>
                    <div class="form-group">
                      <label>No Telepon</label>
                      <input type="text" name="telp" class="form-control">
                    </div>
                    <div class="form-group">
                      <label>Alamat</label>
                      <input type="text" name="alamat" class="form-control">
                    </div>
                    <div class="card-footer text-right">
                    <button class="btn btn-primary mr-1" type="submit">Submit</button>
                    <button class="btn btn-secondary" type="reset">Reset</button>
                  </div>
</form>