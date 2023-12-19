@extends('admin.layout.index')
@section('title','Menu')
@section('content')
<div class="container-fluid py-4">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header pb-0">
            <div class="d-flex align-items-center">
              <p class="mb-0">Edit Menu</p>

            </div>
          </div>
          <div class="card-body">
            <form method="POST" action="{{ route('navbar.update',$navbar->id) }}" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label for="example-text-input" class="form-control-label ">Title</label>
                        <input class="form-control @error('title') is-invalid @enderror" name="title" type="text" placeholder="Title" value="{{ $navbar->title }}">
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
                          <select class="form-select" aria-label="Default select example" name="parent_id">
                            @foreach ($navbar1 as $data)
                              <option value="{{$data->id}}" {{ $data->id == $data->title ? 'selected' : '' }}>{{$data->title}}</option>
                            @endforeach
                        </select>
                      </div>
                      </div>
                    <div class="col-md-12">
                        <div class="form-group">
                          <label for="example-text-input" class="form-control-label ">Url <span style="color: red">* awali dengan /, tidak boleh sama dengan url lainnya, tidak boleh pakai "space"</span></label>
                          <input class="form-control @error('url') is-invalid @enderror" name="url" type="text" placeholder="/" value="{{ $navbar->url }}">
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
