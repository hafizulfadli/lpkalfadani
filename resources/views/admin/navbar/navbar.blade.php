@extends('admin.layout.index')
@section('title','Menu')
@section('content')
<div class="container-fluid py-4">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header pb-0">
            <div class="d-flex align-items-center">
              <p class="mb-0">Data Menu</p>
              <a href="{{ route('navbar.create') }}" class="btn btn-primary btn-sm ms-auto">Tambah</a>
            </div>
          </div>
          <div class="card-body">
            <div class="table-responsive">
                <table id="example" class="table align-items-center mb-0">
                    <thead>
                      <tr>
                        <th width="5%" class="text-uppercase text-secondary text-xs font-weight-bolder opacity-10" style="text-align: center;">#</th>
                        <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-10" style="text-align: center;">Title</th>
                        <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-10" style="text-align: center;">url</th>
                        <th width="20%" class="text-uppercase text-secondary text-xs font-weight-bolder opacity-10" style="text-align: center;">Aksi</th>
                      </tr>
                    </thead>
                   <tbody>
                    @foreach ( $navbar as $data )
                    <tr>
                        <td  align="center">{{ $loop->iteration }}</td>
                        <td>{{ $data->title }}</td>
                        <td>{{ $data->url }}</td>
                        <td align="center">
                            <a href="{{ route('navbar.edit',$data->id) }}" class="btn btn-link text-primary text-gradient px-1 mb-0" ><i class="fas fa-pencil-alt text-dark me-2"></i></a>
                            <a href="{{ route('navbar.destroy',$data->id) }}" onclick="event.preventDefault(); confirm('Apa ingin menghapus data ini?') ? document.getElementById('delete-form-{{ $data->id }}').submit() : false;" class="btn btn-link text-danger text-gradient px-1 mb-0" ><i class="far fa-trash-alt text-dark me-2"></i></a>
                            <form id="delete-form-{{ $data->id }}" action="{{ route('navbar.destroy', $data->id) }}" method="POST" style="display: none;">
                                @csrf
                                @method('DELETE')
                            </form>

                        </td>
                    </tr>
                    @endforeach
                   </tbody>
                  </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


@endsection
