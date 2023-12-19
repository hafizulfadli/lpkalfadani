<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.css"  rel="stylesheet" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@3.9.3/dist/full.css" rel="stylesheet" type="text/css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.css"  rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/daisyui@3.9.3/dist/full.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        "hijau-unand" : "#B31312",
                        "gray" : "#57606A",
                        "darkgreen" : "#D71313  ",
                        "dropdown-green" : "#B31312",
                        "lightgreen" : "#97F5D2",
                        "yellow" : "#EAC54F",
                        "orange" : "#bf9a2a",
                        "almost-black" : "#1E1E1E",
                        "almost-white" : "#F6F8FA",
                        "gradient1l" : "#B31312",
                        "gradient1r" : "#F6821F",
                    },
                    fontFamily: {
                        "poppins" : ['Poppins', 'sans-serif'],
                    },
                    container: {
                        center: true,
                    },
                    backgroundColor: {
                      'blue-overlay' : "rgba(0,0,255,0.4)",
                    },
                    backgroundSize:{
                        '700' : '700px',
                    },
                  },
                },
            }
    </script>
        <style>
            ::-webkit-scrollbar {
                width: 10px;
                height: 4px;
                display: block;
            }

            ::-webkit-scrollbar:hover {
                display: block;
            }

            ::-webkit-scrollbar-track {
                background: transparent;
            }
            ::-webkit-scrollbar-thumb {
                background: #888;
                border-radius: 8px;
            }
            ::-webkit-scrollbar-thumb:hover {
                background: #555;
            }
        </style>
      {{-- <style type="text/css">
        #google_translate_element {
            position: absolute;
            top: 0; /* Sesuaikan sesuai dengan posisi vertikal yang Anda inginkan */
            right: 0; /* Mengatur elemen di sisi kanan */
            margin-right: 6px;
        }
    </style> --}}
    <style type="text/css">
        #google_translate_element span {
            color: white !important;
        }
        .normal * {
            all: revert !important;
        }
    </style>



  <link rel="icon" type="image/png" href="{{asset('template')}}/assets/img/alfadani.png">
    <title>@yield('title') - LPK Al-Fadani</title>
