<footer class="bg-[#E5E5E5] px-4">
    <div class="w-full mx-auto p-4 md:py-8">
        <div class="sm:flex sm:items-center sm:justify-between">
            <a href="/" class="flex items-center mb-4 sm:mb-0 space-x-3 rtl:space-x-reverse">
                <img src="{{ asset('assets/icon/logo.png') }}" class="h-28" alt="Logo Autoagra"/>
            </a>
            <ul class="flex flex-wrap items-center mb-6 text-sm font-medium sm:mb-0">
                <li>
                    <a href="#beranda" class="hover:underline me-4 md:me-6">Beranda</a>
                </li>
                <li>
                    <a href="#tentang" class="hover:underline me-4 md:me-6">Tentang</a>
                </li>
                <li>
                    <a href="#spesifikasi" class="hover:underline me-4 md:me-6">Spesifikasi</a>
                </li>
                <li>
                    <a href="#view" class="hover:underline">3D View</a>
                </li>
            </ul>
        </div>
        <hr class="my-6 border-gray-700 sm:mx-auto lg:my-8" />
        <span class="block text-sm sm:text-center">© {{ date('Y') }} <a
                href="/" class="hover:underline">Autoagra</a>. All Rights Reserved.</span>
    </div>
</footer>
