@extends('Layout.Sidebar')
@section('title', '| Detail Penyuluhan')
@section('content')
    <div class="w-full bg-white border-l-4 border-gray-200">
        <div class="px-6 py-4">
            <h1 class="text-2xl font-bold text-gray-900 text-center">
                Detail Pengajuan Penyuluhan Ternak
            </h1>
            <div class="p-6 flex flex-row gap-64">
                <div class="gap-10">
                    <p class="block text-m font-medium text-gray-900"><b>Nama: </b> {{ $currentuser->nama }}</p>
                    <p class="block text-m font-medium text-gray-900"><b>Alamat: </b> {{ $currentuser->alamat }}</p>
                    <p class="block text-m font-medium text-gray-900"><b>Nomor Telepon: </b> {{ $currentuser->kontak }}</p>
                </div>
                <div class="flex flex-col items-start justify-inline-start max-w-[512px] gap-8">
                    <div>
                        <p class="flex font-medium text-sm text-gray-900">Surat Pengantar:
                        <p class="flex mb-1 font-medium text-sm text-gray-900"><a
                                href="{{ url("foto_surat/$penyuluhanTernak->surat_pengantar") }}" target="_blank"
                                class="hover:text-[#F5682A]">{{ $penyuluhanTernak->surat_pengantar }}</a></p>
                    </div>
                    <div>
                        <label for="kadar_air" class="flex mb-1 font-medium text-sm text-gray-900">Kadar
                            Air (Liter)</label>
                        <input type="text" name="kadar_air" id="kadar_air" placeholder="Kadar Air" readonly
                            value="{{ $penyuluhanTernak->kadar_air }}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-[#F5682A] focus:border-[#F5682A] flex w-full p-2.5"
                            required="">
                    </div>
                    <div>
                        <p class="flex font-medium text-sm text-gray-900">Foto Ayam:</p>
                        <p class="flex mb-1 font-medium text-sm text-gray-900"><a
                                href="{{ url("foto_peternak/$penyuluhanTernak->foto_ayam") }}" target="_blank"
                                class="hover:text-[#F5682A]">{{ $penyuluhanTernak->foto_ayam }}</a></p>
                    </div>
                    <div>
                        <p class="flex font-medium text-sm text-gray-900">Foto Peternakan:</p>
                        <p class="flex mb-1 font-medium text-sm text-gray-900"><a
                                href="{{ url("foto_peternak/$penyuluhanTernak->foto_peternakan") }}" target="_blank"
                                class="hover:text-[#F5682A]">{{ $penyuluhanTernak->foto_peternakan }}</a></p>
                    </div>
                </div>
                <div class="flex flex-col items-start justify-inline-start max-w-[512px] gap-8">
                    <div>
                        <label for="suhu_kandang" class="flex mb-1 font-medium text-sm text-gray-900">Suhu
                            Kandang (Celcius)</label>
                        <input type="text" name="suhu_kandang" id="suhu_kandang" placeholder="Suhu Kandang" readonly
                            value="{{ $penyuluhanTernak->suhu_kandang }}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-[#F5682A] focus:border-[#F5682A] flex w-full p-2.5"
                            required="">
                    </div>
                    <div>
                        <label for="kadar_pakan" class="flex mb-1 font-medium text-sm text-gray-900">Kadar Pakan
                            (Kilogram)</label>
                        <input type="text" name="kadar_pakan" id="kadar_pakan" placeholder="Kadar Pakan" readonly
                            value="{{ $penyuluhanTernak->kadar_pakan }}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-[#F5682A] focus:border-[#F5682A] flex w-full p-2.5"
                            required="">
                    </div>
                    <div>
                        <p class="flex font-medium text-sm text-gray-900">Status Validasi</p>
                        @if ($penyuluhanTernak->validasi == 'Diterima')
                            <div class="flex flex-col items-center justify-center bg-green-300 rounded-lg p-2 w-36">
                                <p class="flex antialiased text-sm leading-normal text-green-700 font-medium">
                                    {{ $penyuluhanTernak->validasi }}</p>
                            </div>
                        @elseif($penyuluhanTernak->validasi == 'Ditolak')
                            <div class="flex flex-col items-center justify-center bg-red-300 rounded-lg p-2 w-36">
                                <p class="flex antialiased text-sm leading-normal text-red-700 font-medium">
                                    {{ $penyuluhanTernak->validasi }}</p>
                            </div>
                        @else
                            <div class="flex flex-col items-center justify-center bg-yellow-300 rounded-lg p-2 w-36">
                                <p class="flex antialiased text-sm leading-normal text-yellow-700 font-medium">
                                    {{ $penyuluhanTernak->validasi }}</p>
                            </div>
                        @endif
                    </div>
                    <div>
                        <label for="tanggal_penyuluhan" class="flex mb-1 font-medium text-sm text-gray-900">Tanggal
                            Penyuluhan</label>
                        <input type="text" name="tanggal_penyuluhan" id="tanggal_penyuluhan"
                            placeholder="Belum ada tanggal..." readonly value="{{ $penyuluhanTernak->tanggal_penyuluhan }}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-[#F5682A] focus:border-[#F5682A] flex w-full p-2.5"
                            required="">
                    </div>
                </div>
            </div>
            <div class="px-6">
                <div>
                    <label for="kondisi_ayam" class="flex mb-1 font-medium text-sm text-gray-900">Kondisi Ayam</label>
                    <input type="text" name="kondisi_ayam" id="kondisi_ayam" placeholder="Belum ada penjelasan..."
                        readonly value="{{ $penyuluhanTernak->kondisi_ayam }}"
                        class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-[#F5682A] focus:border-[#F5682A] flex w-full p-2.5"
                        required="">
                </div>
            </div>
            <div class="px-6 mt-4">
                <div>
                    <label for="catatan" class="flex mb-1 font-medium text-sm text-gray-900">Catatan</label>
                    <input type="text" name="catatan" id="catatan" placeholder="Belum ada catatan..." readonly
                        value="{{ $penyuluhanTernak->catatan }}"
                        class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-[#F5682A] focus:border-[#F5682A] flex w-full p-2.5"
                        required="">
                </div>
            </div>
            <div class="flex flex-row items-center justify-center gap-8 w-full mt-4">
                @if (Auth::user()->roles_id == 2)
                    @if ($penyuluhanTernak->validasi == 'Diterima')
                        <a href="{{ route('edit.penyuluhan', $penyuluhanTernak->id) }}"
                            class="items-center justify-center w-full button bg-blue-500 flex hover:cursor-pointer hover:bg-blue-700 text-white font-medium py-2 px-4 rounded">Ubah</a>
                    @else
                    @endif
                    <button id="deleteButton" data-modal-target="deleteModal" data-modal-toggle="deleteModal"
                        class="items-center justify-center w-full button bg-red-500 flex hover:cursor-pointer hover:bg-red-700 text-white font-medium py-2 px-4 rounded"
                        type="button">Hapus</button>
                    <div id="deleteModal" tabindex="-1" aria-hidden="true"
                        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-modal md:h-full">
                        <div class="relative p-4 w-full max-w-md h-full md:h-auto">
                            <div class="relative p-4 text-center bg-white rounded-lg sm:p-5">
                                <p class="mb-4 text-gray-900">Yakin Ingin Menghapus Pengajuan?</p>
                                <div class="flex justify-center items-center space-x-4">
                                    <button data-modal-toggle="deleteModal" type="button"
                                        class="py-2 px-3 text-sm font-medium text-white bg-blue-500 rounded hover:bg-blue-700">
                                        Tidak
                                    </button>
                                    <form id='delete' method="POST"
                                        action="{{ route('destroy.penyuluhan', $penyuluhanTernak->id) }}">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                            class="py-2 px-3 text-sm font-medium text-center text-white bg-red-500 rounded hover:bg-red-700">
                                            Iya
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                @elseif(Auth::user()->roles_id == 3)
                    <a href="{{ route('view.validpenyuluhan', $penyuluhanTernak->id) }}"
                        class="mt-4 items-center justify-center w-full button bg-green-500 flex hover:cursor-pointer hover:bg-green-700 text-white font-medium py-2 px-4 rounded">Validasi</a>
                @else
                @endif
            </div>
        </div>
    </div>
    <script>
        document.addEventListener("DOMContentLoaded", function(event) {
            document.getElementById('deleteButton').click();
        });
    </script>
@endsection
