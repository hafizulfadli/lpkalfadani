@extends('user.layout.index')
@section('title', 'Kontak')
@section('content')

<main>
    <div class="bg-[url({{'/images/hero2.jpg'}})] sm:bg-white object-cover bg-cover bg-center">
        <div class="py-8 sm:py-12 flex flex-col gap-8 md:gap-16">
            <div class="container flex flex-col gap-8 md:gap-16">
                <h1 class="font-semibold text-2xl sm:text-4xl xl:text-5xl text-hijau-unand flex items-center justify-center gap-2 my-36">Kontak</h1>
            </div>
        </div>
    </div>
    <div class="rounded-3xl mx-4 xl:mx-auto p-4 lg:p-10 my-10 xl:container shadow-lg">
        <div class="flex flex-col md:flex-row justify-between gap-8  ">
            <div class="flex flex-col gap-8 w-full md:w-full">
                <div>
                    <svg xmlns="http://www.w3.org/2000/svg" width="166" height="6" viewBox="0 0 166 6" fill="none">
                        <path d="M3 3H83H163" stroke="#872341" stroke-width="6" stroke-linecap="round"/>
                    </svg>
                    <h2 class="uppercase py-4 text-yellow text-3xl font-semibold">Kontak LPK AL Fadani</h2>
                </div>
                <div class="mx-8 mt-10 grid grid-cols-1 gap-4 shadow-sm md:grid-cols-2">
                    <div class="p-4">
                      <form id="whatsappForm">
                        <div class="mb-6 grid gap-6 md:grid-cols-2">
                          <div>
                            <label for="first_name" class="mb-2 block text-lg font-medium text-gray-900 dark:text-white">Email</label>
                            <input type="email" id="email" name="email" class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500" placeholder="masukan email" required />
                          </div>
                          <div>
                            <label for="last_name" class="mb-2 block text-lg font-medium text-gray-900 dark:text-white">Nama</label>
                            <input type="text" id="nama" name="nama" class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-slate-400 dark:focus:border-blue-500 dark:focus:ring-blue-500" placeholder="masukan nama" required />
                          </div>
                        </div>
                        <div class="mb-6">
                          <label for="email" class="mb-2 block text-lg font-medium text-gray-900 dark:text-white">Pesan</label>
                          <textarea name="pesan" id="pesan" cols="30" rows="5" class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500" placeholder="masukan pesan"></textarea>
                        </div>

                        <button type="button" onclick="kirimPesanWhatsApp()" class="w-full rounded-lg bg-blue-700 px-5 py-2.5 text-center text-lg font-medium text-white hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 sm:w-auto">Kirim</button>

                      </form>
                    </div>
                    @foreach ($setting as $data)

                    <div class="p-4">
                      <div class="mb-2 rounded-md bg-slate-200 p-4">
                        <div class="flex">
                          <svg class="h-6 w-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 21">
                            <g stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                              <path d="M8 12a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" />
                              <path d="M13.8 12.938h-.01a7 7 0 1 0-11.465.144h-.016l.141.17c.1.128.2.252.3.372L8 20l5.13-6.248c.193-.209.373-.429.54-.66l.13-.154Z" />
                            </g>
                          </svg>
                          <p class="mb-2 ml-2 text-lg font-semibold text-slate-700">Kantor 1</p>
                        </div>
                        <p class="text-base text-slate-800">{{ $data->alamat1 }}</p>
                      </div>
                      <div class="mb-2 rounded-md bg-slate-200 p-4">
                        <div class="flex">
                          <svg class="h-6 w-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 21">
                            <g stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                              <path d="M8 12a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" />
                              <path d="M13.8 12.938h-.01a7 7 0 1 0-11.465.144h-.016l.141.17c.1.128.2.252.3.372L8 20l5.13-6.248c.193-.209.373-.429.54-.66l.13-.154Z" />
                            </g>
                          </svg>
                          <p class="mb-2 ml-2 text-lg font-semibold text-slate-700">Kantor 2</p>
                        </div>
                        <p class="text-base text-slate-800">{{ $data->alamat2 }}</p>
                      </div>

                      <div class="grid grid-cols-2 gap-2">
                        <div class="rounded-md bg-slate-200 p-4">
                          <div class="flex">
                            <svg class="h-6 w-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 2-8.4 7.05a1 1 0 0 1-1.2 0L1 2m18 0a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1m18 0v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2" />
                            </svg>
                            <p class="mb-2 ml-2 text-lg font-semibold text-slate-700">Email</p>
                          </div>
                          <p class="text-base text-slate-800">{{ $data->email }}</p>
                        </div>
                        <div class="rounded-md bg-slate-200 p-4">
                          <div class="flex">
                            <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m16.344 12.168-1.4-1.4a1.98 1.98 0 0 0-2.8 0l-.7.7a1.98 1.98 0 0 1-2.8 0l-2.1-2.1a1.98 1.98 0 0 1 0-2.8l.7-.7a1.981 1.981 0 0 0 0-2.8l-1.4-1.4a1.828 1.828 0 0 0-2.8 0C-.638 5.323 1.1 9.542 4.78 13.22c3.68 3.678 7.9 5.418 11.564 1.752a1.828 1.828 0 0 0 0-2.804Z"/>
                    </svg>
                            <p class="mb-2 ml-2 text-lg font-semibold text-slate-700">Telp</p>
                          </div>
                          <p class="text-base text-slate-800">{{ $data->phone }}</p>
                        </div>

                      </div>
                    </div>
                  </div>
                  @endforeach

            </div>
        </div>
    </div>
</main>
@endsection
    <script>
        function kirimPesanWhatsApp() {
          var email = document.getElementById('email').value;
          var nama = document.getElementById('nama').value;
          var pesan = document.getElementById('pesan').value;

          // Format pesan WhatsApp
          var waMessage = "Halo! Saya ingin mengirim pesan:\n\n";
          waMessage += "Email: " + email + "\n";
          waMessage += "Nama: " + nama + "\n";
          waMessage += "Pesan: " + pesan;

          // Ganti nomor WhatsApp sesuai kebutuhan
          var waNumber = "6282381130540";

          // Membuat link WhatsApp
          var waLink = "https://wa.me/" + waNumber + "?text=" + encodeURIComponent(waMessage);

          // Buka link WhatsApp di tab baru
          window.open(waLink, "_blank");
        }
      </script>
