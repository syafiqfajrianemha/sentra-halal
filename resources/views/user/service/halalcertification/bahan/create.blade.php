<x-guest-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h2 class="text-xl font-bold mb-2 uppercase text-center">Form Pendaftaran Sertifikat Halal</h2>
                    <h2 class="text-xl font-bold mb-2 uppercase text-center">Bagian Bahan-Bahan Yang Digunakan Tiap Produk</h2>
                    <p class="text-sm font-medium mb-4">
                        <span class="text-red-500">*</span>) Wajib di isi.
                    </p>
                    <form action="{{ route('bahan.store', $pengajuan->id) }}" method="POST" class="space-y-4">
                        @csrf
                        <div class="grid grid-cols-1 gap-4">
                            <div>
                                <label class="block text-sm font-medium">Nama Bahan<span class="text-red-500">*</span></label>
                                <input type="text" name="nama_bahan" class="w-full border-gray-300 rounded-md" value="{{ old('nama_bahan') }}" required>
                                <x-input-error class="mt-2" :messages="$errors->get('nama_bahan')" />
                            </div>
                            <div>
                                <label class="block text-sm font-medium">Merek</label>
                                <input type="text" name="merek" class="w-full border-gray-300 rounded-md" value="{{ old('merek') }}">
                                <x-input-error class="mt-2" :messages="$errors->get('merek')" />
                            </div>
                            <div>
                                <label class="block text-sm font-medium">Produsen</label>
                                <input type="text" name="produsen" class="w-full border-gray-300 rounded-md" value="{{ old('produsen') }}">
                                <x-input-error class="mt-2" :messages="$errors->get('produsen')" />
                            </div>
                            <div>
                                <label class="block text-sm font-medium">Nomor Sertifikat Halal Bahan</label>
                                <input type="text" name="nomor_sertifikat_halal" class="w-full border-gray-300 rounded-md" value="{{ old('nomor_sertifikat_halal') }}">
                                <x-input-error class="mt-2" :messages="$errors->get('nomor_sertifikat_halal')" />
                            </div>
                        </div>
                        <div class="mt-4">
                            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600">Tambah</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
