@extends("layouts/main")
@section("title","tambahuser")
@section("content")
@include("layouts/navbar")
@include("layouts/sidebar")

<div class="main-content">
<section class="section">
          <div class="section-header">
            <h1>Tambah Data User</h1>
          </div>
          <div class="section-body">
          <div class="row">
              <div class="col">
                <div class="card">
                  <div class="card-body">
                    <div class="form-group">
                      {{-- <form method="POST" action="{{ url('storetpi') }}" id="id_tpi"> --}}
                        @csrf
                      <label>Nama</label>
                      <input type="text" class="form-control">
                    </div>
                    <div class="form-group">
                      <label>Email</label>
                      <input type="text" class="form-control">
                    </div>
                    <div class="form-group">
                      <label>Level</label>
                      <input type="text" class="form-control">
                    </div>
                    <div class="form-group">
                      <label>Username</label>
                      <input type="text" class="form-control">
                    </div>
                    <div class="form-group">
                      <label>Password</label>
                      <input type="text" class="form-control">
                    </div>
                  
                    <div class="card-footer text-right">
                    <button class="btn btn-primary mr-1" type="submit">Submit</button>
                    <button class="btn btn-secondary" type="reset">Reset</button>
                  </form>
                  </div>