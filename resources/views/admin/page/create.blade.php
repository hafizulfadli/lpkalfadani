@extends('admin.layout.index')
@section('title','Page')
@section('content')
<div class="container-fluid py-4">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header pb-0">
            <div class="d-flex align-items-center">
              <p class="mb-0">Tambah Page</p>

            </div>
          </div>
          <div class="card-body">
            <form method="POST" action="{{ route('page.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="example-text-input" class="form-control-label ">Menu</label>
                        <select class="form-select" aria-label="Default select example" name="navbar_id" id="navbar_id">
                            @foreach ($navbar as $data)
                              <option value="{{$data->id}}">{{$data->title}}</option>
                            @endforeach
                        </select>
                    </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                          <label for="example-text-input" class="form-control-label">Tumbnail</label>
                          <input class="form-control @error('thumbnail') is-invalid @enderror" name="thumbnail" type="file" value="">
                          <div class="invalid-feedback">
                            @error('thumbnail')
                                {{ $message }}
                            @enderror
                        </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="example-text-input" class="form-control-label ">Judul</label>
                          <input class="form-control" name="judul" type="text" placeholder="Judul">
                          @error('judul')
                          <div class="invalid-feedback d-block">
                                  {{ $message }}
                              </div>
                              @enderror
                      </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="example-text-input" class="form-control-label ">Tanggal</label>
                          <input class="form-control" name="tanggal" type="datetime-local" placeholder="tanggal">
                          @error('tanggal')
                          <div class="invalid-feedback d-block">
                                  {{ $message }}
                              </div>
                              @enderror
                      </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group">
                          <label for="example-text-input" class="form-control-label">Konten</label>
                          <textarea id="ckeditor" class="form-control ckeditor @error('konten') is-invalid @enderror" name="konten" id="" cols="30" rows="5" placeholder="Konten"></textarea>
                          <div class="invalid-feedback">
                            @error('konten')
                                {{ $message }}
                            @enderror
                        </div>
                        </div>
                      </div>
                </div>
                <a href="/page" class="btn btn-dark btn-sm ms-auto ">Kembali</a>
                <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>


@endsection
