@extends('user.layout.index')
@section('title','Struktur')
@section('content')
<main>
    <div class="sm:bg-[url({{'/images/unand2.png'}})] sm:bg-white object-cover bg-cover bg-center">
        <div class="py-8 sm:py-12 flex flex-col gap-8 md:gap-16">
            <div class="container flex flex-col gap-8 md:gap-16">
                <h1 class="font-semibold text-2xl sm:text-4xl xl:text-5xl text-hijau-unand flex items-center justify-center gap-2 my-36">Struktur</h1>
            </div>
        </div>
    </div>
    <div class="bg-white">
        <div class="container py-20">
            <div class="flex flex-row carousel gap-8 w-full p-4 mx-4">
                @foreach ($strukturorganisasi as $data)
                <div class="carousel-item w-64 h-96 whitespace-nowrap rounded-lg shadow-md inline-flex flex-col items-center justify-center gap-4 p-4">
                    <img src="{{ url('thumbnail/',$data->image) }}" class="w-60 h-60 rounded-md">
                    <h5 class="text-xl font-semibold text-black">{{ $data->nama }}</h5>
                    <p class="text-base font-normal text-center whitespace-normal text-black">{{ $data->jabatan }}</p>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</main>
@endsection
