@extends('admin.layout.index')
@section('title','Berita')
@section('content')
<div class="container-fluid py-4">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header pb-0">
            <div class="d-flex align-items-center">
              <p class="mb-0">Detail Berita</p>
            </div>
          </div>
          <div class="card-body">
            <ul class="list-group">
                <li class="list-group-item border-0 d-flex p-4 mb-2 bg-gray-100 border-radius-lg">
                  <div class="d-flex flex-column">
                    <h6 class="mb-2">{{ $berita->title }}</h6>
                    <div style="display: flex;">
                        <div style="display: flex; align-items: center; margin-left: 2;">
                          <i class="fa fa-newspaper fa-sm" style="margin-right: 5px;"></i>
                          <span>{{ date('d F Y ', strtotime($berita->tanggal)) }}</span>
                        </div>
                        <div style="display: flex; align-items: center; margin-left: 10px;">
                            <i class="fa fa-eye fa-sm" style="margin-right: 5px;"></i>
                            <span>{{ $berita->dilihat }}</span>
                          </div>
                      </div>
                    <span class="mb-2 text-xs mt-2">{!! $berita->kontent !!}</span>
                  </div>
                  <div class="ms-auto text-end mt-5">
                    <img src="{{url('thumbnail/'.$berita->thumbnail)}}" alt="" srcset="" style="width: 150px; height: 100px;">
                  </div>
                </li>
            </ul>
            <a href="/berita" class="btn btn-dark btn-sm ms-auto mt-2">Kembali</a>
          </div>
        </div>
      </div>
    </div>
  </div>


@endsection

