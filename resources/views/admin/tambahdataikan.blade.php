@extends("layouts/main")
@section("title","tambahdataikan")
@section("content")
@include("layouts/navbar")
@include("layouts/sidebar")

<div class="main-content">
<section class="section">
          <div class="section-header">
            <h1>Tambah Data Ikan</h1>
          </div>
          <div class="section-body">
          <div class="row">
              <div class="col">
                <div class="card">
                  <div class="card-body">
                    <div class="form-group">
                      <label>Nama Ikan</label>
                      <input type="text" class="form-control">
                    </div>
                    <div class="form-group">
                      <label>Harga Ikan</label>
                      <input type="text" class="form-control">
                    </div>
                    <div class="card-footer text-right">
                    <button class="btn btn-primary mr-1" type="submit">Submit</button>
                    <button class="btn btn-secondary" type="reset">Reset</button>
                  </div>