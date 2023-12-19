@extends('user.layout.index')
@section('title','Detail Layanan')
@section('content')
<main>
    <div class="container my-28 flex flex-col md:flex-row justify-between gap-8 px-4">
        <div class="flex flex-col rounded-3xl shadow-lg w-full md:w-3/4">
            <div class="flex items-start justify-center flex-col gap-4 p-4">
                <div class="flex items-start py-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="166" height="6" viewBox="0 0 166 6" fill="none" class="">
                        <path d="M3 3H83H163" stroke="#D4A72C" stroke-width="6" stroke-linecap="round"/>
                    </svg>
                </div>
                <h1 class="font-medium text-4xl text-almost-black">{{ $layanan->judul }}</h1>
                <h5 class="font-normal text-base text-gray-500">Padang, {{ date('d F Y ', strtotime($layanan->tanggal)) }}</h5>
            </div>
            <div class="flex flex-col gap-8 p-4 w-full">
        <img src="{{url('thumbnail/',$layanan->thumbnail) }}" class="w-full">
                <p class="font-medium text-lg text-almost-black">{!! $layanan->konten !!}</p>
            </div>
        </div>
        <div class="flex flex-col rounded-3xl shadow-lg w-full md:w-1/4 gap-4 p-4 pt-8">
            <div>
                <svg xmlns="http://www.w3.org/2000/svg" width="166" height="6" viewBox="0 0 166 6" fill="none">
                    <path d="M3 3H83H163" stroke="#37C6AB" stroke-width="6" stroke-linecap="round"/>
                </svg>
               <h2 class="uppercase py-4 text-yellow text-3xl font-semibold">Berita Lainnya</h2>
            </div>
            <div class="flex flex-col gap-4">
                  @foreach ($layanan1 as $data )
                <div class="flex flex-col gap-2">
                    <img src="{{ url('thumbnail/',$data->thumbnail) }}" class="rounded w-[full] h-[170px] object-cover bg-cover bg-center">
                    <div class="flex flex-col gap-1">
                        <a href="{{ route('detaillayanan',$data->id) }}"> <h5 class="font-medium text-lg pb-1">{{ $data->judul }}</h5></a>
                        <p class="font-normal text-sm">
                            {!! \Illuminate\Support\Str::limit($data->konten, 100, '...') !!}
                        </p>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</main>
@endsection
