{{-- Nav Bar --}}
<div class="hidden xl:flex gap-16 overflow-auto overflow-y-hidden text-white items-center justify-center py-2 px-4 bg-hijau-unand">

    {{-- navbar --}}

    <a href="/" rel="noopener noreferrer" class="px-2 py-2 inline-flex items-center text-lg 2xl:text-xl font-medium">Home</a>
    <div>
        <button id="dropdownHoverButton1" data-dropdown-toggle="dropdownHover1" data-dropdown-trigger="hover" class="text-lg 2xl:text-xl focus:ring-2 focus:outline-none
        focus:ring-blue-300 font-medium rounded-lg px-2 py-2.5 text-center inline-flex items-center whitespace-nowrap" type="button">
            Tentang Kami
            <svg class="w-2.5 h-2.5 ml-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
            </svg>
        </button>
        <div id="dropdownHover1" class="z-10 hidden bg-white divide-y divide-gray-100 shadow w-44">
            <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownHoverButton1">
                <li>
                    <a href="{{ route('sambutan') }}" class="block px-4 py-2 hover:bg-gray-100">Kata Sambutan</a>
                </li>
                <li>
                    <a href="{{ route('profil') }}" class="block px-4 py-2 hover:bg-gray-100">Profile</a>
                </li>
                <li>
                    <a href="{{ route('visimisis') }}" class="block px-4 py-2 hover:bg-gray-100">Visi dan Misi</a>
                </li>
            </ul>
            <hr class="bg-dropdown-green h-1">
        </div>
    </div>
     <div>
        <button id="dropdownHoverButton2" data-dropdown-toggle="dropdownHover2" data-dropdown-trigger="hover" class="text-lg 2xl:text-xl focus:ring-2 focus:outline-none
                    focus:ring-blue-300 font-medium rounded-lg px-2 py-2.5 text-center inline-flex items-center"
            type="button">
            Berita
            <svg class="w-2.5 h-2.5 ml-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                viewBox="0 0 10 6">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="m1 1 4 4 4-4" />
            </svg>
        </button>
        <div id="dropdownHover2" class="z-10 hidden bg-white divide-y divide-gray-100 shadow w-44">
            <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownHoverButton1">
                @foreach ($kategori as $data )
                <li>
                    <a href="{{ route('beritas', $data->nama_kategori)}}"
                        class="block px-4 py-2 hover:bg-gray-100">{{ $data->nama_kategori }}</a>
                </li>
                </li>
                @endforeach

            </ul>
            <hr class="bg-dropdown-green h-1">
        </div>
    </div>
    <a href="{{ route('programs') }}" rel="noopener noreferrer" class="px-2 py-2 inline-flex items-center text-lg 2xl:text-xl font-medium">Program</a>
    <a href="{{ route('galerys') }}" rel="noopener noreferrer" class="px-2 py-2 inline-flex items-center text-lg 2xl:text-xl font-medium">Galery</a>
    <a href="{{ route('kontak') }}" rel="noopener noreferrer" class="px-2 py-2 inline-flex items-center text-lg 2xl:text-xl font-medium">Kontak</a>


            @php
            $navbar = DB::table('navbars')
            ->whereNull('parent_id')
            ->get();
            @endphp
            @foreach($navbar as $i => $isi)
            @php
            $subnavbar = DB::table('navbars')
            ->where('parent_id', $isi->id)
            ->get();
            @endphp
            @if(count($subnavbar))
            <div>
                <button id="dropdownHoverButton1" data-dropdown-toggle="dropdownHover{{ $i }}" data-dropdown-trigger="hover" class="text-lg 2xl:text-xl focus:ring-2 focus:outline-none
                            focus:ring-blue-300 font-medium rounded-lg px-2 py-2.5 text-center inline-flex items-center"
                    type="button">
                    {{$isi->title}}
                    <svg class="w-2.5 h-2.5 ml-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 4 4 4-4" />
                    </svg>
                </button>
                <div id="dropdownHover{{ $i }}" class="z-10 hidden bg-white divide-y divide-gray-100 shadow w-44">
                    <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownHoverButton{{ $i }}">
                        @foreach($subnavbar as $y => $isi_sub)
                        <li>
                            <a href="{{$isi_sub->url}}" class="block px-4 py-2 hover:bg-gray-100">{{$isi_sub->title}}</a>
                        </li>
                        @endforeach
                    </ul>
                    <hr class="bg-dropdown-green h-1">
                </div>
            </div>
            @else
            <a href="{{$isi->url}}" rel="noopener noreferrer"
            class="px-2 py-2 inline-flex items-center text-lg 2xl:text-xl font-medium">{{$isi->title}}</a>
            @endif

        @endforeach

    </div>

    {{-- <a href="{{ route('kegiatans') }}" rel="noopener noreferrer"
        class="px-2 py-2 inline-flex items-center text-lg 2xl:text-xl font-medium">Kegiatan</a>
    <a href="{{ route('layanans') }}" rel="noopener noreferrer"
        class="px-2 py-2 inline-flex items-center text-lg 2xl:text-xl font-medium">Layanan</a>
    <a href="{{ route('programs') }}" rel="noopener noreferrer"
        class="px-2 py-2 inline-flex items-center text-lg 2xl:text-xl font-medium">Program</a>
    <a href="{{ route('downloads') }}" rel="noopener noreferrer"
        class="px-2 py-2 inline-flex items-center text-lg 2xl:text-xl font-medium">Download</a> --}}
