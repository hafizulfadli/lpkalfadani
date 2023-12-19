@extends('admin.layout.index')
@section('title','Visi Misi')
@section('content')
<div class="container-fluid py-4">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header pb-0">
            <div class="d-flex align-items-center">
              <p class="mb-0">Tambah Visi Misi</p>

            </div>
          </div>
          <div class="card-body">
            <form method="POST" action="{{ route('visimisi.update',$visimisi->id) }}" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label for="example-text-input" class="form-control-label">Konten Visi</label>
                          <textarea id="ckeditor" class="form-control ckeditor @error('konten_visi') is-invalid @enderror" name="konten_visi" id="" cols="30" rows="5" placeholder="Konten Visi">{{ $visimisi->konten_visi }}</textarea>
                          <div class="invalid-feedback">
                            @error('konten_visi')
                                {{ $message }}
                            @enderror
                        </div>
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group">
                          <label for="example-text-input" class="form-control-label">Konten Misi</label>
                          <textarea id="ckeditor" class="form-control ckeditor @error('konten_misi') is-invalid @enderror" name="konten_misi" id="" cols="30" rows="5" placeholder="Konten Misi">{{ $visimisi->konten_misi }}</textarea>
                          <div class="invalid-feedback">
                            @error('konten_misi')
                                {{ $message }}
                            @enderror
                        </div>
                        </div>
                      </div>
                </div>
                <a href="/visimisi" class="btn btn-dark btn-sm ms-auto ">Kembali</a>
                <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>


@endsection
