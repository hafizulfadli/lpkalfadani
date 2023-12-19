@extends('admin.layout.index')
@section('title','Program ')
@section('content')
<div class="container-fluid py-4">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header pb-0">
            <div class="d-flex align-items-center">
              <p class="mb-0">Tambah Program</p>

            </div>
          </div>
          <div class="card-body">
            <form method="POST" action="{{ route('program.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="example-text-input" class="form-control-label ">Title</label>
                        <input class="form-control @error('title') is-invalid @enderror" name="title" type="input" placeholder="Title">
                        <div class="invalid-feedback">
                            @error('title')
                                {{ $message }}
                            @enderror
                        </div>
                    </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                          <label for="example-text-input" class="form-control-label">Image</label>
                          <input class="form-control @error('image') is-invalid @enderror" name="image" type="file" value="">
                          <div class="invalid-feedback">
                            @error('image')
                                {{ $message }}
                            @enderror
                        </div>
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group">
                          <label for="example-text-input" class="form-control-label">Konten</label>
                          <textarea id="ckeditor" class="form-control ckeditor @error('konten') is-invalid @enderror" name="konten" id="" cols="30" rows="5" placeholder="Konten Kerjasama"></textarea>
                          <div class="invalid-feedback">
                            @error('konten')
                                {{ $message }}
                            @enderror
                        </div>
                        </div>
                      </div>
                </div>
                <a href="/program" class="btn btn-dark btn-sm ms-auto ">Kembali</a>
                <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>


@endsection
