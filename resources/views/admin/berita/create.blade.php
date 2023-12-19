@extends('admin.layout.index')
@section('title','Berita')
@section('content')
<div class="container-fluid py-4">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header pb-0">
            <div class="d-flex align-items-center">
              <p class="mb-0">Tambah Berita</p>

            </div>
          </div>
          <div class="card-body">
            <form method="POST" action="{{ route('berita.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                          <label for="example-text-input" class="form-control-label ">Tanggal Berita</label>
                          <input class="form-control @error('tanggal') is-invalid @enderror" name="tanggal" type="datetime-local">
                          <div class="invalid-feedback">
                              @error('tanggal')
                                  {{ $message }}
                              @enderror
                          </div>
                      </div>
                      </div>
                    <div class="col-md-6">
                        <div class="form-group">
                          <label for="example-text-input" class="form-control-label">Thumbnail</label>
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
                          <label for="example-text-input" class="form-control-label ">Title Berita</label>
                          <input class="form-control" name="title" type="text" placeholder="Title Berita">
                          @error('title')
                          <div class="invalid-feedback d-block">
                                  {{ $message }}
                              </div>
                              @enderror
                      </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="example-text-input" class="form-control-label ">Kategori Berita</label>
                          <select class="form-select" aria-label="Default select example" name="id_kategori" id="id_kategori">
                            @foreach ($kategori as $data)
                              <option value="{{$data->id}}">{{$data->nama_kategori}}</option>
                            @endforeach
                        </select>
                          @error('title')
                          <div class="invalid-feedback d-block">
                                  {{ $message }}
                              </div>
                              @enderror
                      </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group">
                          <label for="example-text-input" class="form-control-label ">Link Vidio</label>
                          <input class="form-control" name="link" type="text" placeholder="Link Vidio">
                      </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group">
                          <label for="example-text-input" class="form-control-label">Konten Berita</label>
                          <textarea id="ckeditor" class="form-control ckeditor @error('kontent') is-invalid @enderror" name="kontent" id="" cols="30" rows="5" placeholder="Konten Berita"></textarea>
                          <div class="invalid-feedback">
                            @error('kontent')
                                {{ $message }}
                            @enderror
                        </div>
                        </div>
                      </div>
                </div>
                <a href="/berita" class="btn btn-dark btn-sm ms-auto ">Kembali</a>
                <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>


@endsection
