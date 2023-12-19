@extends('admin.layout.index')
@section('title','Kategori ')
@section('content')
<div class="container-fluid py-4">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header pb-0">
            <div class="d-flex align-items-center">
              <p class="mb-0">Tambah Kategori</p>

            </div>
          </div>
          <div class="card-body">
            <form method="POST" action="{{ route('kategori.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label for="example-text-input" class="form-control-label ">Nama Kategori</label>
                        <input class="form-control @error('nama_kategori') is-invalid @enderror" name="nama_kategori" type="input" placeholder="Nama Kategori">
                        <div class="invalid-feedback">
                            @error('nama_kategori')
                                {{ $message }}
                            @enderror
                        </div>
                    </div>
                    </div>
                </div>
                <a href="/kategori" class="btn btn-dark btn-sm ms-auto ">Kembali</a>
                <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>


@endsection