</head>
<body class="font-poppins">
    {{-- Header --}}
    <div class="sticky top-0 z-50">
        <nav class="px-12 sm:px-16 h-10 bg-hijau-unand flex items-center justify-end">
            <div id="google_translate_element" class="normal m-2 bg-hijau-unand p-2"></div>
            {{-- <div id="google_translate_element" class="normal w-[20]"></div> --}}
        </nav>
        {{-- Navbar Besar --}}
        <div class="bg-white shadow-md">
            <header class="container h-22 sm:h-24 xl:h-32 flex flex-wrap items-center justify-between font-medium px-4 sm:px-8 2xl:px-0">
                <div class="flex flex-wrap items-center justify-between w-full xl:w-auto py-4">
                    <div class="flex flex-row gap-2">
                        <img src="/images/alfadani.png" alt="Logo Unand" class="w-14 h-14 sm:w-16 sm:h-16 xl:w-20 xl:h-20">
                        <div class="flex flex-col text-sm sm:text-base xl:text-xl font-bold justify-center uppercase">
                            <p class="text-orange">Lembaga Pelatihan Kerja</p>
                            <p class="text-hijau-unand">AL FADANI</p>

                        </div>
                    </div>
                    <button type="button" data-drawer-target="drawer-navigation" data-drawer-show="drawer-navigation" aria-controls="drawer-navigation"class="xl:hidden inline-flex items-center justify-center p-2 w-10 h-10 ml-3 text-sm text-gray-500 rounded-lg hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-hijau-unand">
                        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
                        </svg>
                    </button>
                    <div id="drawer-navigation" class="fixed top-0 left-0 z-40 w-64 h-screen p-4 overflow-y-auto transition-transform -translate-x-full bg-white xl:hidden shadows-md" tabindex="-1" aria-labelledby="drawer-navigation-label">
                        <h5 id="drawer-navigation-label" class="text-base font-semibold text-hijau-unand px-2 uppercase">Menu</h5>
                        <button type="button" data-drawer-hide="drawer-navigation" aria-controls="drawer-navigation" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 absolute top-2.5 right-2.5 inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" >
                            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                            <span class="sr-only">Close menu</span>
                        </button>
                        <div class="py-4 overflow-y-auto">
                            <ul class="space-y-2 font-medium">
                                <li>
                                    <a href="/" class="flex items-center p-2 text-hijau-unand rounded-lg hover:bg-gray-100 group">Home</a>
                                </li>
                                <li>
                                    <button type="button" class="flex items-center w-full p-2 text-base text-hijau-unand transition duration-75 rounded-lg group hover:bg-gray-100" aria-controls="dropdown-example1" data-collapse-toggle="dropdown-example1">
                                          <span class="flex-1 text-left whitespace-nowrap">Tentang Kami</span>
                                          <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                             <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                                          </svg>
                                    </button>
                                    <ul id="dropdown-example1" class="hidden py-2 space-y-2 text-hijau-unand">
                                        <li>
                                            <a href="{{ route('sambutan') }}" class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-6 hover:bg-gray-100">Kata Sambutan</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('profil') }}" class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-6 hover:bg-gray-100">Profile</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('visimisis') }}" class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-6 hover:bg-gray-100">Visi dan Misi</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <button type="button" class="flex items-center w-full p-2 text-base text-hijau-unand transition duration-75 rounded-lg group hover:bg-gray-100" aria-controls="dropdown-example2" data-collapse-toggle="dropdown-example2">
                                          <span class="flex-1 text-left whitespace-nowrap">Berita</span>
                                          <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                             <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                                          </svg>
                                    </button>
                                    <ul id="dropdown-example2" class="hidden py-2 space-y-2 text-hijau-unand">
                                        @foreach ($kategori as $data )

                                        <li>
                                            <a href="{{ route('beritas', $data->nama_kategori)}}" class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-6 hover:bg-gray-100">{{ $data->nama_kategori }}</a>
                                        </li>
                                        @endforeach
                                    </ul>
                                </li>
                                <li>
                                    <a href="{{ route('programs') }}" class="flex items-center p-2 text-hijau-unand rounded-lg hover:bg-gray-100 group">Program</a>
                                </li>
                                <li>
                                    <a href="{{ route('galerys') }}" class="flex items-center p-2 text-hijau-unand rounded-lg hover:bg-gray-100 group">Galery</a>
                                </li>
                                <li>
                                    <a href="{{ route('kontak') }}" class="flex items-center p-2 text-hijau-unand rounded-lg hover:bg-gray-100 group">Kontak</a>
                                </li>

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

                                <li>
                                    <button type="button" class="flex items-center w-full p-2 text-base text-hijau-unand transition duration-75 rounded-lg group hover:bg-gray-100" aria-controls="dropdown-example1{{ $i }}" data-collapse-toggle="dropdown-example1{{ $i }}">
                                          <span class="flex-1 text-left whitespace-nowrap"> {{$isi->title}}</span>
                                          <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                             <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                                          </svg>
                                    </button>
                                    <ul id="dropdown-example1{{ $i }}" class="hidden py-2 space-y-2 text-hijau-unand">
                                     @foreach($subnavbar as $y => $isi_sub)
                                        <li>
                                            <a href="{{$isi_sub->url}}" class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-6 hover:bg-gray-100">{{$isi_sub->title}}</a>
                                        </li>
                                    @endforeach
                                    </ul>
                                </li>

                                @else
                                <a href="{{$isi->url}}"
                                class="flex items-center p-2 text-hijau-unand rounded-lg hover:bg-gray-100 group">{{$isi->title}}</a>
                                @endif

                            @endforeach




                            </ul>
                        </div>
                    </div>
                </div>
                {{-- Icon Sosmed --}}
                <nav class="flex justify-end">
                    <div class="container hidden xl:flex flex-row items-center justify-end gap-4 sm:gap-6 xl:gap-8">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 24 24" style="enable-background:new 0 0 24 24;" xml:space="preserve" class="w-8">
                            <g id="WA_Logo">
                            <g>
                              <a href=""><path style="fill-rule:evenodd;clip-rule:evenodd;" d="M20.463,3.488C18.217,1.24,15.231,0.001,12.05,0    C5.495,0,0.16,5.334,0.157,11.892c-0.001,2.096,0.547,4.142,1.588,5.946L0.057,24l6.304-1.654    c1.737,0.948,3.693,1.447,5.683,1.448h0.005c6.554,0,11.89-5.335,11.893-11.893C23.944,8.724,22.708,5.735,20.463,3.488z     M12.05,21.785h-0.004c-1.774,0-3.513-0.477-5.031-1.378l-0.361-0.214l-3.741,0.981l0.999-3.648l-0.235-0.374    c-0.99-1.574-1.512-3.393-1.511-5.26c0.002-5.45,4.437-9.884,9.889-9.884c2.64,0,5.122,1.03,6.988,2.898    c1.866,1.869,2.893,4.352,2.892,6.993C21.932,17.351,17.498,21.785,12.05,21.785z M17.472,14.382    c-0.297-0.149-1.758-0.868-2.031-0.967c-0.272-0.099-0.47-0.149-0.669,0.148s-0.767,0.967-0.941,1.166    c-0.173,0.198-0.347,0.223-0.644,0.074c-0.297-0.149-1.255-0.462-2.39-1.475c-0.883-0.788-1.48-1.761-1.653-2.059    s-0.018-0.458,0.13-0.606c0.134-0.133,0.297-0.347,0.446-0.521C9.87,9.97,9.919,9.846,10.019,9.647    c0.099-0.198,0.05-0.372-0.025-0.521C9.919,8.978,9.325,7.515,9.078,6.92c-0.241-0.58-0.486-0.501-0.669-0.51    C8.236,6.401,8.038,6.4,7.839,6.4c-0.198,0-0.52,0.074-0.792,0.372c-0.272,0.298-1.04,1.017-1.04,2.479    c0,1.463,1.065,2.876,1.213,3.074c0.148,0.198,2.095,3.2,5.076,4.487c0.709,0.306,1.263,0.489,1.694,0.626    c0.712,0.226,1.36,0.194,1.872,0.118c0.571-0.085,1.758-0.719,2.006-1.413c0.248-0.694,0.248-1.29,0.173-1.413    C17.967,14.605,17.769,14.531,17.472,14.382z" fill="#B31312"/></a>
                            </g>
                            </g>
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 24 24" style="enable-background:new 0 0 24 24;" xml:space="preserve" class="w-8">
                        <g>
                            <a href="https://www.facebook.com/unandofficial/?locale=id_ID" target="_blank"><path d="M24,12.073c0,5.989-4.394,10.954-10.13,11.855v-8.363h2.789l0.531-3.46H13.87V9.86c0-0.947,0.464-1.869,1.95-1.869h1.509   V5.045c0,0-1.37-0.234-2.679-0.234c-2.734,0-4.52,1.657-4.52,4.656v2.637H7.091v3.46h3.039v8.363C4.395,23.025,0,18.061,0,12.073   c0-6.627,5.373-12,12-12S24,5.445,24,12.073z" fill="#B31312"/></a>
                            </g>
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 24 24" style="enable-background:new 0 0 24 24;" xml:space="preserve" class="w-8">
                        <g>
                           <a href="https://www.instagram.com/unandofficial/?utm_source=ig_web_button_share_sheet&igshid=ZDNlZDc0MzIxNw==" target="_blank"><path d="M12,2.162c3.204,0,3.584,0.012,4.849,0.07c1.308,0.06,2.655,0.358,3.608,1.311c0.962,0.962,1.251,2.296,1.311,3.608   c0.058,1.265,0.07,1.645,0.07,4.849c0,3.204-0.012,3.584-0.07,4.849c-0.059,1.301-0.364,2.661-1.311,3.608   c-0.962,0.962-2.295,1.251-3.608,1.311c-1.265,0.058-1.645,0.07-4.849,0.07s-3.584-0.012-4.849-0.07   c-1.291-0.059-2.669-0.371-3.608-1.311c-0.957-0.957-1.251-2.304-1.311-3.608c-0.058-1.265-0.07-1.645-0.07-4.849   c0-3.204,0.012-3.584,0.07-4.849c0.059-1.296,0.367-2.664,1.311-3.608c0.96-0.96,2.299-1.251,3.608-1.311   C8.416,2.174,8.796,2.162,12,2.162 M12,0C8.741,0,8.332,0.014,7.052,0.072C5.197,0.157,3.355,0.673,2.014,2.014   C0.668,3.36,0.157,5.198,0.072,7.052C0.014,8.332,0,8.741,0,12c0,3.259,0.014,3.668,0.072,4.948c0.085,1.853,0.603,3.7,1.942,5.038   c1.345,1.345,3.186,1.857,5.038,1.942C8.332,23.986,8.741,24,12,24c3.259,0,3.668-0.014,4.948-0.072   c1.854-0.085,3.698-0.602,5.038-1.942c1.347-1.347,1.857-3.184,1.942-5.038C23.986,15.668,24,15.259,24,12   c0-3.259-0.014-3.668-0.072-4.948c-0.085-1.855-0.602-3.698-1.942-5.038c-1.343-1.343-3.189-1.858-5.038-1.942   C15.668,0.014,15.259,0,12,0z" fill="#B31312"/>
                            <path d="M12,5.838c-3.403,0-6.162,2.759-6.162,6.162c0,3.403,2.759,6.162,6.162,6.162s6.162-2.759,6.162-6.162   C18.162,8.597,15.403,5.838,12,5.838z M12,16c-2.209,0-4-1.791-4-4s1.791-4,4-4s4,1.791,4,4S14.209,16,12,16z" fill="#B31312"/>
                            <circle cx="18.406" cy="5.594" r="1.44" fill="#B31312"/></a>
                        </g>
                        </svg>
                    </div>
                </nav>
            </header>
