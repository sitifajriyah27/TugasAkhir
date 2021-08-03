@extends("layouts/main")
@section("title","Tambah Alat Tangkap")
@section("content")
@include("layouts/navbar")
@include("layouts/sidebar-koperasi")

<form method="post" action="/alattangkap/store">
  @csrf
<div class="main-content">
<section class="section">
          <div class="section-header">
            <h1>Tambah Data Alat Tangkap</h1>
          </div>
          <div class="section-body">
          <div class="row">
              <div class="col">
                <div class="card">
                  <div class="card-body">
                    <div class="form-group">
                      <label>Nama Alat tangkap</label>
                      <input type="text" name="nama_alat" class="form-control">
                    </div>
                    <div class="form-group">
                      <label>Stok</label>
                      <input type="text" name="stok" class="form-control">
                    </div>
                    
                    <div class="card-footer text-right">
                    <button class="btn btn-primary mr-1" type="submit">Submit</button>
                    <button class="btn btn-secondary" type="reset">Reset</button>
                  </div>
</form>