@extends('admin.layout.index')
@section('title','Berita')
@section('content')
<div class="container-fluid py-4">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header pb-0">
            <div class="d-flex align-items-center">
              <p class="mb-0">Data Berita</p>
              <a href="{{ route('berita.create') }}" class="btn btn-primary btn-sm ms-auto">Tambah</a>
            </div>
          </div>
          <div class="card-body">
            <div class="table-responsive">
                <table id="example" class="table align-items-center justify-content-center mb-0">
                    <thead>
                      <tr>
                        <th width="5px" class="text-uppercase text-secondary text-xs font-weight-bolder opacity-10" >#</th>
                        <th width="15%" class="text-uppercase text-secondary text-xs font-weight-bolder opacity-10">Kategori</th>
                        <th width="15%" class="text-uppercase text-secondary text-xs font-weight-bolder opacity-10">Tanggal</th>
                        <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-10">Title</th>
                        <th width="10%" class="text-uppercase text-secondary text-xs font-weight-bolder opacity-10">Dilihat</th>
                        <th width="20%"  class="text-uppercase text-secondary text-xs font-weight-bolder opacity-10" style="text-align: center;">Aksi</th>
                      </tr>
                    </thead>
                   <tbody>
                    @foreach ( $berita as $data )
                    <tr >
                        <td  align="center">{{ $loop->iteration }}</td>
                        <td >{{ $data->nama_kategori }}</td>
                        <td>{{ date('d F Y', strtotime($data->tanggal)) }}</td>
                        <td >{{ $data->title }}</td>
                        <td align="center">{{ $data->dilihat }}
                        <td align="center">
                            <a href="{{ route('berita.show',$data->slug) }}" class="btn btn-link text-success text-gradient px-1 mb-0" ><i class="fa fa-eye me-2 "></i></a>
                            <a href="{{ route('berita.edit',$data->id) }}" class="btn btn-link text-primary text-gradient px-1 mb-0" ><i class="fas fa-pencil-alt text-dark me-2"></i></a>
                            <a href="{{ route('berita.destroy',$data->slug) }}" onclick="event.preventDefault(); confirm('Apa ingin menghapus data ini?') ? document.getElementById('delete-form-{{ $data->slug }}').submit() : false;" class="btn btn-link text-danger text-gradient px-1 mb-0" ><i class="far fa-trash-alt text-dark me-2"></i></a>
                            <form id="delete-form-{{ $data->slug }}" action="{{ route('berita.destroy', $data->slug) }}" method="POST" style="display: none;">
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
  <script>
    toast.success('sukses')
  </script>


@endsection
