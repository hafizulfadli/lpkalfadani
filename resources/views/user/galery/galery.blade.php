@extends('user.layout.index')
@section('title', 'Galery')
@section('content')

<main>
    <div class="bg-[url({{'/images/hero2.jpg'}})] sm:bg-white object-cover bg-cover bg-center">
        <div class="py-8 sm:py-12 flex flex-col gap-8 md:gap-16">
            <div class="container flex flex-col gap-8 md:gap-16">
                <h1 class="font-semibold text-2xl sm:text-4xl xl:text-5xl text-hijau-unand flex items-center justify-center gap-2 my-36">Galery</h1>
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
                    <h2 class="uppercase py-4 text-yellow text-3xl font-semibold">Galery LPK AL Fadani</h2>
                </div>
               <div class="mt-30 grid grid-cols-2 gap-2 p-2 md:grid-cols-4">
                    @foreach($galery as $data)

                    <div class="h-15 group relative aspect-[4/3] overflow-hidden rounded-lg bg-sky-600 transition-all duration-500 hover:scale-95 md:aspect-[3/4] xl:aspect-[4/3]">
                        <div class="absolute h-full w-full bg-[url({{ url('thumbnail/'.$data->image)}})] bg-cover bg-center transition-all duration-500 group-hover:rotate-12 group-hover:scale-125"></div>
                    </div>
                    @endforeach

                </div>
                      <div>
                    </div>
                  </div>
</main>
@endsection


