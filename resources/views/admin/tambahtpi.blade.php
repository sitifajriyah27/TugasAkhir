@extends("layouts/main")
@section("title","Tambah Koperasi")
@section("content")
@include("layouts/navbar")
@include("layouts/sidebar")

<form method="post" action="/tpi/store">
  @csrf
<div class="main-content">
<section class="section">
          <div class="section-header">
            <h1>Tambah Data TPI</h1>
          </div>
          <div class="section-body">
          <div class="row">
              <div class="col">
                <div class="card">
                  <div class="card-body">
                    <div class="form-group">
                      <label>Nama</label>
                      <input type="text" name="nama_tpi" class="form-control">
                    </div>
                    <div class="form-group">
                      <label>Alamat</label>
                      <input type="text" name="alamat_tpi" class="form-control">
                    </div>
                   <div class="form-group">
                      <label>No Telepon</label>
                      <input type="text" name="notelp_tpi" class="form-control">
                    </div>
                    
                  
                    <div class="card-footer text-right">
                    <button class="btn btn-primary mr-1" type="submit">Submit</button>
                    <button class="btn btn-secondary" type="reset">Reset</button>
                  </div>
                </form>