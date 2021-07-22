@extends("layouts/main")
@section("title","editalattangkap")
@section("content")
@include("layouts/navbar")
@include("layouts/sidebar")

<div class="main-content">
<section class="section">
          <div class="section-header">
            <h1>Edit Data Alat Tangkap</h1>
          </div>
          <div class="section-body">
          <div class="row">
              <div class="col">
                <div class="card">
                  <div class="card-body">
                    <div class="form-group">
                      <label>Nama Alat Tangkap</label>
                      <input type="text" class="form-control" name="nama_alat" value="{{ $alattangkap->nama_alat }}">
                    </div>
                    
                    <div class="card-footer text-right">
                    <button class="btn btn-primary mr-1" type="submit">Confirm</button>
                    <button class="btn btn-secondary" type="reset">Reset</button>
                  </div>