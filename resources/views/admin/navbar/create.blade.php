@extends('admin.layout.index')
@section('title','Menu')
@section('content')
<div class="container-fluid py-4">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header pb-0">
            <div class="d-flex align-items-center">
              <p class="mb-0">Tambah Menu</p>

            </div>
          </div>
          <div class="card-body">
            <form method="POST" action="{{ route('navbar.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label for="example-text-input" class="form-control-label ">Title</label>
                        <input class="form-control @error('title') is-invalid @enderror" name="title" type="text" placeholder="Title" value="{{ old('title') }}">
                        <div class="invalid-feedback">
                            @error('title')
                                {{ $message }}
                            @enderror
                        </div>
                    </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                          <label for="example-text-input" class="form-control-label ">In</label>
                          <select class="form-select" aria-label="Default select example" name="parent_id" id="navbar_id">
                            <option value="">--Select--</option>
                            @foreach ($navbar as $data)
                              <option value="{{$data->id}}">{{$data->title}}</option>
                            @endforeach
                        </select>
                      </div>
                      </div>
                    <div class="col-md-12">
                        <div class="form-group">
                          <label for="example-text-input" class="form-control-label ">Url <span style="color: red">* awali dengan /, tidak boleh sama dengan url lainnya, tidak boleh pakai "space"</span></label>
                          <input class="form-control @error('url') is-invalid @enderror" name="url" type="text" placeholder="/" value="{{ old('url') }}">
                          <div class="invalid-feedback">
                              @error('url')
                                  {{ $message }}
                              @enderror
                          </div>
                      </div>
                      </div>
                </div>
                <a href="/navbar" class="btn btn-dark btn-sm ms-auto ">Kembali</a>
                <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>


@endsection
