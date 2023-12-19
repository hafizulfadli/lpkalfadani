@extends('admin.layout.index')
@section('title','Setting')
@section('content')
<div class="container-fluid py-4">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header pb-0">
            <div class="d-flex align-items-center">
              <p class="mb-0">Tambah Setting</p>

            </div>
          </div>
          <div class="card-body">
            <form method="POST" action="{{ route('setting.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="example-text-input" class="form-control-label ">Alamat 1</label>
                          <input class="form-control @error('alamat1') is-invalid @enderror" name="alamat1" type="text" placeholder="Alamat1">
                          <div class="invalid-feedback">
                              @error('alamat1')
                                  {{ $message }}
                              @enderror
                          </div>
                      </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="example-text-input" class="form-control-label ">Alamat 2</label>
                          <input class="form-control @error('alamat2') is-invalid @enderror" name="alamat2" type="text" placeholder="Alamat">
                          <div class="invalid-feedback">
                              @error('alamat2')
                                  {{ $message }}
                              @enderror
                          </div>
                      </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="example-text-input" class="form-control-label ">map</label>
                          <input class="form-control @error('map') is-invalid @enderror" name="map" type="text" placeholder="Map">
                          <div class="invalid-feedback">
                              @error('map')
                                  {{ $message }}
                              @enderror
                          </div>
                      </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="example-text-input" class="form-control-label ">Phone</label>
                          <input class="form-control @error('phone') is-invalid @enderror" name="phone" type="text" placeholder="phone">
                          <div class="invalid-feedback">
                              @error('phone')
                                  {{ $message }}
                              @enderror
                          </div>
                      </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="example-text-input" class="form-control-label ">Email</label>
                          <input class="form-control @error('email') is-invalid @enderror" name="email" type="text" placeholder="Email">
                          <div class="invalid-feedback">
                              @error('email')
                                  {{ $message }}
                              @enderror
                          </div>
                      </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="example-text-input" class="form-control-label ">Instagram</label>
                          <input class="form-control @error('instagram') is-invalid @enderror" name="instagram" type="text" placeholder="Instagram">
                          <div class="invalid-feedback">
                              @error('instagram')
                                  {{ $message }}
                              @enderror
                          </div>
                      </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="example-text-input" class="form-control-label ">Facebook</label>
                          <input class="form-control @error('facebook') is-invalid @enderror" name="facebook" type="text" placeholder="Facebook">
                          <div class="invalid-feedback">
                              @error('facebook')
                                  {{ $message }}
                              @enderror
                          </div>
                      </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="example-text-input" class="form-control-label ">Whatsapp</label>
                          <input class="form-control @error('whatsapp') is-invalid @enderror" name="whatsapp" type="text" placeholder="Whatsapp">
                          <div class="invalid-feedback">
                              @error('whatsapp')
                                  {{ $message }}
                              @enderror
                          </div>
                      </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="example-text-input" class="form-control-label ">Youtube</label>
                          <input class="form-control @error('youtube') is-invalid @enderror" name="youtube" type="text" placeholder="Youtube">
                          <div class="invalid-feedback">
                              @error('youtube')
                                  {{ $message }}
                              @enderror
                          </div>
                      </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="example-text-input" class="form-control-label ">Tiktok</label>
                          <input class="form-control @error('tiktok') is-invalid @enderror" name="tiktok" type="text" placeholder="tiktok">
                          <div class="invalid-feedback">
                              @error('tiktok')
                                  {{ $message }}
                              @enderror
                          </div>
                      </div>
                      </div>
                </div>
                <a href="/setting" class="btn btn-dark btn-sm ms-auto ">Kembali</a>
                <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>


@endsection
