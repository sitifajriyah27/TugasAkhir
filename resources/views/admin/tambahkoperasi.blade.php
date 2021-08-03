@extends("layouts/main")
@section("title","Tambah Koperasi")
@section("content")
@include("layouts/navbar")
@include("layouts/sidebar")

<form method="post" action="/koperasi/store">
  @csrf
<div class="main-content">
<section class="section">
          <div class="section-header">
            <h1>Tambah Koperasi</h1>
          </div>
          <div class="section-body">
          <div class="row">
              <div class="col">
                <div class="card">
                  <div class="card-body">
                    <div class="form-group">
                      
                      <label>Nama Koperasi</label>
                      <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror">
                      @error('nama')
                          <div class="invalid-feedback">{{ $message }}</div>
                      @enderror
                    </div>
                    {{-- <div class="form-group">
                      <label>Email</label>
                      <input type="text" name="email" class="form-control @error('email') is-invalid @enderror">
                      @error('email')
                          <div class="invalid-feedback">{{ $message }}</div>
                      @enderror
                    </div> --}}
                    <div class="form-group">
                      <label>Username</label>
                      <input type="text" name="username" class="form-control @error('username') is-invalid @enderror">
                      @error('username')
                          <div class="invalid-feedback">{{ $message }}</div>
                      @enderror
                    </div>
                    <div class="form-group">
                      <label>Telepon</label>
                      <input type="text" name="telepon" class="form-control @error('telepon') is-invalid @enderror">
                      @error('telepon')
                          <div class="invalid-feedback">{{ $message }}</div>
                      @enderror
                    </div>
                    <div class="form-group">
                      <label>Alamat</label>
                      <input type="text" name="alamat" class="form-control @error('alamat') is-invalid @enderror">
                      @error('alamat')
                          <div class="invalid-feedback">{{ $message }}</div>
                      @enderror
                    </div>
                 
                  
                    <div class="card-footer text-right">
                    <button class="btn btn-primary mr-1" type="submit">Submit</button>
                    <button class="btn btn-secondary" type="reset">Reset</button>
                  
                  </div>
                </form>