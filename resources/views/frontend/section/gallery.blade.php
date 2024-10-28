<section id="gallery" class="flex lg:flex-row justify-center items-center lg:h-[100vh] bg-white overflow-hidden">
    <div class="flex justify-center w-full px-4">
        <div
            class="relative flex flex-wrap lg:flex-nowrap justify-center md:justify-start items-center md:gap-5 p-5 bg-white border border-gray-200 rounded-3xl shadow overflow-hidden w-full">
            <div class="grid gap-4 lg:w-8/12">
                <div>
                    <img id="mainImage" class="h-auto max-w-full rounded-lg"
                        src="{{ asset('assets/img/img-galeri-1.png') }}" alt="">
                </div>
                <div class="grid grid-cols-5 gap-4">
                    <div>
                        <img class="h-auto max-w-full rounded-lg cursor-pointer thumbnail"
                            src="{{ asset('assets/img/img-galeri-1.png') }}" alt="Thumbnail-1">
                    </div>
                    <div>
                        <img class="h-auto max-w-full rounded-lg cursor-pointer thumbnail"
                            src="{{ asset('assets/img/img-galeri-2.png') }}" alt="Thumbnail-2">
                    </div>
                    <div>
                        <img class="h-auto max-w-full rounded-lg cursor-pointer thumbnail"
                            src="{{ asset('assets/img/img-galeri-3.png') }}" alt="Thumbnail-3">
                    </div>
                    <div>
                        <img class="h-auto max-w-full rounded-lg cursor-pointer thumbnail"
                            src="{{ asset('assets/img/img-galeri-4.png') }}" alt="Thumbnail-4">
                    </div>
                    <div>
                        <img class="h-auto max-w-full rounded-lg cursor-pointer thumbnail"
                            src="{{ asset('assets/img/img-galeri-5.png') }}" alt="Thumbnail-5">
                    </div>
                </div>
            </div>
            <div class="absolute -bottom-40 -right-5">
                <img class="w-56 hidden lg:block lg:w-60 xl:w-96" src="{{ asset('assets/icon/icon-circle.png') }}"
                    alt="circle" />
            </div>
            <div class="flex flex-col justify-center items-start lg:ms-10">
                <h1
                    class='max-w-xl mt-10 lg:mt-0 mb-8 text-2xl md:text-5xl xl:text-6xl font-bold tracking-tight leading-tight text-black'>
                    Galeri Autoagra</h1>
                <p class="max-w-xl mb-8 leading-relaxed text-sm lg:text-base text-justify">Autoagra bertransformasi
                    menjadi solusi drone pertanian minimalis yang siap meningkatkan produktivitas pertanian di Indonesia
                </p>
                <a href="https://youtu.be/-XLEixvCcos" target="_blank">
                    <button
                        class="inline-block mb-2 text-sm whitespace-nowrap tracking-tight text-white bg-primary p-3 rounded-lg cursor-pointer">Profil
                        Autoagra</button>
                </a>
            </div>
        </div>
    </div>
</section>
