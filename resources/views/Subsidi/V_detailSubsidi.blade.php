@extends('Layout.navbarDashboard')
@section('title', '| Detail Subsidi')
@section('content')
    <div class="w-full bg-white rounded-lg md:mt-0 xl:p-0">
        <div class="px-6 py-4">
            <h1 class="text-2xl font-bold text-gray-900 text-center">
                Detail Pengajuan Pakan Subsidi
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
                                href="{{ url("foto_surat/$subsidiPakan->surat_pengantar") }}" target="_blank"
                                class="hover:text-[#F5682A]">{{ $subsidiPakan->surat_pengantar }}</a></p>
                    </div>
                    <div>
                        <label for="jumlah_ternak" class="flex mb-1 font-medium text-sm text-gray-900">Jumlah
                            Ternak</label>
                        <input type="text" name="jumlah_ternak" id="jumlah_ternak" placeholder="Jumlah Ternak" readonly
                            value="{{ $subsidiPakan->jumlah_ternak }}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-[#F5682A] focus:border-[#F5682A] flex w-full p-2.5"
                            required="">
                    </div>
                    <div>
                        <p class="flex font-medium text-sm text-gray-900">Foto Peternakan:</p>
                        <p class="flex mb-1 font-medium text-sm text-gray-900"><a
                                href="{{ url("foto_peternak/$subsidiPakan->foto_peternakan") }}" target="_blank"
                                class="hover:text-[#F5682A]">{{ $subsidiPakan->foto_peternakan }}</a></p>
                    </div>
                    <div>
                        <p class="flex font-medium text-sm text-gray-900">Foto Pakan Subsidi Yang Diterima:</p>
                        <p class="flex mb-1 font-medium text-sm text-gray-900"><a
                                href="{{ url("foto_peternak/$subsidiPakan->foto_konfirmasi") }}" target="_blank"
                                class="hover:text-[#F5682A]">{{ $subsidiPakan->foto_konfirmasi }}</a></p>
                    </div>
                </div>
                <div class="flex flex-col items-start justify-inline-start max-w-[512px] gap-8">
                    <div>
                        <p class="flex font-medium text-sm text-gray-900">Surat Usaha:
                        <p class="flex mb-1 font-medium text-sm text-gray-900"><a
                                href="{{ url("foto_surat/$subsidiPakan->surat_usaha") }}" target="_blank"
                                class="hover:text-[#F5682A]">{{ $subsidiPakan->surat_usaha }}</a></p>
                    </div>
                    <div>
                        <label for="jumlah_pakan" class="flex mb-1 font-medium text-sm text-gray-900">Ajuan Pakan
                            (Kwintal)</label>
                        <input type="text" name="jumlah_pakan" id="jumlah_pakan" placeholder="Ajuan Pakan (Kwintal)"
                            readonly value="{{ $subsidiPakan->jumlah_pakan }}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-[#F5682A] focus:border-[#F5682A] flex w-full p-2.5"
                            required="">
                    </div>
                    <div>
                        <p class="flex font-medium text-sm text-gray-900">Status Validasi</p>
                        @if ($subsidiPakan->validasi == 'Diterima')
                            <div class="flex flex-col items-center justify-center bg-green-300 rounded-lg p-2 w-36">
                                <p class="flex antialiased text-sm leading-normal text-green-700 font-medium">
                                    {{ $subsidiPakan->validasi }}</p>
                            </div>
                        @elseif($subsidiPakan->validasi == 'Ditolak')
                            <div class="flex flex-col items-center justify-center bg-red-300 rounded-lg p-2 w-36">
                                <p class="flex antialiased text-sm leading-normal text-red-700 font-medium">
                                    {{ $subsidiPakan->validasi }}</p>
                            </div>
                        @else
                            <div class="flex flex-col items-center justify-center bg-yellow-300 rounded-lg p-2 w-36">
                                <p class="flex antialiased text-sm leading-normal text-yellow-700 font-medium">
                                    {{ $subsidiPakan->validasi }}</p>
                            </div>
                        @endif
                    </div>
                    <div>
                        <p class="flex font-medium text-sm text-gray-900">Status Konfirmasi</p>
                        @if ($subsidiPakan->konfirmasi == 'Sudah Diambil')
                            <div class="flex flex-col items-center justify-center bg-green-300 rounded-lg p-2 w-36">
                                <p class="flex antialiased text-sm leading-normal text-green-700 font-medium">
                                    {{ $subsidiPakan->konfirmasi }}</p>
                            </div>
                        @elseif($subsidiPakan->konfirmasi == 'Belum Diambil')
                            <div class="flex flex-col items-center justify-center bg-red-300 rounded-lg p-2 w-36">
                                <p class="flex antialiased text-sm leading-normal text-red-700 font-medium">
                                    {{ $subsidiPakan->konfirmasi }}</p>
                            </div>
                        @else
                            <div class="flex flex-col items-center justify-center bg-yellow-300 rounded-lg p-2 w-36">
                                <p class="flex antialiased text-sm leading-normal text-yellow-700 font-medium">
                                    {{ $subsidiPakan->konfirmasi }}</p>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
            <div class="px-6 -mt-12">
                <div>
                    <label for="catatan" class="flex mb-1 font-medium text-sm text-gray-900">Catatan</label>
                    <input type="text" name="catatan" id="catatan" placeholder="Belum ada catatan..." readonly
                        value="{{ $subsidiPakan->catatan }}"
                        class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-[#F5682A] focus:border-[#F5682A] flex w-full p-2.5"
                        required="">
                </div>
            </div>
            <div class="flex flex-row items-center justify-center gap-8 w-full">
                @if (Auth::user()->roles_id == 2)
                    @if ($subsidiPakan->validasi == 'Diterima')
                        <a href="{{ route('edit.subsidi', $subsidiPakan->id) }}"
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
                                        action="{{ route('destroy.subsidi', $subsidiPakan->id) }}">
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
                    <a href="{{ route('view.validsubsidi', $subsidiPakan->id) }}"
                        class="items-center justify-center w-full button bg-green-500 flex hover:cursor-pointer hover:bg-green-700 text-white font-medium py-2 px-4 rounded">Validasi</a>
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
