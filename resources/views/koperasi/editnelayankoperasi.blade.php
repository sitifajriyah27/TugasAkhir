@extends("layouts/main")
@section("title","Edit Nelayan")
@section("content")
@include("layouts/navbar")
@include("layouts/sidebar-koperasi")

<form method="post" action="/editnelayan/{{ $nelayan->id_nelayan }}">
  @csrf
<div class="main-content">
<section class="section">
          <div class="section-header">
            <h1>Edit Data Nelayan</h1>
          </div>
          <div class="section-body">
          <div class="row">
              <div class="col">
                <div class="card">
                  <div class="card-body">
                    <div class="form-group">
                      <label>Nama</label>
                      <input type="text" class="form-control" name="nama_nelayan" value="{{ $datanelayan->nama_nelayan }}">
                    </div>
                    <div class="form-group">
                      <label>Alamat</label>
                      <input class="form-control" name="alamat_nelayan" value="{{ $datanelayan->alamat_nelayan }}">
                    </div>
                    <div class="form-group">
                      <label>No Telepon</label>
                      <input type="text" class="form-control" name="notelp_nelayan" value="{{ $datanelayan->notelp_nelayan }}">
                    </div>
                    
                    <div class="card-footer text-right">
                    <button class="btn btn-primary mr-1" type="submit">Confirm</button>
                    <button class="btn btn-secondary" type="reset">Reset</button>
                  </div>
                </form>