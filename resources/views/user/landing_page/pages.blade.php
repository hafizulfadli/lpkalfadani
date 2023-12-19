@extends('user.layout.index')
@section('title', $nama)
@section('content')

<main>
    <div class="bg-[url({{'/images/hero2.jpg'}})] sm:bg-white object-cover bg-cover bg-center">
        <div class="py-8 sm:py-12 flex flex-col gap-8 md:gap-16">
            <div class="container flex flex-col gap-8 md:gap-16">
                <h1 class="font-semibold text-2xl sm:text-4xl xl:text-5xl text-hijau-unand flex items-center justify-center gap-2 my-36">{{ $nama }}</h1>
            </div>
        </div>
    </div>
    <div class="rounded-3xl mx-4 xl:mx-auto p-4 lg:p-10 my-10 xl:container bg-white shadow-md">
        <div class="flex flex-col md:flex-row justify-between gap-8">
            <div class="flex flex-col gap-8 w-full md:w-3/5">
                <div>
                    <svg xmlns="http://www.w3.org/2000/svg" width="166" height="6" viewBox="0 0 166 6" fill="none">
                        <path d="M3 3H83H163" stroke="#37C6AB" stroke-width="6" stroke-linecap="round"/>
                    </svg>
                    <h2 class="uppercase py-4 text-yellow text-3xl font-semibold">{{ $nama }}</h2>
                </div>

                <div>
                    <div data-carousel="slide" class="relative w-full">
                        <div class="relative h-[900px] my-4 overflow-hidden">
                            <div class="hidden duration-300 ease-in-out" data-carousel-item>
                                <div class="grid grid-cols-2 grid-rows-2 gap-8">
                                    @foreach ($tampilpages as $data )
                                    <div>
                                        <img src="{{ url('thumbnail', $data->thumbnail) }}" alt="" class="pb-2 w-[441.2px] h-[253.467px]">
                                        <a href="{{ route('detail',$data->id) }}">
                                            <h5 class="font-medium text-lg pb-1 font-bold">{{ $data->judul }}</h5>
                                        </a>
                                       <p class="text-sm">{{ date('d F Y', strtotime($data->tanggal)) }}</p>
                                       <p class="text-xs">
                                            {!! \Illuminate\Support\Str::limit($data->konten, 150, '...') !!}
                                        </p>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="hidden duration-300 ease-in-out" data-carousel-item>
                                <div class="grid grid-cols-2 grid-rows-2 gap-8">
                                    @foreach ($tampilpages2 as $data )
                                    <div>
                                        <img src="{{ url('thumbnail', $data->thumbnail) }}" alt="" class="pb-2 w-[441.2px] h-[253.467px]">
                                       <a href="{{ route('detail',$data->id) }}"> <h5 class="font-medium text-lg pb-1 font-bold">{{ $data->judul }}</h5></a>
                                       <p class="text-sm">{{ date('d F Y', strtotime($data->tanggal)) }}</p>
                                       <p class="text-xs">
                                            {!! \Illuminate\Support\Str::limit($data->konten, 150, '...') !!}
                                        </p>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div class="absolute z-30 flex space-x-3 -translate-x-1/2 bottom-5 left-1/2">
                            <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
                            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex flex-col gap-8 w-full md:w-2/5">
                <div>
                    <svg xmlns="http://www.w3.org/2000/svg" width="166" height="6" viewBox="0 0 166 6" fill="none">
                        <path d="M3 3H83H163" stroke="#37C6AB" stroke-width="6" stroke-linecap="round"/>
                    </svg>
                   <h2 class="uppercase py-4 text-yellow text-3xl font-semibold">Berita Populer</h2>
                </div>
                <div class="flex flex-col gap-4">
                    @foreach ($beritapopuler as $data )
                    <div class="flex flex-col md:flex-row gap-4">
                        <img src="{{ url('thumbnail/'.$data->thumbnail)}}" class="rounded object-cover bg-cover bg-center w-[140px] h-[110px]">
                        <div class="flex flex-col">
                            <a href="{{ route('detailberita',$data->slug) }}"> <h5 class="font-medium text-lg">{{ $data->title }}</h5></a>
                            <p class="text-sm">{{ date('d F Y', strtotime($data->tanggal)) }}</p>
                            <p class="font-normal text-xs">{!! \Illuminate\Support\Str::limit($data->kontent, 84, ' ...') !!}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</main>

@endsection
