@extends('admin.layout.index')
@section('title','User')
@section('content')
<div class="container-fluid py-4">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header pb-0">
            <div class="d-flex align-items-center">
              <p class="mb-0">Edit User</p>

            </div>
          </div>
          <div class="card-body">
            <form method="POST" action="{{ route('user.update',$user->id) }}" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label for="example-text-input" class="form-control-label ">Nama</label>
                          <input class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $user->name }}" type="text" placeholder="Nama Lengkap">
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
                          <input class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $user->email }}" type="text" placeholder="email">
                          <div class="invalid-feedback">
                              @error('email')
                                  {{ $message }}
                              @enderror
                          </div>
                      </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group">
                            <label for="example-text-input" class="form-control-label ">Password <i><span style="color: red" >*jika ingin ganti password silahkan isi jika tidak kosongkan saja <span></i></label>
                            <input class="form-control" name="password" value="" type="password" placeholder="Masukan password baru jika ingin mengubahnya">
                            <div class="invalid-feedback">
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
