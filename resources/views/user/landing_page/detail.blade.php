@extends('user.layout.index')
@section('title', 'Detail')
@section('content')
<main>
  <div class="container my-28 flex flex-row justify-between gap-8">
    <div class="flex flex-col rounded-3xl shadow-lg w-3/4">
      <div class="flex items-start justify-center flex-col gap-4 p-4">
        <div class="flex items-start py-2">
          <svg xmlns="http://www.w3.org/2000/svg" width="166" height="6" viewBox="0 0 166 6" fill="none" class="w-1/2 lg:w-full">
            <path d="M3 3H83H163" stroke="#872341" stroke-width="6" stroke-linecap="round" />
          </svg>
        </div>
        <h1 class="font-medium text-4xl text-almost-black">{{ $page->judul }}</h1>
        <h5 class="font-normal text-base text-gray-500">Padang, {{ date('d F Y ', strtotime($page->tanggal)) }}</h5>
      </div>
      <div class="flex flex-col gap-8 p-4 w-full">
        <img src="{{url('thumbnail/',$page->thumbnail) }}" class="w-full">
        <p class="font-medium text-lg text-almost-black">{!! $page->konten !!}</p>
      </div>
    </div>
    <div class="flex flex-col rounded-3xl shadow-lg w-1/4 gap-4 p-4 pt-8">
      <div>
        <svg xmlns="http://www.w3.org/2000/svg" width="166" height="6" viewBox="0 0 166 6" fill="none">
          <path d="M3 3H83H163" stroke="#872341" stroke-width="6" stroke-linecap="round" />
        </svg>
        <h2 class="uppercase py-4 text-yellow text-3xl font-semibold">Berita Lainnya</h2>
      </div>
      <div class="flex flex-col gap-4">
        @foreach ($beritapopuler as $data )
        <div class="flex flex-col gap-2">
            <img src="{{ url('thumbnail/',$data->thumbnail) }}" class="rounded w-[full] h-[160px] object-cover bg-cover bg-center">
            <div class="flex flex-col gap-1">
                <a href="{{ route('detailberita',$data->slug) }}"> <h5 class="font-medium text-lg pb-1">{{ $data->title }}</h5></a>
                <p class="font-normal text-sm">
                    {!! \Illuminate\Support\Str::limit($data->kontent, 100, '...') !!}
                </p>
            </div>
        </div>
        @endforeach
      </div>
    </div>
  </div>
</main>
@endsection
