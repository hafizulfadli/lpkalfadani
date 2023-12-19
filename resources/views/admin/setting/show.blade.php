@extends('admin.layout.index')
@section('title','Setting')
@section('content')
<div class="container-fluid py-4">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header pb-0">
            <div class="d-flex align-items-center">
              <p class="mb-0">Detail Layanan</p>
            </div>
          </div>
          <div class="card-body">
            <ul class="list-group">
                <li class="list-group-item border-0 d-flex p-4 mb-2 bg-gray-100 border-radius-lg">
                  <div class="d-flex flex-column">
                    <h4 class="mb-2">{{ $layanan->judul }}</h4>
                    <div style="display: flex;">
                        <div style="display: flex; align-items: center;">
                          <i class="fa fa-calendar fa-sm" style="margin-right: 5px;"></i>
                          <span>{{ $layanan->tanggal }}</span>
                        </div>

                        <div style="display: flex; align-items: center; margin-left: 10px;">
                          <i class="fa fa-eye fa-sm" style="margin-right: 5px;"></i>
                          <span>{{ $layanan->dilihat }}</span>
                        </div>
                      </div>


                    <span class="mb-2 text-sm mt-2">{!! $layanan->konten !!}</span>
                  </div>
                </li>
            </ul>
            <a href="{{ route('layanan') }}" class="btn btn-dark btn-sm ms-auto mt-2">Kembali</a>
          </div>
        </div>
      </div>
    </div>
  </div>


@endsection

