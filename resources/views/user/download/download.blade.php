@extends('user.layout.index')
@section('title','Download')
@section('content')
<main>
    <div class="bg-[url({{'/images/unand2.png'}})] sm:bg-white object-cover bg-cover bg-center">
        <div class="py-8 sm:py-12 flex flex-col gap-8 md:gap-16">
            <div class="container flex flex-col gap-8 md:gap-16">
                <h1 class="font-semibold text-2xl sm:text-4xl xl:text-5xl text-hijau-unand flex items-center justify-center gap-2 my-36">Download</h1>
            </div>
        </div>
    </div>
    <div class="container my-16">
        <div class="flex flex-col md:flex-row justify-between gap-8 md:gap-20 shadow-md rounded-3xl p-5 mx-4">
            <div class="container my-16">
                <h1 class="text-dropdown-green text-4xl font-medium mb-5">Download</h1>
                @foreach ($download as $data)
                <div class="bg-gray-100 p-4 rounded-lg flex justify-between items-center mb-3">
                    <p class="text-black text-lg">{{ $data->title }}</p>
                    <div>
                        <a href="{{ route('downloaddoc',$data->dokumen) }}" target="_blank"><span class="text-black text-lg mr-2">Download</span></a>

                    </div>
                </div>
                @endforeach


            </div>


        </div>
    </div>
</main>
<footer>
@endsection
