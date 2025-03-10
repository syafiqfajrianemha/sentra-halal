<x-guest-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h2 class="text-xl font-bold mb-2 uppercase text-center">Form Pendaftaran Sertifikat Halal</h2>
                    <p class="text-sm font-medium mb-4">
                        (<span class="text-red-500">*</span>) wajib di isi.
                    </p>
                    <form action="{{ route('service.halalcertification.register.store') }}" method="POST" class="space-y-4">
                        @csrf
                        <div class="grid grid-cols-1 gap-4">
                            <div>
                                <label class="block text-sm font-medium">Nama Pelaku Usaha<span class="text-red-500">*</span></label>
                                <input type="text" name="nama_pelaku_usaha" class="w-full border-gray-300 rounded-md" value="{{ old('nama_pelaku_usaha') }}" required>
                                <x-input-error class="mt-2" :messages="$errors->get('nama_pelaku_usaha')" />
                            </div>
                            <div>
                                <label class="block text-sm font-medium">Nomor WhatsApp<span class="text-red-500">*</span></label>
                                <input type="text" name="nomor_whatsapp" class="w-full border-gray-300 rounded-md" value="{{ old('nomor_whatsapp') }}" required>
                                <x-input-error class="mt-2" :messages="$errors->get('nomor_whatsapp')" />
                            </div>
                            <div>
                                <label class="block text-sm font-medium">Alamat Sesuai KTP<span class="text-red-500">*</span></label>
                                <input type="text" name="alamat_ktp" class="w-full border-gray-300 rounded-md" value="{{ old('alamat_ktp') }}" required>
                                <x-input-error class="mt-2" :messages="$errors->get('alamat_ktp')" />
                            </div>
                            <div>
                                <label class="block text-sm font-medium">RT/RW<span class="text-red-500">*</span></label>
                                <input type="text" name="rt_rw" class="w-full border-gray-300 rounded-md" value="{{ old('rt_rw') }}" required>
                                <x-input-error class="mt-2" :messages="$errors->get('rt_rw')" />
                            </div>
                            <div>
                                <label class="block text-sm font-medium">Kelurahan/Desa<span class="text-red-500">*</span></label>
                                <input type="text" name="kelurahan_desa" class="w-full border-gray-300 rounded-md" value="{{ old('kelurahan_desa') }}" required>
                                <x-input-error class="mt-2" :messages="$errors->get('kelurahan_desa')" />
                            </div>
                            <div>
                                <label class="block text-sm font-medium">Kecamatan<span class="text-red-500">*</span></label>
                                <input type="text" name="kecamatan" class="w-full border-gray-300 rounded-md" value="{{ old('kecamatan') }}" required>
                                <x-input-error class="mt-2" :messages="$errors->get('kecamatan')" />
                            </div>
                            <div>
                                <label class="block text-sm font-medium">NIK<span class="text-red-500">*</span></label>
                                <input type="text" name="nik" class="w-full border-gray-300 rounded-md" value="{{ old('nik') }}" required>
                                <x-input-error class="mt-2" :messages="$errors->get('nik')" />
                            </div>
                            <div>
                                <label class="block text-sm font-medium">NPWP</label>
                                <input type="text" name="npwp" class="w-full border-gray-300 rounded-md" value="{{ old('npwp') }}">
                                <x-input-error class="mt-2" :messages="$errors->get('npwp')" />
                            </div>
                            <div>
                                <label class="block text-sm font-medium">BPJS</label>
                                <input type="text" name="bpjs" class="w-full border-gray-300 rounded-md" value="{{ old('bpjs') }}">
                                <x-input-error class="mt-2" :messages="$errors->get('bpjs')" />
                            </div>
                            <div>
                                <label class="block text-sm font-medium">Nama Usaha<span class="text-red-500">*</span></label>
                                <input type="text" name="nama_usaha" class="w-full border-gray-300 rounded-md" value="{{ old('nama_usaha') }}" required>
                                <x-input-error class="mt-2" :messages="$errors->get('nama_usaha')" />
                            </div>
                            <div>
                                <label class="block text-sm font-medium">Alamat Usaha<span class="text-red-500">*</span></label>
                                <input type="text" name="alamat_usaha" class="w-full border-gray-300 rounded-md" value="{{ old('alamat_usaha') }}" required>
                                <x-input-error class="mt-2" :messages="$errors->get('alamat_usaha')" />
                            </div>
                            <div>
                                <label class="block text-sm font-medium">Luas Lahan Usaha<span class="text-red-500">*</span></label>
                                <input type="text" name="luas_lahan_usaha" class="w-full border-gray-300 rounded-md" value="{{ old('luas_lahan_usaha') }}" required>
                                <x-input-error class="mt-2" :messages="$errors->get('luas_lahan_usaha')" />
                            </div>
                            <div>
                                <label class="block text-sm font-medium">Jenis Produk<span class="text-red-500">*</span></label>
                                <input type="text" name="jenis_produk" class="w-full border-gray-300 rounded-md" value="{{ old('jenis_produk') }}" required>
                                <x-input-error class="mt-2" :messages="$errors->get('jenis_produk')" />
                            </div>
                            <div>
                                <label class="block text-sm font-medium">Modal Awal<span class="text-red-500">*</span></label>
                                <input type="number" name="modal_awal" class="w-full border-gray-300 rounded-md" value="{{ old('modal_awal') }}" required>
                                <x-input-error class="mt-2" :messages="$errors->get('modal_awal')" />
                            </div>
                            <div>
                                <label class="block text-sm font-medium">Jumlah Tenaga Kerja<span class="text-red-500">*</span></label>
                                <input type="number" name="jumlah_tenaga_kerja" class="w-full border-gray-300 rounded-md" value="{{ old('jumlah_tenaga_kerja') }}" required>
                                <x-input-error class="mt-2" :messages="$errors->get('jumlah_tenaga_kerja')" />
                            </div>
                            <div>
                                <label class="block text-sm font-medium">Kapasitas Produksi<span class="text-red-500">*</span></label>
                                <input type="text" name="kapasitas_produksi" class="w-full border-gray-300 rounded-md" value="{{ old('kapasitas_produksi') }}" required>
                                <x-input-error class="mt-2" :messages="$errors->get('kapasitas_produksi')" />
                            </div>
                            <div>
                                <label class="block text-sm font-medium">Usaha Berdiri Sejak<span class="text-red-500">*</span></label>
                                <input type="text" name="usaha_berdiri_sejak" class="w-full border-gray-300 rounded-md" value="{{ old('usaha_berdiri_sejak') }}" required>
                                <x-input-error class="mt-2" :messages="$errors->get('usaha_berdiri_sejak')" />
                            </div>
                            <div>
                                <label class="block text-sm font-medium">Nomor NIB</label>
                                <input type="text" name="nomor_nib" class="w-full border-gray-300 rounded-md" value="{{ old('nomor_nib') }}">
                                <x-input-error class="mt-2" :messages="$errors->get('nomor_nib')" />
                            </div>
                            <div>
                                <label class="block text-sm font-medium">Kapan Mulai Usaha<span class="text-red-500">*</span></label>
                                <input type="date" name="mulai_usaha" class="w-full border-gray-300 rounded-md" required>
                                <x-input-error class="mt-2" :messages="$errors->get('mulai_usaha')" />
                            </div>
                        </div>
                        <div class="mt-4">
                            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600">Daftar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
