@extends('user.layout.index')
@section('title','Visi Misi')
@section('content')
<main>
    @foreach ($visimisi as $data )

    @endforeach
    <div class="bg-[url({{'/images/hero2.jpg'}})] sm:bg-white object-cover bg-cover bg-center">
        <div class="py-8 sm:py-12 flex flex-col gap-8 md:gap-16">
            <div class="container flex flex-col gap-8 md:gap-16">
                <h1 class="font-semibold text-2xl sm:text-4xl xl:text-5xl text-hijau-unand flex items-center justify-center gap-2 my-36">Visi dan Misi</h1>
            </div>
        </div>
    </div>
    <div class="container my-16">
        <div class="flex flex-col md:flex-row justify-between gap-8 md:gap-20 shadow-md rounded-3xl p-5 mx-4">
            <img src="images/visi.jpg" class="rounded-2xl w-full md:w-2/5">
            <div class="flex flex-col gap-6 items-start justify-center w-full md:w-3/5">
                <h1 class="text-dropdown-green text-4xl font-medium">Visi</h1>
                <p class="text-almost-black text-xl">{!! $data->konten_visi !!}</p>
            </div>
        </div>
    </div>
    <div class="container my-16">
        <div class="flex flex-col md:flex-row justify-between gap-8 md:gap-20 shadow-md rounded-3xl p-5 mx-4">
            <div class="flex flex-col gap-6 items-start justify-center w-full md:w-3/5">
                <h1 class="text-dropdown-green text-4xl font-medium">Misi</h1>
                <p class="text-almost-black text-xl">{!! $data->konten_misi !!}</p>
            </div>
            <img src="images/misi.jpg" class="rounded-2xl w-full md:w-2/5">
        </div>
    </div>
</main>
<footer>
@endsection
