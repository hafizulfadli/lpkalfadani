@extends('admin.layout.index')
@section('title','Visi Misi')
@section('content')
<div class="container-fluid py-4">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header pb-0">
            <div class="d-flex align-items-center">
              <p class="mb-0">Detail Visi Misi</p>
            </div>
          </div>
          <div class="card-body">
            <ul class="list-group">
                <li class="list-group-item border-0 d-flex p-4 mb-2 bg-gray-100 border-radius-lg">
                  <div class="d-flex flex-column">
                    <h6 class="mb-2">Visi</h6>
                    <span class="mb-2 text-sm mt-2 ">{!! $visimisi->konten_visi !!}</span>
                  </div>
                  <div class="ms-auto text-end mt-3">
                </li>
                <li class="list-group-item border-0 d-flex p-4 mb-2 bg-gray-100 border-radius-lg">
                    <div class="d-flex flex-column">
                      <h6 class="mb-2">Misi</h6>
                      <span class="mb-2 text-sm mt-2">{!! $visimisi->konten_misi !!}</span>
                    </div>
                  </li>
            </ul>

            <a href="/visimisi" class="btn btn-dark btn-sm ms-auto mt-2">Kembali</a>
          </div>
        </div>
      </div>
    </div>
  </div>


@endsection

