<section id="tentang" class="flex flex-col lg:flex-row-reverse justify-center items-center h-[100vh] bg-white overflow-hidden">
    <div class="px-6 w-full py-16 text-center">
        <h1 class="md:mb-4 text-2xl font-semibold tracking-wide text-black md:text-5xl xl:text-6xl text-wrap">Laporan Data Autoagra</h1>
        <h3 class="md:mb-4 text-xl md:text-2xl tracking-wide text-black text-wrap">{{ \Carbon\Carbon::now()->locale('id')->isoFormat('dddd, D MMMM YYYY') }}</h3>
        <div class="flex justify-center flex-wrap lg:flex-nowrap mt-10 gap-2 lg:gap-5 w-full">
                <div class="flex flex-col justify-center items-center bg-primary rounded-lg p-10 text-white mb-5 w-full md:h-72">
                    <div class="flex justify-center items-end gap-2">
                        <h1 class="text-7xl md:text-7xl font-bold">
                        </h1>
                        {{ $totals['totalFlightTime'] }}
                        <span class="text-xl md:text-3xl font-semibold inline-block">Menit</span>
                    </div>
                    <h3 class="mt-5 text-base md:text-2xl">Durasi Terbang</h3>
                </div>
                <div class="flex flex-col justify-center items-center bg-primary rounded-lg p-10 text-white mb-5 w-full md:h-72">
                    <div class="flex justify-center items-end gap-2">
                        <h1 class="text-7xl md:text-7xl font-bold">
                        </h1>
                        {{ $totals['totalPesticideLiters'] }}
                        <span class="text-xl md:text-3xl font-semibold inline-block">Liter</span>
                    </div>
                    <h3 class="mt-5 text-base md:text-2xl">Total Pupuk</h3>
                </div>
                <div class="flex flex-col justify-center items-center bg-primary rounded-lg p-10 text-white mb-5 w-full md:h-72">
                    <div class="flex justify-center items-end gap-2">
                        <h1 class="text-7xl md:text-7xl font-bold">
                        </h1>
                        {{ $totals['totalNumberOfFlights'] }}
                        <span class="text-xl md:text-3xl font-semibold inline-block">Kali</span>
                    </div>
                    <h3 class="mt-5 text-base md:text-2xl">Total Penerbangan</h3>
                </div>
        </div>
    </div>
</section>