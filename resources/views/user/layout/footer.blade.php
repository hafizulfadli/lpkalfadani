<footer>
    <div class="bg-gradient-to-r from-gradient1l to-gradient1r h-5"></div>
        <div class="bg-almost-black h-auto">
            <div class="flex flex-col sm:flex-row gap-8 sm:gap-0 container py-8 justify-between">
                <div class="flex flex-col gap-8 px-4 sm:px-0">
                    <div class="flex flex-row gap-2 sm:gap-4 xl:gap-6">
                        <img src="/images/3.png" alt="Logo Unand" class="w-14 h-14 sm:w-16 sm:h-16 xl:w-20 xl:h-20">
                        @foreach ($setting as $data )
                        <div class="flex flex-col text-almost-black text-xl justify-center">
                            <p class="text-yellow text-2xl sm:text-3xl xl:text-4xl font-semibold">LPK Al Fadani</p>
                            {{-- <p class="text-almost-white text-sm sm:text-base xl:text-xl">{{ $data->alamat1 }}</p> --}}
                        </div>
                    </div>
                    <div class="flex flex-col gap-4 sm:gap-0 sm:flex-row justify-between">
                        <div class="gap-2 pl-3 mr-12">
                            <ul class="text-darkgreen font-semibold flex flex-col gap-2">
                                <li class=" flex">Kantor 1</li>
                                <li class="text-white font-medium">{{ $data->alamat1 }}</li>
                            </ul>
                            <ul class="text-darkgreen font-semibold flex flex-col gap-2 mt-4">
                                <li class=" flex">Kantor 2</li>
                                <li class="text-white font-medium">{{ $data->alamat2 }}</li>
                            </ul>
                        </div>
                        {{-- <div class=" gap-2 mr-4">
                            <ul class="text-almost-white font-medium flex flex-col gap-2">
                                <li class="pl-2 flex">Kantor 2</li>

                                <li>: {{ $data->alamat2 }}</li>
                            </ul>
                        </div> --}}
                        <div class="flex flex-row gap-8 ml-4 md:ml-0 mr-8">
                            <div class="flex flex-col gap-2 ">
                                <ul class="text-darkgreen font-semibold flex flex-col gap-2">
                                    <li>Phone</li>
                                    <li>Email</li>
                                    <li>Instagram</li>
                                    <li>Facebook</li>
                                    <li>WhatsApp</li>
                                    <li>Youtube</li>
                                    <li>Tiktok</li>

                                </ul>
                            </div>
                            <div class="flex flex-col gap-2">
                                <ul class="text-almost-white font-medium flex flex-col gap-2 whitespace-nowrap">
                                    {{-- <li>: {{ $data->alamat1 }}</li>
                                    <li>: {{ $data->alamat2 }}</li> --}}
                                    <li>: {{ $data->phone }}</li>
                                    <li>: {{ $data->email }}</li>
                                    <li>: {{ $data->instagram }}</li>
                                    <li>: {{ $data->facebook }}</li>
                                    <li>: {{ $data->whatsapp }}</li>
                                    <li>: {{ $data->youtube }}</li>
                                    <li>: {{ $data->tiktok }}</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col gap-8 w-95">
                    <h1 class="text-white font-semibold text-3xl pl-7 sm:pl-0">Maps</h1>
                    <iframe src="{{ $data->map }}" class="w-full lg:w-[550px] lg:h-[300px] p-4 w-96 h-96 pl-7 sm:pl-0" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                @endforeach
            </div>
        </div>
    </footer>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.js"></script>
  <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

  {{-- <script type="text/javascript">
    function googleTranslateElementInit() {
        new google.translate.TranslateElement({
            pageLanguage: 'id',
            includedLanguages: 'en,id,es,fr,de,zh,ru',
            layout: google.translate.SIMPLE,
            autoDisplay: false,
            poweredBy: false
        }, 'google_translate_element');
    }
</script> --}}
<script type="text/javascript">
    function googleTranslateElementInit() {
        new google.translate.TranslateElement({
            pageLanguage: 'id',
            includedLanguages: 'en,id,es,fr,de,zh,ru,ja',
            layout: google.translate.TranslateElement.InlineLayout.SIMPLE
        }, 'google_translate_element');
    }
    </script>



</body>
</html>
