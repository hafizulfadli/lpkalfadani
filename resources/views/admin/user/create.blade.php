@extends('admin.layout.index')
@section('title','User')
@section('content')
<div class="container-fluid py-4">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header pb-0">
            <div class="d-flex align-items-center">
              <p class="mb-0">Tambah User</p>

            </div>
          </div>
          <div class="card-body">
            <form method="POST" action="{{ route('user.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label for="example-text-input" class="form-control-label ">Nama</label>
                          <input class="form-control @error('name') is-invalid @enderror" name="name" type="text" placeholder="nama">
                          <div class="invalid-feedback">
                              @error('name')
                                  {{ $message }}
                              @enderror
                          </div>
                      </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group">
                          <label for="example-text-input" class="form-control-label ">Email</label>
                          <input class="form-control @error('email') is-invalid @enderror" name="email" type="text" placeholder="email">
                          <div class="invalid-feedback">
                              @error('email')
                                  {{ $message }}
                              @enderror
                          </div>
                      </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group">
                          <label for="example-text-input" class="form-control-label ">Password</label>
                          <input class="form-control @error('password') is-invalid @enderror" name="password" type="password" placeholder="password">
                          <div class="invalid-feedback">
                              @error('password')
                                  {{ $message }}
                              @enderror
                          </div>
                      </div>
                      </div>
                </div>
                <a href="/user" class="btn btn-dark btn-sm ms-auto ">Kembali</a>
                <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>


@endsection
