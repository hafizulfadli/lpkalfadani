@extends('admin.layout.index')
@section('title','Program')
@section('content')
<div class="container-fluid py-4">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header pb-0">
            <div class="d-flex align-items-center">
              <p class="mb-0">Data Program</p>
              <a href="{{ route('program.create') }}" class="btn btn-primary btn-sm ms-auto">Tambah</a>
            </div>
          </div>
          <div class="card-body">
            <div class="table-responsive">
                <table id="example" class="table align-items-center mb-0">
                    <thead>
                      <tr>
                        <th width="5%" class="text-uppercase text-secondary text-xs font-weight-bolder opacity-10" style="text-align: center;">#</th>
                        <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-10">Title</th>
                        <th width="25%" class="text-uppercase text-secondary text-xs font-weight-bolder opacity-10" style="text-align: center;">Image</th>
                        <th width="25%" class="text-uppercase text-secondary text-xs font-weight-bolder opacity-10" style="text-align: center;">Aksi</th>
                      </tr>
                    </thead>
                   <tbody>
                    @foreach ( $program as $data )
                    <tr>
                        <td  align="center">{{ $loop->iteration }}</td>
                        <td >{{ $data->title }}</td>
                        <td align="center">
                    <img src="{{url('thumbnail/'.$data->image)}}" alt="" srcset="" style="width: 120px; height: 100px;">

                        </td>
                        <td align="center">
                            <a href="{{ route('program.show',$data->id) }}" class="btn btn-link text-success text-gradient px-1 mb-0" ><i class="fa fa-eye me-2 "></i></a>
                            <a href="{{ route('program.edit',$data->id) }}" class="btn btn-link text-primary text-gradient px-1 mb-0" ><i class="fas fa-pencil-alt text-dark me-2"></i></a>
                            <a href="{{ route('program.destroy',$data->id) }}" onclick="event.preventDefault(); confirm('Apa ingin menghapus data ini?') ? document.getElementById('delete-form-{{ $data->id }}').submit() : false;" class="btn btn-link text-danger text-gradient px-1 mb-0" ><i class="far fa-trash-alt text-dark me-2"></i></a>
                            <form id="delete-form-{{ $data->id }}" action="{{ route('program.destroy', $data->id) }}" method="POST" style="display: none;">
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
