@extends('Layout.navbarDashboard')
@section('title', '| Penyuluhan Ternak')
@section('content')
    <div class="w-screen px-0 flex flex-col">
        @if (Session::has('success'))
            <div class="rounded-md bg-green-50 p-4">
                <p class="flex items-center text-sm font-medium text-green-600">
                    <span class="pr-3">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="currentColor"
                            xmlns="http://www.w3.org/2000/svg">
                            <circle cx="10" cy="10" r="10" fill="currentColor"></circle>
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M14.1203 6.78954C14.3865 7.05581 14.3865 7.48751 14.1203 7.75378L9.12026 12.7538C8.85399 13.02 8.42229 13.02 8.15602 12.7538L5.88329 10.4811C5.61703 10.2148 5.61703 9.78308 5.88329 9.51682C6.14956 9.25055 6.58126 9.25055 6.84753 9.51682L8.63814 11.3074L13.156 6.78954C13.4223 6.52328 13.854 6.52328 14.1203 6.78954Z"
                                fill="white"></path>
                        </svg>
                    </span>
                    {{ Session::get('success') }}
                </p>
            </div>
        @endif
        <div class="px-6 py-4">
            <h1 class="text-2xl font-bold text-gray-900 text-center">
                Pengajuan Penyuluhan Ternak
            </h1>
        </div>
        <div class="py-4 px-12 w-full overflow-auto">
            <table class="w-full table-auto text-center text-sm">
                <thead>
                    <tr class="border border-[#F5682A] bg-[#F5682A]">
                        <th class="cursor-pointer p-3 transition-colors hover:bg-[#F54C2A]">
                            <p class="antialias text-white flex items-center justify-center gap-2 font-normal">
                                No.</p>
                        </th>
                        <th class="cursor-pointer p-3 transition-colors hover:bg-[#F54C2A]">
                            <p class="antialias text-white flex items-center justify-center gap-2 font-normal">
                                Surat Pengantar</p>
                        </th>
                        <th class="cursor-pointer p-3 transition-colors hover:bg-[#F54C2A]">
                            <p class="antialias text-white flex items-center justify-center gap-2 font-normal">
                                Suhu Kandang (°C)</p>
                        </th>
                        <th class="cursor-pointer p-3 transition-colors hover:bg-[#F54C2A]">
                            <p class="antialias text-white flex items-center justify-center gap-2 font-normal">
                                Kadar Air (L)</p>
                        </th>
                        <th class="cursor-pointer p-3 transition-colors hover:bg-[#F54C2A]">
                            <p class="antialias text-white flex items-center justify-center gap-2 font-normal">
                                Kadar Pakan (Kg)</p>
                        </th>
                        <th class="cursor-pointer p-3 transition-colors hover:bg-[#F54C2A]">
                            <p class="antialias text-white flex items-center justify-center gap-2 font-normal">
                                Kondisi Ayam</p>
                        </th>
                        <th class="cursor-pointer p-3 transition-colors hover:bg-[#F54C2A]">
                            <p class="antialias text-white flex items-center justify-center gap-2 font-normal">
                                Foto Ayam</p>
                        </th>
                        <th class="cursor-pointer p-3 transition-colors hover:bg-[#F54C2A]">
                            <p class="antialias text-white flex items-center justify-center gap-2 font-normal">
                                Foto Peternakan</p>
                        </th>
                        <th class="cursor-pointer p-3 transition-colors hover:bg-[#F54C2A]">
                            <p class="antialias text-white flex items-center justify-center gap-2 font-normal">
                                Validasi</p>
                        </th>
                        <th class="cursor-pointer p-3 transition-colors hover:bg-[#F54C2A]">
                            <p class="antialias text-white flex items-center justify-center gap-2 font-normal">
                                Tanggal Penyuluhan</p>
                        </th>
                        <th class="cursor-pointer p-3 transition-colors hover:bg-[#F54C2A]">
                            <p class="antialias text-white flex items-center justify-center gap-2 font-normal">
                                Catatan</p>
                        </th>
                        <th class="cursor-pointer p-3 transition-colors hover:bg-[#F54C2A]">
                            <p class="antialias text-white flex items-center justify-center gap-2 font-normal">
                                Aksi</p>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @if ($penyuluhanTernak->count() > 0)
                        <?php $no = 1; ?>
                        @if (Auth::user()->roles_id == 2)
                            @foreach ($penyuluhanTernak as $pt)
                                @if ($pt->users_id == $id)
                                    <tr class="border border-gray-300">
                                        <td class="p-4">
                                            <div class="flex flex-col items-center justify-center">
                                                <p class="flex antialiased leading-normal text-gray-900 font-normal">
                                                    {{ $no++ }}</p>
                                            </div>
                                        </td>
                                        <td class="p-4">
                                            <div class="flex flex-col items-center justify-center">
                                                <p class="flex antialiased leading-normal text-gray-900 font-normal">
                                                    {{ $pt->surat_pengantar }}</p>
                                            </div>
                                        </td>
                                        <td class="p-4">
                                            <div class="flex flex-col items-center justify-center">
                                                <p class="flex antialiased leading-normal text-gray-900 font-normal">
                                                    {{ $pt->suhu_kandang }}</p>
                                            </div>
                                        </td>
                                        <td class="p-4">
                                            <div class="flex flex-col items-center justify-center">
                                                <p class="flex antialiased leading-normal text-gray-900 font-normal">
                                                    {{ $pt->kadar_air }}</p>
                                            </div>
                                        </td>
                                        <td class="p-4">
                                            <div class="flex flex-col items-center justify-center">
                                                <p class="flex antialiased leading-normal text-gray-900 font-normal">
                                                    {{ $pt->kadar_pakan }}</p>
                                            </div>
                                        </td>
                                        <td class="p-4">
                                            <div class="flex flex-col items-center justify-center">
                                                <p class="flex antialiased leading-normal text-gray-900 font-normal">
                                                    {{ $pt->kondisi_ayam }}</p>
                                            </div>
                                        </td>
                                        <td class="p-4">
                                            <div class="flex flex-col items-center justify-center">
                                                <p class="flex antialiased leading-normal text-gray-900 font-normal">
                                                    {{ $pt->foto_ayam }}</p>
                                            </div>
                                        </td>
                                        <td class="p-4">
                                            <div class="flex flex-col items-center justify-center">
                                                <p class="flex antialiased leading-normal text-gray-900 font-normal">
                                                    {{ $pt->foto_peternakan }}</p>
                                            </div>
                                        </td>
                                        <td class="p-4">
                                            @if ($pt->validasi == 'Diterima')
                                                <div
                                                    class="flex flex-col items-center justify-center bg-green-400 rounded-full p-2">
                                                    <p class="flex antialiased leading-normal text-gray-900 font-normal">
                                                    </p>
                                                </div>
                                            @elseif($pt->validasi == 'Ditolak')
                                                <div
                                                    class="flex flex-col items-center justify-center bg-red-400 rounded-full p-2">
                                                    <p class="flex antialiased leading-normal text-gray-900 font-normal">
                                                    </p>
                                                </div>
                                            @else
                                                <div
                                                    class="flex flex-col items-center justify-center bg-yellow-400 rounded-full p-2">
                                                    <p class="flex antialiased leading-normal text-gray-900 font-normal">
                                                    </p>
                                                </div>
                                            @endif
                                        </td>
                                        <td class="p-4">
                                            <div class="flex flex-col items-center justify-center">
                                                <p class="flex antialiased leading-normal text-gray-900 font-normal">
                                                    {{ $pt->tanggal_penyuluhan }}</p>
                                            </div>
                                        </td>
                                        <td class="p-4">
                                            <div class="flex flex-col items-center justify-center">
                                                <p class="flex antialiased leading-normal text-gray-900 font-normal">
                                                    {{ $pt->catatan }}</p>
                                            </div>
                                        </td>
                                        <td class="p-4">
                                            <div class="flex flex-row items-center justify-center">
                                                <a href="{{ route('detail.penyuluhan', $pt->id) }}"
                                                    class="button bg-blue-500 inset-y-0 left-0 top-0 flex flex-col-reverse bottom-0 hover:cursor-pointer hover:bg-blue-700 text-white font-medium py-2 px-4 rounded">
                                                    Detail
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                @else
                                @endif
                            @endforeach
                        @else
                            @foreach ($penyuluhanTernak as $pt)
                                <tr class="border border-gray-300">
                                    <td class="p-4">
                                        <div class="flex flex-col items-center justify-center">
                                            <p class="flex antialiased leading-normal text-gray-900 font-normal">
                                                {{ $no++ }}</p>
                                        </div>
                                    </td>
                                    <td class="p-4">
                                        <div class="flex flex-col items-center justify-center">
                                            <p class="flex antialiased leading-normal text-gray-900 font-normal">
                                                {{ $pt->surat_pengantar }}</p>
                                        </div>
                                    </td>
                                    <td class="p-4">
                                        <div class="flex flex-col items-center justify-center">
                                            <p class="flex antialiased leading-normal text-gray-900 font-normal">
                                                {{ $pt->suhu_kandang }}</p>
                                        </div>
                                    </td>
                                    <td class="p-4">
                                        <div class="flex flex-col items-center justify-center">
                                            <p class="flex antialiased leading-normal text-gray-900 font-normal">
                                                {{ $pt->kadar_air }}</p>
                                        </div>
                                    </td>
                                    <td class="p-4">
                                        <div class="flex flex-col items-center justify-center">
                                            <p class="flex antialiased leading-normal text-gray-900 font-normal">
                                                {{ $pt->kadar_pakan }}</p>
                                        </div>
                                    </td>
                                    <td class="p-4">
                                        <div class="flex flex-col items-center justify-center">
                                            <p class="flex antialiased leading-normal text-gray-900 font-normal">
                                                {{ $pt->kondisi_ayam }}</p>
                                        </div>
                                    </td>
                                    <td class="p-4">
                                        <div class="flex flex-col items-center justify-center">
                                            <p class="flex antialiased leading-normal text-gray-900 font-normal">
                                                {{ $pt->foto_ayam }}</p>
                                        </div>
                                    </td>
                                    <td class="p-4">
                                        <div class="flex flex-col items-center justify-center">
                                            <p class="flex antialiased leading-normal text-gray-900 font-normal">
                                                {{ $pt->foto_peternakan }}</p>
                                        </div>
                                    </td>
                                    <td class="p-4">
                                        @if ($pt->validasi == 'Diterima')
                                            <div
                                                class="flex flex-col items-center justify-center bg-green-400 rounded-full p-2">
                                                <p class="flex antialiased leading-normal text-gray-900 font-normal">
                                                </p>
                                            </div>
                                        @elseif($pt->validasi == 'Ditolak')
                                            <div
                                                class="flex flex-col items-center justify-center bg-red-400 rounded-full p-2">
                                                <p class="flex antialiased leading-normal text-gray-900 font-normal">
                                                </p>
                                            </div>
                                        @else
                                            <div
                                                class="flex flex-col items-center justify-center bg-yellow-400 rounded-full p-2">
                                                <p class="flex antialiased leading-normal text-gray-900 font-normal">
                                                </p>
                                            </div>
                                        @endif
                                    </td>
                                    <td class="p-4">
                                        <div class="flex flex-col items-center justify-center">
                                            <p class="flex antialiased leading-normal text-gray-900 font-normal">
                                                {{ $pt->tanggal_penyuluhan }}</p>
                                        </div>
                                    </td>
                                    <td class="p-4">
                                        <div class="flex flex-col items-center justify-center">
                                            <p class="flex antialiased leading-normal text-gray-900 font-normal">
                                                {{ $pt->catatan }}</p>
                                        </div>
                                    </td>
                                    <td class="p-4">
                                        <div class="flex flex-row items-center justify-center">
                                            <a href="{{ route('detail.penyuluhan', $pt->id) }}"
                                                class="button bg-blue-500 inset-y-0 left-0 top-0 flex flex-col-reverse bottom-0 hover:cursor-pointer hover:bg-blue-700 text-white font-medium py-2 px-4 rounded">
                                                Detail
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        @endif
                    @else
                        <tr>
                            <td class="p-4 border-gray-50" colspan="12">Belum Ada Pengajuan...</td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
        @if (Auth::user()->roles_id == 2)
            <div class="flex flex-row items-center justify-center">
                <a href="/tambahPenyuluhan"
                    class="button bg-green-500 inset-y-0 left-0 top-0 flex flex-col-reverse mt-6 bottom-0 hover:cursor-pointer hover:bg-green-700 text-white font-medium py-2 px-4 rounded">
                    Tambah
                </a>
            </div>
        @else
        @endif
    </div>
@endsection
