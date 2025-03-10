<x-guest-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row items-center md:items-start gap-6">
                <div class="flex flex-col gap-4 w-full md:w-2/4">
                    <button class="bg-blue-500 px-4 py-3 rounded-lg text-center text-white shadow">Panduan</button>
                    <button class="bg-blue-500 px-4 py-3 rounded-lg text-center text-white shadow">Syarat Pengajuan</button>
                    <a href="{{ route('service.halalcertification.register') }}" class="bg-blue-500 px-4 py-3 rounded-lg text-center text-white shadow">Pengajuan Sertifikat Halal</a>
                    {{-- <button class="bg-blue-500 px-4 py-3 rounded-lg text-center text-white shadow">Unduh Sertifikat</button> --}}
                </div>

                <div class="w-full md:w-3/4 flex justify-center">
                    <div class="w-80 h-80 flex items-center justify-center">
                        <img src="{{ asset('images/sertif.png') }}" alt="Logo">
                    </div>
                </div>
            </div>

            <div class="mb-3 flex justify-between items-center">
                <h1 class="text-xl font-semibold">Daftar Pengajuan Sertifikat Halal Anda</h1>
                {{-- <a href="#" class="px-4 py-2 bg-blue-600 text-white text-sm font-medium rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-300 flex items-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                    </svg>
                    Tambah
                </a> --}}
            </div>

            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                <table class="w-full text-sm text-left rtl:text-right text-gray-700">
                    <thead class="text-xs uppercase bg-gray-100 text-gray-700">
                        <tr>
                            <th scope="col" class="px-6 py-3">Nama Pelaku Usaha</th>
                            <th scope="col" class="px-6 py-3">NIK</th>
                            <th scope="col" class="px-6 py-3">Nama Usaha</th>
                            <th scope="col" class="px-6 py-3">Penanggung Jawab/Penyelia</th>
                            <th scope="col" class="px-6 py-3">Bahan-Bahan</th>
                            <th scope="col" class="px-6 py-3">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($pengajuanSertifikatHalals as $pengajuanSertifikatHalal)
                        <tr class="border-b border-gray-200">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                {{ $pengajuanSertifikatHalal->nama_pelaku_usaha }}
                            </th>
                            <td class="px-6 py-4">{{ $pengajuanSertifikatHalal->nik }}</td>
                            <td class="px-6 py-4">{{ $pengajuanSertifikatHalal->nama_usaha }}</td>
                            @foreach ($pengajuanSertifikatHalals as $pengajuan)
                            <td class="px-6 py-4">
                                @if ($pengajuan->penanggungJawabPenyelia)
                                    <a href="{{ route('penanggung_jawab_penyelia.edit', $pengajuan->penanggungJawabPenyelia->id) }}"
                                    class="px-4 py-2 bg-blue-500 text-white rounded">
                                        Edit Penanggung Jawab/Penyelia
                                    </a>
                                @else
                                    <a href="{{ route('penanggung_jawab_penyelia.create', $pengajuan->id) }}"
                                    class="px-4 py-2 bg-green-500 text-white rounded">
                                        Tambah Penanggung Jawab/Penyelia
                                    </a>
                                @endif
                            </td>
                            @endforeach
                            <td class="px-6 py-4">
                                @if ($pengajuan->bahans->isEmpty())
                                    <a href="{{ route('bahan.create', $pengajuan->id) }}"
                                        class="px-4 py-2 bg-green-500 text-white rounded">
                                        Tambah Bahan-Bahan
                                    </a>
                                @else
                                    <a href="{{ route('bahan.edit', $pengajuan->bahans->first()->id) }}"
                                        class="px-4 py-2 bg-blue-500 text-white rounded">
                                        Edit Bahan-Bahan
                                    </a>
                                @endif
                            </td>
                            <td class="px-6 py-4">
                                <div class="flex items-center gap-2">
                                    <a href="#" class="font-medium text-blue-600 hover:underline">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                                        </svg>
                                    </a>
                                    <a href="#" class="font-medium text-red-600 hover:underline">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                                        </svg>
                                    </a>
                                </div>
                            </td>
                        </tr>
                        @empty
                        <tr class="border-b border-gray-200 text-center text-red-600">
                            <td class="px-6 py-4" colspan="6">Belum ada data</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
            <div class="my-4 light">
                {{ $pengajuanSertifikatHalals->links() }}
            </div>
        </div>
    </div>
</x-guest-layout>
