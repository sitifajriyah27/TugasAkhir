@extends("layouts/main")
@section("title","Edit User")
@section("content")
@include("layouts/navbar")
@include("layouts/sidebar")

<form method="post" action="/edituser/{{ $user->id_user }}">
 @csrf
<div class="main-content">
<section class="section">
          <div class="section-header">
            <h1>Edit Data TPI</h1>
          </div>
          <div class="section-body">
          <div class="row">
              <div class="col">
                <div class="card">
                  <div class="card-body">
                    <div class="form-group">
                      <label>Nama TPI</label>
                      <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" value="{{ $user->nama }}">
                      @error('nama')
                          <div class="invalid-feedback">{{ $message }}</div>
                      @enderror
                    </div>
                    <div class="form-group">
                      <label>Username</label>
                      <input type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ $user->username }}">
                      @error('username')
                          <div class="invalid-feedback">{{ $message }}</div>
                      @enderror
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $user->email }}">
                        @error('email')
                          <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                      <label>Telepon</label>
                      <input type="text" class="form-control @error('telepon') is-invalid @enderror" name="telepon" value="{{ $user->telepon }}">
                      @error('telepon')
                        <div class="invalid-feedback">{{ $message }}</div>
                      @enderror
                    </div>
                    <div class="form-group">
                      <label>Alamat</label>
                      <input type="text" class="form-control @error('alamat') is-invalid @enderror" name="alamat" value="{{ $user->alamat }}">
                      @error('alamat')
                        <div class="invalid-feedback">{{ $message }}</div>
                      @enderror
                    </div>
                    <div class="card-footer text-right">
                    <button class="btn btn-primary mr-1" type="submit">Confirm</button>
                    <button class="btn btn-secondary" type="reset">Reset</button>
                  </div>
</form>