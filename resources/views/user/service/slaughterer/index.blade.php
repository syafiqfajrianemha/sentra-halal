<x-guest-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row items-center md:items-start gap-6">
                <div class="flex flex-col gap-4 w-full md:w-2/4">
                    <button class="bg-blue-500 px-4 py-3 rounded-lg text-center text-white shadow">Panduan</button>
                    <button class="bg-blue-500 px-4 py-3 rounded-lg text-center text-white shadow">Pendaftaran</button>
                    <button class="bg-blue-500 px-4 py-3 rounded-lg text-center text-white shadow">Pelatihan</button>
                    <button class="bg-blue-500 px-4 py-3 rounded-lg text-center text-white shadow">Unduh Sertifikat</button>
                </div>

                <div class="w-full md:w-3/4 flex justify-center">
                    <div class="w-100 h-100 flex items-center justify-center">
                        <img src="{{ asset('images/semebelihhalal.png') }}" alt="Logo">
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
