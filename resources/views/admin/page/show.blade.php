@extends('admin.layout.index')
@section('title','Page')
@section('content')
<div class="container-fluid py-4">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header pb-0">
            <div class="d-flex align-items-center">
              <p class="mb-0">Detail Page</p>
            </div>
          </div>
          <div class="card-body">
            <ul class="list-group">
                <li class="list-group-item border-0 d-flex p-4 mb-2 bg-gray-100 border-radius-lg">
                  <div class="d-flex flex-column">
                    <h4 class="mb-2">{{ $page->judul }}</h4>
                    <div style="display: flex;">
                        <div style="display: flex; align-items: center; margin-left: 10px;">
                          <i class="fa fa-eye fa-sm" style="margin-right: 5px;"></i>
                          <span>{{ $page->dilihat }}</span>
                        </div>
                        <div style="display: flex; align-items: center; margin-left: 10px;">
                          <i class="fa fa-file fa-sm" style="margin-right: 5px;"></i>
                          <span>{{ $page->title }}</span>
                        </div>
                      </div>
                    <span class="mb-2 text-sm mt-1">{!! $page->konten !!}</span>
                  </div>
                  <div class="ms-auto text-end">
                    <img src="{{url('thumbnail/'.$page->thumbnail)}}" widht="200px" height="150px"  alt="" srcset="">
                  </div>
                </li>
            </ul>
            <a href="/page" class="btn btn-dark btn-sm ms-auto mt-2">Kembali</a>
          </div>
        </div>
      </div>
    </div>
  </div>


@endsection

