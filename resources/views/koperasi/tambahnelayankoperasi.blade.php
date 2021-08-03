@extends("layouts/main")
@section("title","Tambah Nelayan")
@section("content")
@include("layouts/navbar")
@include("layouts/sidebar-koperasi")

<div class="main-content">
<section class="section">
          <div class="section-header">
            <h1>Tambah Data Nelayan</h1>
          </div>
          <div class="section-body">
          <div class="row">
              <div class="col">
                <div class="card">
                  <div class="card-body">
                    <div class="form-group">
                      <label>Nama</label>
                      <input type="text" class="form-control">
                    </div>
                    <div class="form-group">
                      <label>No Telepon</label>
                      <input type="text" class="form-control">
                    </div>
                    <div class="form-group">
                      <label>Alamat</label>
                      <textarea class="form-control"></textarea>
                    </div>
                    <div class="card-footer text-right">
                    <button class="btn btn-primary mr-1" type="submit">Submit</button>
                    <button class="btn btn-secondary" type="reset">Reset</button>
                  </div>