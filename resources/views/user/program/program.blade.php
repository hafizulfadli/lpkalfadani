@extends('user.layout.index')
@section('title', 'Program')
@section('content')

<main>
    <div class="bg-[url({{'/images/hero2.jpg'}})] sm:bg-white object-cover bg-cover bg-center">
        <div class="py-8 sm:py-12 flex flex-col gap-8 md:gap-16">
            <div class="container flex flex-col gap-8 md:gap-16">
                <h1 class="font-semibold text-2xl sm:text-4xl xl:text-5xl text-hijau-unand flex items-center justify-center gap-2 my-36">Program</h1>
            </div>
        </div>
    </div>
    <div class="rounded-3xl mx-4 xl:mx-auto p-4 lg:p-10 my-10 xl:container bg-white shadow-md">
        <div class="flex flex-col md:flex-row justify-between gap-8">
            <div class="flex flex-col gap-8 w-full md:w-full">
                <div>
                    <svg xmlns="http://www.w3.org/2000/svg" width="166" height="6" viewBox="0 0 166 6" fill="none">
                        <path d="M3 3H83H163" stroke="#872341" stroke-width="6" stroke-linecap="round"/>
                    </svg>
                    <h2 class="uppercase py-4 text-yellow text-3xl font-semibold">Program LPK AL Fadani</h2>
                </div>
                <div class="mx-4 mt-4 grid grid-cols-1 gap-8 md:mx-10 md:grid-cols-3">
                    @foreach ($program as $data)

                    <div class="overflow-hidden rounded-lg border border-slate-200">
                        <img
                        src="{{ url('thumbnail/'.$data->image)}}"
                        class="w-full h-[180px] rounded-t-lg bg-cover"
                        alt=""
                      />
                      <div class="mx-4">
                    <p class="mt-2 text-lg font-semibold text-center text-slate-800">{{ $data->title }}</p>
                    <p class="text-sm -mt-2 text-slate-800 mb-4">
                      {!! $data->konten !!}
                    </p>
                  </div>
                  </div>
                  @endforeach
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
