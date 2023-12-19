@extends('user.layout.index')
@section('title', 'Home')
@section('content')


<main>
    @foreach ($beritaterbaru as $data )
    <div class="bg-[url({{ url('thumbnail/'.$data->thumbnail) }})] h-[500px] md:h-[768px] object-cover bg-cover bg-center flex">
        <div class="container flex justify-start items-end py-10 px-4 text-white">
           <div class="flex flex-col gap-4 bg-black bg-opacity-40 w-full md:w-1/2 p-8">
            <h5 class="text-yellow font-normal text-sm md:text-lg">Berita Terbaru</h5>
            <h1 class="text-white font-bold text-xl md:text-4xl">{{ $data->title }}</h1>
            <p class="font-light text-xs md:text-base" style="color: white;">
                {!! \Illuminate\Support\Str::limit($data->kontent, 350, '...') !!}
            </p>

        </div>
    </div>
    @endforeach
    </div>
    <div class="bg-[url({{ 'images/alfadani1.png' }})] mt-10  bg-no-repeat bg-right-top bg-700">
        <div class="py-1">
            <div class="my-10 container">
                <div class="flex items-center justify-center text-center gap-4 flex-col px-4">
                    <h1 class="font-semibold text-3xl">Lembaga Pelatihan Kerja AL Fadani</h1>
                    <h2 class="font-medium text-2xl uppercase text-gray-400">WE BUILD INTEGRITY, WE CREATE CREATIVITY, WE FIND INNOVATION</h2>
                    <p class="font-normal text-xl">Al Fadani adalah lembaga pelatihan dan pengirim resmi peserta magang ke Jepang di Sumatera Barat dengan pendirian perusahaan pada bulan April 2019 dan akreditasi dari Pemerintah Indonesia pada bulan April 2023</p>
                    {{-- <button class="px-6 py-3 bg-hijau-unand rounded-lg text-xl text-white my-4">Selengkapnya</button> --}}
                </div>
            </div>
            <div class="my-16 container">
                <div class="grid grid-cols-1 sm:grid-cols-3 xl:grid-cols-3 gap-4 sm:gap-8 xl:gap-0 place-content-center place-items-center">
                    <div class="flex flex-col shadow-md rounded-lg p-8 gap-4 items-center justify-between bg-almost-white w-72 h-72">
                        <img src="/images/1.svg" class="w-40 h-40">
                       <a href="/"><p class="text-yellow font-semibold text-lg text-center">
                        Magang/Ginou Jisshusei</p></a>
                    </div>
                    <div class="flex flex-col shadow-md rounded-lg p-8 gap-4 items-center justify-between bg-almost-white w-72 h-72">
                        <img src="/images/2.svg" class="w-40 h-40">
                       <a href="/" ><p class="text-yellow font-semibold text-lg text-center">
                        Specified Skill Worker/Tokutei Ginou</p></a>
                    </div>
                    <div class="flex flex-col shadow-md rounded-lg p-8 gap-4 items-center justify-between bg-almost-white w-72 h-72">
                        <img src="/images/3.svg" class="w-40 h-40">
                        <a href="/" ><p class="text-yellow font-semibold text-lg text-center">
                            Belajar Bahasa Jepang/Nihonggo Gakkou</p></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-[url({{'/images/hero4.jpg'}})] sm:bg-white object-cover bg-cover  bg-center">
            <div class="py-8 sm:py-12 flex flex-col gap-8 md:gap-16">
                <div class="container flex flex-col gap-8 md:gap-2 text-xl text-center text-white">
                    <h1 class="font-semibold text-2xl sm:text-4xl xl:text-4xl text-white flex items-center justify-center gap-2 ">Sambutan Pimpinan</h1>
                    <h1 class="font-bold text-2xl sm:text-3xl  text-white flex items-center justify-center gap-2 mb-4">Suhartono M Zein</h1>
                    <p class="text-xl text-center text-white ">{!! $sambutan->konten !!}
                        </p>
                </div>
            </div>
        </div>
        <div class="rounded-3xl mx-4 xl:mx-auto p-4 lg:p-10 my-10 xl:container">
            <div class="flex flex-col xl:flex-row justify-between gap-8">
                <div class="flex flex-col gap-8 xl:w-3/5">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="166" height="6" viewBox="0 0 166 6" fill="none" class="">
                            <path d="M3 3H83H163" stroke="#872341" stroke-width="6" stroke-linecap="round"/>
                        </svg>
                       <h2 class="uppercase py-4 text-yellow text-3xl font-semibold">Berita Terkini</h2>
                    </div>
                    <div>
                        <div data-carousel="slide" class="relative w-full">
                            <div class="relative h-[900px] my-4 overflow-hidden">
                                <div class="hidden duration-300 ease-in-out" data-carousel-item>
                                    <div class="grid grid-cols-2 grid-rows-2 gap-8">
                                        @foreach ($beritaslide1 as $data )
                                        <div>
                                            <img src="{{ url('thumbnail/'.$data->thumbnail) }}"  alt="" class="pb-2 w-[441.2px] h-[253.467px]">
                                           <a href="{{ route('detailberita',$data->slug) }}"> <h5 class="text-lg pb-1 font-semibold">{{ $data->title }}</h5></a>
                                           <p class="text-sm">{{ date('d F Y', strtotime($data->tanggal)) }}</p>
                                           <p class="text-xs">
                                                {!! \Illuminate\Support\Str::limit($data->kontent, 150, '...') !!}
                                            </p>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                                <div class="hidden duration-300 ease-in-out" data-carousel-item>
                                    <div class="grid grid-cols-2 grid-rows-2 gap-8">
                                        @foreach ($beritaslide2 as $data )
                                        <div>
                                            <img src="{{ url('thumbnail/'.$data->thumbnail) }}"  alt="" class="pb-2 w-[441.2px] h-[253.467px]">
                                           <a href="{{ route('detailberita',$data->slug) }}"> <h5 class="text-lg pb-1 font-semibold">{{ $data->title }}</h5></a>
                                           <p class="text-sm">{{ date('d F Y', strtotime($data->tanggal)) }}</p>
                                           <p class="text-xs">
                                                {!! \Illuminate\Support\Str::limit($data->kontent, 150, '...') !!}
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
                <div class="flex flex-col gap-8 xl:w-2/5">
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="166" height="6" viewBox="0 0 166 6" fill="none" class="">
                            <path d="M3 3H83H163" stroke="#872341" stroke-width="6" stroke-linecap="round"/>
                        </svg>
                       <h2 class="uppercase py-4 text-yellow text-3xl font-semibold">Berita Populer</h2>
                    </div>
                    <div class="flex flex-col gap-4">
                        @foreach ($beritapopuler as $data )
                        <div class="flex flex-col md:flex-row gap-4">
                            {{-- <img src="{{ url('thumbnail/'.$data->thumbnail)}}" class="rounded object-cover bg-cover bg-center w-[160px] h-[110px]"> --}}
                            <img src="{{ url('thumbnail/'.$data->thumbnail) }}"  alt="" class="object-cover bg-cover bg-center rounded w-[140px] h-[110px]">
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
    </div>
</main>

@endsection
