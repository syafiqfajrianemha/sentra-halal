<x-guest-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h2 class="text-xl font-bold mb-2 uppercase text-center">Form Pendaftaran Sertifikat Halal</h2>
                    <h2 class="text-xl font-bold mb-2 uppercase text-center">Bagian Penanggung Jawab/Penyelia</h2>
                    <p class="text-sm font-medium mb-4">
                        <span class="text-red-500">*</span>) Wajib di isi.
                    </p>
                    <form action="{{ route('penanggung_jawab_penyelia.store', $pengajuan->id) }}" method="POST" class="space-y-4">
                        @csrf
                        <div class="grid grid-cols-1 gap-4">
                            <div>
                                <label class="block text-sm font-medium">Nama Penyelia<span class="text-red-500">*</span></label>
                                <input type="text" name="nama_penyelia" class="w-full border-gray-300 rounded-md" value="{{ old('nama_penyelia') }}" required>
                                <x-input-error class="mt-2" :messages="$errors->get('nama_penyelia')" />
                            </div>
                            <div>
                                <label class="block text-sm font-medium">NIK Penyelia<span class="text-red-500">*</span></label>
                                <input type="number" name="nik_penyelia" class="w-full border-gray-300 rounded-md" value="{{ old('nik_penyelia') }}" required>
                                <x-input-error class="mt-2" :messages="$errors->get('nik_penyelia')" />
                            </div>
                            <div>
                                <label class="block text-sm font-medium">Nomor WhatsApp Penyelia<span class="text-red-500">*</span></label>
                                <input type="number" name="nomor_whatsapp_penyelia" class="w-full border-gray-300 rounded-md" value="{{ old('nomor_whatsapp_penyelia') }}" required>
                                <x-input-error class="mt-2" :messages="$errors->get('nomor_whatsapp_penyelia')" />
                            </div>
                            <div>
                                <label class="block text-sm font-medium">Email Penyelia<span class="text-red-500">*</span></label>
                                <input type="text" name="email_penyelia" class="w-full border-gray-300 rounded-md" value="{{ old('email_penyelia') }}" required>
                                <x-input-error class="mt-2" :messages="$errors->get('email_penyelia')" />
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
