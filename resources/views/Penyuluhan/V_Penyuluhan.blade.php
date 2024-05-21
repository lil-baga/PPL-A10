@extends('Layout.Sidebar')
@section('title', '| Penyuluhan Ternak')
@section('content')
    <div class="w-full bg-slate-200 scrollbar">
        @if (Session::has('success'))
            <div id="alert-border-3"
                class="flex absolute w-auto justify-center p-4 mb-4 text-slate-800 border-t-4 border-green-300 bg-green-50 z-50"
                role="alert">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
                    <path fill="currentColor"
                        d="M5 22h14c1.103 0 2-.897 2-2V5c0-1.103-.897-2-2-2h-2a1 1 0 0 0-1-1H8a1 1 0 0 0-1 1H5c-1.103 0-2 .897-2 2v15c0 1.103.897 2 2 2zM5 5h2v2h10V5h2v15H5V5z" />
                    <path fill="currentColor" d="m11 13.586l-1.793-1.793l-1.414 1.414L11 16.414l5.207-5.207l-1.414-1.414z" />
                </svg>
                <div class="mx-3 text-sm font-medium">
                    {{ Session::get('success') }}
                </div>
                <button type="button"
                    class="ms-auto -mx-1.5 -my-1.5 bg-green-50 text-slate-500 rounded-lg p-1.5 hover:bg-slate-200 inline-flex items-center justify-center ml-8 h-8 w-8"
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
        <div class="px-16 py-16">
            <div class="px-8 py-8 shadow-xl bg-white rounded-lg">
                <h1 class="text-2xl font-bold text-gray-900 text-center">
                    Pengajuan Penyuluhan Ternak
                </h1>
                <div class="flex flex-col h-[670px] overflow-auto mt-4">
                    <table class="w-full table-auto text-center text-sm bg-white">
                        <thead>
                            <tr class="bg-slate-900">
                                <th
                                    class="cursor-pointer p-3 transition-colors hover:bg-[#F5682A] hover:border-[#F5682A] border border-slate-900">
                                    <p class="antialias text-white flex items-center justify-center font-normal">
                                        No.</p>
                                </th>
                                <th
                                    class="cursor-pointer p-3 transition-colors hover:bg-[#F5682A] hover:border-[#F5682A] border border-slate-900">
                                    <p class="antialias text-white flex items-center justify-center font-normal">
                                        Suhu Kandang (°C)</p>
                                </th>
                                <th
                                    class="cursor-pointer p-3 transition-colors hover:bg-[#F5682A] hover:border-[#F5682A] border border-slate-900">
                                    <p class="antialias text-white flex items-center justify-center font-normal">
                                        Kadar Air (Liter)</p>
                                </th>
                                <th
                                    class="cursor-pointer p-3 transition-colors hover:bg-[#F5682A] hover:border-[#F5682A] border border-slate-900">
                                    <p class="antialias text-white flex items-center justify-center font-normal">
                                        Kadar Pakan (Kg)</p>
                                </th>
                                <th
                                    class="cursor-pointer p-3 transition-colors hover:bg-[#F5682A] hover:border-[#F5682A] border border-slate-900">
                                    <p class="antialias text-white flex items-center justify-center font-normal">
                                        Validasi</p>
                                </th>
                                <th
                                    class="cursor-pointer p-3 transition-colors hover:bg-[#F5682A] hover:border-[#F5682A] border border-slate-900">
                                    <p class="antialias text-white flex items-center justify-center font-normal">
                                        Konfirmasi</p>
                                </th>
                                <th
                                    class="cursor-pointer p-3 transition-colors hover:bg-[#F5682A] hover:border-[#F5682A] border border-slate-900">
                                    <p class="antialias text-white flex items-center justify-center font-normal">
                                        Tanggal Penyuluhan</p>
                                </th>
                                <th
                                    class="cursor-pointer p-3 transition-colors hover:bg-[#F5682A] hover:border-[#F5682A] border border-slate-900">
                                    <p class="antialias text-white flex items-center justify-center font-normal">
                                        Catatan</p>
                                </th>
                                <th
                                    class="cursor-pointer p-3 transition-colors hover:bg-[#F5682A] hover:border-[#F5682A] border border-slate-900">
                                    <p class="antialias text-white flex items-center justify-center font-normal">
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
                                            <tr>
                                                <td class="p-4 border border-slate-300">
                                                    <div class="flex flex-col items-center justify-center">
                                                        <p
                                                            class="flex antialiased leading-normal text-slate-900 font-normal">
                                                            {{ $no++ }}</p>
                                                    </div>
                                                </td>
                                                <td class="p-4 border border-slate-300">
                                                    <div class="flex flex-col items-center justify-center">
                                                        <p
                                                            class="flex antialiased leading-normal text-slate-900 font-normal">
                                                            {{ $pt->suhu_kandang }}</p>
                                                    </div>
                                                </td>
                                                <td class="p-4 border border-slate-300">
                                                    <div class="flex flex-col items-center justify-center">
                                                        <p
                                                            class="flex antialiased leading-normal text-slate-900 font-normal">
                                                            {{ $pt->kadar_air }}</p>
                                                    </div>
                                                </td>
                                                <td class="p-4 border border-slate-300">
                                                    <div class="flex flex-col items-center justify-center">
                                                        <p
                                                            class="flex antialiased leading-normal text-slate-900 font-normal">
                                                            {{ $pt->kadar_pakan }}</p>
                                                    </div>
                                                </td>
                                                <td class="p-4 border border-slate-300">
                                                    @if ($pt->validasi_id == 1)
                                                        <div
                                                            class="flex flex-col items-center justify-center bg-green-400 rounded-full p-2">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="20"
                                                                height="20" viewBox="0 0 24 24">
                                                                <path fill="currentColor"
                                                                    d="m2.394 13.742l4.743 3.62l7.616-8.704l-1.506-1.316l-6.384 7.296l-3.257-2.486zm19.359-5.084l-1.506-1.316l-6.369 7.279l-.753-.602l-1.25 1.562l2.247 1.798z" />
                                                            </svg>
                                                        </div>
                                                    @elseif($pt->validasi_id == 3)
                                                        <div
                                                            class="flex flex-col items-center justify-center bg-red-400 rounded-full p-2">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="20"
                                                                height="20" viewBox="0 0 24 24">
                                                                <path fill="currentColor"
                                                                    d="M12 2C6.486 2 2 6.486 2 12s4.486 10 10 10s10-4.486 10-10S17.514 2 12 2zM4 12c0-1.846.634-3.542 1.688-4.897l11.209 11.209A7.946 7.946 0 0 1 12 20c-4.411 0-8-3.589-8-8zm14.312 4.897L7.103 5.688A7.948 7.948 0 0 1 12 4c4.411 0 8 3.589 8 8a7.954 7.954 0 0 1-1.688 4.897z" />
                                                            </svg>
                                                        </div>
                                                    @else
                                                        <div
                                                            class="flex flex-col items-center justify-center bg-yellow-400 rounded-full p-2">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="20"
                                                                height="20" viewBox="0 0 24 24">
                                                                <path fill="currentColor"
                                                                    d="M12 4c-4.879 0-9 4.121-9 9s4.121 9 9 9s9-4.121 9-9s-4.121-9-9-9zm0 16c-3.794 0-7-3.206-7-7s3.206-7 7-7s7 3.206 7 7s-3.206 7-7 7z" />
                                                                <path fill="currentColor"
                                                                    d="M13 12V8h-2v6h6v-2zm4.284-8.293l1.412-1.416l3.01 3l-1.413 1.417zm-10.586 0l-2.99 2.999L2.29 5.294l2.99-3z" />
                                                            </svg>
                                                        </div>
                                                    @endif
                                                </td>
                                                <td class="p-4 border border-slate-300">
                                                    @if ($pt->konfirmasi_id == 1)
                                                        <div
                                                            class="flex flex-col items-center justify-center bg-green-400 rounded-full p-2">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="20"
                                                                height="20" viewBox="0 0 24 24">
                                                                <path fill="currentColor"
                                                                    d="m2.394 13.742l4.743 3.62l7.616-8.704l-1.506-1.316l-6.384 7.296l-3.257-2.486zm19.359-5.084l-1.506-1.316l-6.369 7.279l-.753-.602l-1.25 1.562l2.247 1.798z" />
                                                            </svg>
                                                        </div>
                                                    @elseif($pt->konfirmasi_id == 3)
                                                        <div
                                                            class="flex flex-col items-center justify-center bg-red-400 rounded-full p-2">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="20"
                                                                height="20" viewBox="0 0 24 24">
                                                                <path fill="currentColor"
                                                                    d="M12 2C6.486 2 2 6.486 2 12s4.486 10 10 10s10-4.486 10-10S17.514 2 12 2zM4 12c0-1.846.634-3.542 1.688-4.897l11.209 11.209A7.946 7.946 0 0 1 12 20c-4.411 0-8-3.589-8-8zm14.312 4.897L7.103 5.688A7.948 7.948 0 0 1 12 4c4.411 0 8 3.589 8 8a7.954 7.954 0 0 1-1.688 4.897z" />
                                                            </svg>
                                                        </div>
                                                    @else
                                                        <div
                                                            class="flex flex-col items-center justify-center bg-yellow-400 rounded-full p-2">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="20"
                                                                height="20" viewBox="0 0 24 24">
                                                                <path fill="currentColor"
                                                                    d="M12 4c-4.879 0-9 4.121-9 9s4.121 9 9 9s9-4.121 9-9s-4.121-9-9-9zm0 16c-3.794 0-7-3.206-7-7s3.206-7 7-7s7 3.206 7 7s-3.206 7-7 7z" />
                                                                <path fill="currentColor"
                                                                    d="M13 12V8h-2v6h6v-2zm4.284-8.293l1.412-1.416l3.01 3l-1.413 1.417zm-10.586 0l-2.99 2.999L2.29 5.294l2.99-3z" />
                                                            </svg>
                                                        </div>
                                                    @endif
                                                </td>
                                                <td class="p-4 border border-slate-300">
                                                    <div class="flex flex-col items-center justify-center">
                                                        @if ($pt->tanggal_penyuluhan == null)
                                                            <p
                                                                class="flex antialiased leading-normal text-slate-900 font-normal">
                                                                Belum ada Tanggal...
                                                            </p>
                                                        @else
                                                            <p
                                                                class="flex antialiased leading-normal text-slate-900 font-normal">
                                                                {{ $pt->tanggal_penyuluhan->translatedFormat('l, d F Y H:i') }}
                                                            </p>
                                                        @endif
                                                    </div>
                                                </td>
                                                <td class="p-4 w-64 max-w-64 border border-slate-300">
                                                    <div class="flex flex-col items-center justify-center text-justify">
                                                        @if ($pt->catatan == null)
                                                            <p
                                                                class="flex antialiased leading-normal text-slate-900 font-normal">
                                                                Belum ada Catatan...
                                                            </p>
                                                        @else
                                                            <p
                                                                class="flex antialiased leading-normal text-slate-900 font-normal">
                                                                {{ $pt->catatan }}</p>
                                                        @endif
                                                    </div>
                                                </td>
                                                <td class="p-4 border border-slate-300">
                                                    <div class="flex flex-row items-center justify-center">
                                                        <a href="{{ route('detail.penyuluhan', $pt->id) }}"
                                                            class="button bg-blue-500 transition-colors flex flex-row items-center justify-center hover:cursor-pointer hover:bg-blue-700 text-white font-medium py-2 px-4 rounded gap-2">
                                                            Detail
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="20"
                                                                height="20" viewBox="0 0 24 24">
                                                                <path fill="currentColor"
                                                                    d="M3 5v14c0 1.103.897 2 2 2h14c1.103 0 2-.897 2-2V5c0-1.103-.897-2-2-2H5c-1.103 0-2 .897-2 2zm16.001 14H5V5h14l.001 14z" />
                                                                <path fill="currentColor"
                                                                    d="M11 7h2v10h-2zm4 3h2v7h-2zm-8 2h2v5H7z" />
                                                            </svg>
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
                                        @else
                                        @endif
                                    @endforeach
                                @else
                                    @foreach ($penyuluhanTernak as $pt)
                                        <tr class="border border-slate-300 items-center justify-center content-center">
                                            <td class="p-4 border border-slate-300">
                                                <div class="flex flex-col items-center justify-center">
                                                    <p class="flex antialiased leading-normal text-slate-900 font-normal">
                                                        {{ $no++ }}</p>
                                                </div>
                                            </td>
                                            <td class="p-4 border border-slate-300">
                                                <div class="flex flex-col items-center justify-center">
                                                    <p class="flex antialiased leading-normal text-slate-900 font-normal">
                                                        {{ $pt->suhu_kandang }}</p>
                                                </div>
                                            </td>
                                            <td class="p-4 border border-slate-300">
                                                <div class="flex flex-col items-center justify-center">
                                                    <p class="flex antialiased leading-normal text-slate-900 font-normal">
                                                        {{ $pt->kadar_air }}</p>
                                                </div>
                                            </td>
                                            <td class="p-4 border border-slate-300">
                                                <div class="flex flex-col items-center justify-center">
                                                    <p class="flex antialiased leading-normal text-slate-900 font-normal">
                                                        {{ $pt->kadar_pakan }}</p>
                                                </div>
                                            </td>
                                            <td class="p-4 border border-slate-300">
                                                @if ($pt->validasi_id == 1)
                                                    <div
                                                        class="flex flex-col items-center justify-center bg-green-400 rounded-full p-2">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="20"
                                                            height="20" viewBox="0 0 24 24">
                                                            <path fill="currentColor"
                                                                d="m2.394 13.742l4.743 3.62l7.616-8.704l-1.506-1.316l-6.384 7.296l-3.257-2.486zm19.359-5.084l-1.506-1.316l-6.369 7.279l-.753-.602l-1.25 1.562l2.247 1.798z" />
                                                        </svg>
                                                    </div>
                                                @elseif($pt->validasi_id == 3)
                                                    <div
                                                        class="flex flex-col items-center justify-center bg-red-400 rounded-full p-2">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="20"
                                                            height="20" viewBox="0 0 24 24">
                                                            <path fill="currentColor"
                                                                d="M12 2C6.486 2 2 6.486 2 12s4.486 10 10 10s10-4.486 10-10S17.514 2 12 2zM4 12c0-1.846.634-3.542 1.688-4.897l11.209 11.209A7.946 7.946 0 0 1 12 20c-4.411 0-8-3.589-8-8zm14.312 4.897L7.103 5.688A7.948 7.948 0 0 1 12 4c4.411 0 8 3.589 8 8a7.954 7.954 0 0 1-1.688 4.897z" />
                                                        </svg>
                                                    </div>
                                                @else
                                                    <div
                                                        class="flex flex-col items-center justify-center bg-yellow-400 rounded-full p-2">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="20"
                                                            height="20" viewBox="0 0 24 24">
                                                            <path fill="currentColor"
                                                                d="M12 4c-4.879 0-9 4.121-9 9s4.121 9 9 9s9-4.121 9-9s-4.121-9-9-9zm0 16c-3.794 0-7-3.206-7-7s3.206-7 7-7s7 3.206 7 7s-3.206 7-7 7z" />
                                                            <path fill="currentColor"
                                                                d="M13 12V8h-2v6h6v-2zm4.284-8.293l1.412-1.416l3.01 3l-1.413 1.417zm-10.586 0l-2.99 2.999L2.29 5.294l2.99-3z" />
                                                        </svg>
                                                    </div>
                                                @endif
                                            </td>
                                            <td class="p-4 border border-slate-300">
                                                @if ($pt->konfirmasi_id == 1)
                                                    <div
                                                        class="flex flex-col items-center justify-center bg-green-400 rounded-full p-2">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="20"
                                                            height="20" viewBox="0 0 24 24">
                                                            <path fill="currentColor"
                                                                d="m2.394 13.742l4.743 3.62l7.616-8.704l-1.506-1.316l-6.384 7.296l-3.257-2.486zm19.359-5.084l-1.506-1.316l-6.369 7.279l-.753-.602l-1.25 1.562l2.247 1.798z" />
                                                        </svg>
                                                    </div>
                                                @elseif($pt->konfirmasi_id == 3)
                                                    <div
                                                        class="flex flex-col items-center justify-center bg-red-400 rounded-full p-2">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="20"
                                                            height="20" viewBox="0 0 24 24">
                                                            <path fill="currentColor"
                                                                d="M12 2C6.486 2 2 6.486 2 12s4.486 10 10 10s10-4.486 10-10S17.514 2 12 2zM4 12c0-1.846.634-3.542 1.688-4.897l11.209 11.209A7.946 7.946 0 0 1 12 20c-4.411 0-8-3.589-8-8zm14.312 4.897L7.103 5.688A7.948 7.948 0 0 1 12 4c4.411 0 8 3.589 8 8a7.954 7.954 0 0 1-1.688 4.897z" />
                                                        </svg>
                                                    </div>
                                                @else
                                                    <div
                                                        class="flex flex-col items-center justify-center bg-yellow-400 rounded-full p-2">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="20"
                                                            height="20" viewBox="0 0 24 24">
                                                            <path fill="currentColor"
                                                                d="M12 4c-4.879 0-9 4.121-9 9s4.121 9 9 9s9-4.121 9-9s-4.121-9-9-9zm0 16c-3.794 0-7-3.206-7-7s3.206-7 7-7s7 3.206 7 7s-3.206 7-7 7z" />
                                                            <path fill="currentColor"
                                                                d="M13 12V8h-2v6h6v-2zm4.284-8.293l1.412-1.416l3.01 3l-1.413 1.417zm-10.586 0l-2.99 2.999L2.29 5.294l2.99-3z" />
                                                        </svg>
                                                    </div>
                                                @endif
                                            </td>
                                            <td class="p-4 border border-slate-300">
                                                <div class="flex flex-col items-center justify-center">
                                                    @if ($pt->tanggal_penyuluhan == null)
                                                        <p
                                                            class="flex antialiased leading-normal text-slate-900 font-normal">
                                                            Belum ada Tanggal...
                                                        </p>
                                                    @else
                                                        <p
                                                            class="flex antialiased leading-normal text-slate-900 font-normal">
                                                            {{ $pt->tanggal_penyuluhan->translatedFormat('l, d F Y H:i') }}
                                                        </p>
                                                    @endif
                                                </div>
                                            </td>
                                            <td class="p-4 w-64 max-w-64 border border-slate-300">
                                                <div class="flex flex-col items-center justify-center text-justify">
                                                    @if ($pt->catatan == null)
                                                        <p
                                                            class="flex antialiased leading-normal text-slate-900 font-normal">
                                                            Belum ada Catatan...
                                                        </p>
                                                    @else
                                                        <p
                                                            class="flex antialiased leading-normal text-slate-900 font-normal">
                                                            {{ $pt->catatan }}</p>
                                                    @endif
                                                </div>
                                            </td>
                                            <td class="p-4 border border-slate-300">
                                                <div class="flex flex-row items-center justify-center">
                                                    <a href="{{ route('detail.penyuluhan', $pt->id) }}"
                                                        class="button bg-blue-500 flex flex-row items-center justify-center hover:cursor-pointer hover:bg-blue-700 text-white font-medium py-2 px-4 rounded gap-2">
                                                        Detail
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="20"
                                                            height="20" viewBox="0 0 24 24">
                                                            <path fill="currentColor"
                                                                d="M3 5v14c0 1.103.897 2 2 2h14c1.103 0 2-.897 2-2V5c0-1.103-.897-2-2-2H5c-1.103 0-2 .897-2 2zm16.001 14H5V5h14l.001 14z" />
                                                            <path fill="currentColor"
                                                                d="M11 7h2v10h-2zm4 3h2v7h-2zm-8 2h2v5H7z" />
                                                        </svg>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                @endif
                            @else
                                <tr>
                                    <td class="p-4 border-slate-50" colspan="11">Belum ada Pengajuan...</td>
                                </tr>
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
            @if (Auth::user()->roles_id == 2)
                <div class="flex flex-row items-center justify-center">
                    <a href="/tambahPenyuluhan"
                        class="button items-center justify-center transition-colors bg-green-500 inset-y-0 left-0 top-0 flex flex-row mt-6 bottom-0 hover:cursor-pointer hover:bg-green-700 text-white font-medium py-2 px-4 rounded gap-2">
                        Tambah
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
                            <path fill="currentColor"
                                d="m21.706 5.292l-2.999-2.999A.996.996 0 0 0 18 2H6a.996.996 0 0 0-.707.293L2.294 5.292A.994.994 0 0 0 2 6v13c0 1.103.897 2 2 2h16c1.103 0 2-.897 2-2V6a.994.994 0 0 0-.294-.708zM6.414 4h11.172l1 1H5.414l1-1zM4 19V7h16l.002 12H4z" />
                            <path fill="currentColor" d="M14 9h-4v3H7l5 5l5-5h-3z" />
                        </svg>
                    </a>
                </div>
            @else
            @endif
        </div>
    @endsection
