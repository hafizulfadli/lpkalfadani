@extends('user.layout.index')
@section('title','Profil')
@section('content')
<main>
    <div class="bg-[url({{'/images/hero2.jpg'}})] sm:bg-white object-cover bg-cover bg-center">
        <div class="py-8 sm:py-12 flex flex-col gap-8 md:gap-16">
            <div class="container flex flex-col gap-8 md:gap-16">
                <h1 class="font-semibold text-2xl sm:text-4xl xl:text-5xl text-hijau-unand flex items-center justify-center gap-2 my-36">Sambutan</h1>
            </div>
        </div>
    </div>
    <div class="container my-20">
        @foreach ($sambutan as $data )

        @endforeach
        <div class="flex flex-col md:flex-row justify-between gap-4 md:gap-20 mx-4">
            <img src="{{ url('thumbnail/',$data->image) }}" class="rounded-2xl w-full md:w-2/5 bg-cover object-cover">
            <div class="flex flex-col gap-4 md:gap-12 w-full md:w-3/5 my-4 md:my-24">
                <h1 class="text-almost-black text-4xl md:text-6xl font-semibold">{{ $data->title }}</h1>
                <p class="text-almost-black text-xl font-medium">{!! $data->konten !!}</p>
            </div>
        </div>
    </div>
</main>
@endsection
