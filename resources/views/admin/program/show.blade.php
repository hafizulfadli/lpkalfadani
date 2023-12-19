@extends('admin.layout.index')
@section('title','Program ')
@section('content')
<div class="container-fluid py-4">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header pb-0">
            <div class="d-flex align-items-center">
              <p class="mb-0">Detail Program</p>
            </div>
          </div>
          <div class="card-body">
            <ul class="list-group">
                <li class="list-group-item border-0 d-flex p-4 mb-2 bg-gray-100 border-radius-lg">
                  <div class="d-flex flex-column">
                    <h6 class="mb-2">{{  $program->title  }}</h6>

                    <span class="mb-2 text-sm mt-2">{!! $program->konten !!}</span>
                  </div>
                  <div class="ms-auto text-end mt-5">
                    <img src="{{url('thumbnail/'.$program->image)}}" alt="" srcset="" style="width: 150px; height: 100px;">

                  </div>
                </li>
            </ul>
            <a href="/program" class="btn btn-dark btn-sm ms-auto mt-2">Kembali</a>
          </div>
        </div>
      </div>
    </div>
  </div>


@endsection

