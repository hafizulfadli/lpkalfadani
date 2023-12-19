@extends('admin.layout.index')
@section('title','Berita')
@section('content')
<div class="container-fluid py-4">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header pb-0">
            <div class="d-flex align-items-center">
              <p class="mb-0">Edit Berita</p>

            </div>
          </div>
          <div class="card-body">
            <form method="POST" action="{{ route('berita.update',$berita->id) }}" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                          <label for="example-text-input" class="form-control-label ">Tanggal</label>
                          <input class="form-control @error('tanggal') is-invalid @enderror" name="tanggal" type="datetime-local" value="{{ date('Y-m-d\TH:i', strtotime($berita->tanggal)) }}">
                          <div class="invalid-feedback">
                              @error('tanggal')
                                  {{ $message }}
                              @enderror
                          </div>
                      </div>
                      </div>
                    <div class="col-md-6">
                        <div class="form-group">
                          <label for="example-text-input" class="form-control-label">Tumbail</label>
                          <input class="form-control " name="thumbnail" type="file" value="">
                          <div class="invalid-feedback">
                        </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="example-text-input" class="form-control-label ">Title Berita</label>
                          <input class="form-control" name="title" type="text" placeholder="Title Berita" value="{{ $berita->title }}">
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
                          <select class="form-select" aria-label="Default select example" name="id_kategori">
                            @foreach ($kategori as $data)
                              <option value="{{$data->id}}" {{ $data->id == $berita->id_kategori ? 'selected' : '' }}>{{$data->nama_kategori}}</option>
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
                          <input class="form-control" name="link" type="text" value="{{ $berita->link }}" placeholder="Link Vidio">
                      </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group">
                          <label for="example-text-input" class="form-control-label">Konten Berita</label>
                          <textarea id="ckeditor" class="form-control ckeditor @error('kontent') is-invalid @enderror" name="kontent" id="" cols="30" rows="5" placeholder="Konten Berita"> {{ $berita->kontent }}</textarea>
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
