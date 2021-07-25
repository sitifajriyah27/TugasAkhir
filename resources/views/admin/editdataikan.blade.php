@extends("layouts/main")
@section("title","editdataikan")
@section("content")
@include("layouts/navbar")
@include("layouts/sidebar")

<form method="post" action="/editdataikan/{{ $dataikan->id_ikan }}">
 @csrf
<div class="main-content">
<section class="section">
          <div class="section-header">
            <h1>Edit Data Ikan</h1>
          </div>
          <div class="section-body">
          <div class="row">
              <div class="col">
                <div class="card">
                  <div class="card-body">
                    <div class="form-group">
                      <label>Nama Ikan</label>
                      <input type="text" class="form-control" name="nama_ikan" value="{{ $dataikan->nama_ikan }}">
                    </div>
                    <div class="form-group">
                      <label>Harga Ikan</label>
                      <input type="text" class="form-control" name="harga_ikan" value="{{ $dataikan->harga_ikan }}">
                    </div>
                    <div class="card-footer text-right">
                    <button class="btn btn-primary mr-1" type="submit">Confirm</button>
                    <button class="btn btn-secondary" type="reset">Reset</button>
                  </div>
</form>