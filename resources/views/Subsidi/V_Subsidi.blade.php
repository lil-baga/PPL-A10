@extends('Layout.navbarDashboard')
@section('title', '| Subsidi Pakan')
@section('content')
    <div class="w-screen px-0 flex flex-col border-l-4 border-gray-200">
        @if (Session::has('success'))
            <div id="alert-border-3" class="flex items-center p-4 mb-4 text-green-800 border-t-4 border-green-300 bg-green-50"
                role="alert">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
                    <path fill="currentColor" d="M5 22h14c1.103 0 2-.897 2-2V5c0-1.103-.897-2-2-2h-2a1 1 0 0 0-1-1H8a1 1 0 0 0-1 1H5c-1.103 0-2 .897-2 2v15c0 1.103.897 2 2 2zM5 5h2v2h10V5h2v15H5V5z"/>
                    <path fill="currentColor" d="m11 13.586l-1.793-1.793l-1.414 1.414L11 16.414l5.207-5.207l-1.414-1.414z"/>
                </svg>
                <div class="ms-3 text-sm font-medium">
                    {{ Session::get('success') }}
                </div>
                <button type="button"
                    class="ms-auto -mx-1.5 -my-1.5 bg-green-50 text-green-500 rounded-lg p-1.5 hover:bg-green-200 inline-flex items-center justify-center h-8 w-8"
                    data-dismiss-target="#alert-border-3" aria-label="Close">
                    <span class="sr-only">Dismiss</span>
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                </button>
            </div>
        @endif
        <div class="px-6 py-4">
            <h1 class="text-2xl font-bold text-gray-900 text-center">
                Pengajuan Pakan Subsidi
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
                                Surat Usaha</p>
                        </th>
                        <th class="cursor-pointer p-3 transition-colors hover:bg-[#F54C2A]">
                            <p class="antialias text-white flex items-center justify-center gap-2 font-normal">
                                Jumlah Ternak (Ekor)</p>
                        </th>
                        <th class="cursor-pointer p-3 transition-colors hover:bg-[#F54C2A]">
                            <p class="antialias text-white flex items-center justify-center gap-2 font-normal">
                                Ajuan Pakan (Kwintal)</p>
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
                                Foto Penerimaan</p>
                        </th>
                        <th class="cursor-pointer p-3 transition-colors hover:bg-[#F54C2A]">
                            <p class="antialias text-white flex items-center justify-center gap-2 font-normal">
                                Konfirmasi</p>
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
                    @if ($subsidiPakan->count() > 0)
                        <?php $no = 1; ?>
                        @if (Auth::user()->roles_id == 2)
                            @foreach ($subsidiPakan as $sp)
                                @if ($sp->users_id == $id)
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
                                                    {{ $sp->surat_pengantar }}</p>
                                            </div>
                                        </td>
                                        <td class="p-4">
                                            <div class="flex flex-col items-center justify-center">
                                                <p class="flex antialiased leading-normal text-gray-900 font-normal">
                                                    {{ $sp->surat_usaha }}</p>
                                            </div>
                                        </td>
                                        <td class="p-4">
                                            <div class="flex flex-col items-center justify-center">
                                                <p class="flex antialiased leading-normal text-gray-900 font-normal">
                                                    {{ $sp->jumlah_ternak }}</p>
                                            </div>
                                        </td>
                                        <td class="p-4">
                                            <div class="flex flex-col items-center justify-center">
                                                <p class="flex antialiased leading-normal text-gray-900 font-normal">
                                                    {{ $sp->jumlah_pakan }}</p>
                                            </div>
                                        </td>
                                        <td class="p-4">
                                            <div class="flex flex-col items-center justify-center">
                                                <p class="flex antialiased leading-normal text-gray-900 font-normal">
                                                    {{ $sp->foto_peternakan }}</p>
                                            </div>
                                        </td>
                                        <td class="p-4">
                                            @if ($sp->validasi == 'Diterima')
                                                <div
                                                    class="flex flex-col items-center justify-center bg-green-400 rounded-full p-2">
                                                    <p class="flex antialiased leading-normal text-gray-900 font-normal">
                                                    </p>
                                                </div>
                                            @elseif($sp->validasi == 'Ditolak')
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
                                                    {{ $sp->foto_konfirmasi }}</p>
                                            </div>
                                        </td>
                                        <td class="p-4">
                                            @if ($sp->konfirmasi == 'Sudah Diambil')
                                                <div
                                                    class="flex flex-col items-center justify-center bg-green-400 rounded-full p-2">
                                                    <p class="flex antialiased leading-normal text-gray-900 font-normal">
                                                    </p>
                                                </div>
                                            @elseif($sp->konfirmasi == 'Belum Diambil')
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
                                                    {{ $sp->catatan }}</p>
                                            </div>
                                        </td>
                                        <td class="p-4">
                                            <div class="flex flex-row items-center justify-center">
                                                <a href="{{ route('detail.subsidi', $sp->id) }}"
                                                    class="button bg-blue-500 flex flex-row items-center justify-center hover:cursor-pointer hover:bg-blue-700 text-white font-medium py-2 px-4 rounded gap-2">
                                                    Detail
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
                                                        <path fill="currentColor" d="M4 6h2v2H4zm0 5h2v2H4zm0 5h2v2H4zm16-8V6H8.023v2H18.8zM8 11h12v2H8zm0 5h12v2H8z"/>
                                                    </svg>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                @else
                                @endif
                            @endforeach
                        @else
                            @foreach ($subsidiPakan as $sp)
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
                                                {{ $sp->surat_pengantar }}</p>
                                        </div>
                                    </td>
                                    <td class="p-4">
                                        <div class="flex flex-col items-center justify-center">
                                            <p class="flex antialiased leading-normal text-gray-900 font-normal">
                                                {{ $sp->surat_usaha }}</p>
                                        </div>
                                    </td>
                                    <td class="p-4">
                                        <div class="flex flex-col items-center justify-center">
                                            <p class="flex antialiased leading-normal text-gray-900 font-normal">
                                                {{ $sp->jumlah_ternak }}</p>
                                        </div>
                                    </td>
                                    <td class="p-4">
                                        <div class="flex flex-col items-center justify-center">
                                            <p class="flex antialiased leading-normal text-gray-900 font-normal">
                                                {{ $sp->jumlah_pakan }}</p>
                                        </div>
                                    </td>
                                    <td class="p-4">
                                        <div class="flex flex-col items-center justify-center">
                                            <p class="flex antialiased leading-normal text-gray-900 font-normal">
                                                {{ $sp->foto_peternakan }}</p>
                                        </div>
                                    </td>
                                    <td class="p-4">
                                        @if ($sp->validasi == 'Diterima')
                                            <div
                                                class="flex flex-col items-center justify-center bg-green-400 rounded-full p-2">
                                                <p class="flex antialiased leading-normal text-gray-900 font-normal">
                                                </p>
                                            </div>
                                        @elseif($sp->validasi == 'Ditolak')
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
                                                {{ $sp->foto_konfirmasi }}</p>
                                        </div>
                                    </td>
                                    <td class="p-4">
                                        @if ($sp->konfirmasi == 'Sudah Diambil')
                                            <div
                                                class="flex flex-col items-center justify-center bg-green-400 rounded-full p-2">
                                                <p class="flex antialiased leading-normal text-gray-900 font-normal">
                                                </p>
                                            </div>
                                        @elseif($sp->konfirmasi == 'Belum Diambil')
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
                                                {{ $sp->catatan }}</p>
                                        </div>
                                    </td>
                                    <td class="p-4">
                                        <div class="flex flex-row items-center justify-center">
                                            <a href="{{ route('detail.subsidi', $sp->id) }}"
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
                            <td class="p-4 border-gray-50" colspan="11">Belum Ada Pengajuan...</td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
        @if (Auth::user()->roles_id == 2)
            <div class="flex flex-row items-center justify-center">
                <a href="/tambahSubsidi"
                    class="button bg-green-500 inset-y-0 left-0 top-0 flex flex-col-reverse mt-6 bottom-0 hover:cursor-pointer hover:bg-green-700 text-white font-medium py-2 px-4 rounded">
                    Tambah
                </a>
            </div>
        @else
        @endif
    </div>
@endsection
