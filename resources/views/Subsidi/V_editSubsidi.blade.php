@extends('Layout.navbarDashboard')
@section('title', '| Edit Subsidi')
@section('content')
    <div class="w-full bg-white border-l-4 border-gray-200">
        <div class="px-6 py-4">
            <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl text-center">
                Ubah Pengajuan Pakan Subsidi
            </h1>
            <form class="space-y-4 md:space-y-6" action="{{ route('update.subsidi', $subsidiPakan->id) }}" method="POST"
                enctype="multipart/form-data" novalidate>
                @csrf
                @method('PUT')
                <div>
                    <label for="covering" class="block mb-2 text-sm font-medium text-gray-900">Surat
                        Pengantar</label>
                    <input type="file" name="surat_pengantar" id="surat_pengantar"
                        value="{{ $subsidiPakan->surat_pengantar }}">
                </div>
                <div>
                    <label for="business" class="block mb-2 text-sm font-medium text-gray-900">Surat Usaha</label>
                    <input type="file" name="surat_usaha" id="surat_usaha"
                        value="{{ $subsidiPakan->surat_usaha }}">
                </div>
                <div>
                    <label for="jumlah_ternak" class="block mb-2 text-sm font-medium text-gray-900">Jumlah
                        Ternak (Ekor)</label>
                    <input type="number" name="jumlah_ternak" id="jumlah_ternak"
                        value="{{ $subsidiPakan->jumlah_ternak }}" placeholder="Jumlah Ternak"
                        class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-[#F5682A] focus:border-[#F5682A] block w-64 p-2.5 remove-arrow"
                        required="">
                    @error('jumlah_ternak')
                        <p class="text-red-500 text-sm font-medium py-2 capitalize" role="alert">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <label for="jumlah_pakan" class="block mb-2 text-sm font-medium text-gray-900">Ajuan Pakan
                        (Kwintal)</label>
                    <input type="number" name="jumlah_pakan" id="jumlah_pakan"
                        value="{{ $subsidiPakan->jumlah_pakan }}" placeholder="Ajuan Pakan (Kwintal)"
                        class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-[#F5682A] focus:border-[#F5682A] block w-64 p-2.5 remove-arrow"
                        required="">
                    @error('jumlah_pakan')
                        <p class="text-red-500 text-sm font-medium py-2 capitalize" role="alert">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <label for="foto_peternakan" class="block mb-2 text-sm font-medium text-gray-900">Foto
                        Peternakan</label>
                    <input type="file" name="foto_peternakan" id="foto_peternakan"
                        value="{{ $subsidiPakan->foto_peternakan }}">
                </div>
                <div>
                    <label for="foto_konfirmasi" class="block mb-2 text-sm font-medium text-gray-900">Foto Pakan
                        Subsidi Yang Diterima</label>
                    <input type="file" name="foto_konfirmasi" id="foto_konfirmasi"
                        value="{{ $subsidiPakan->foto_konfirmasi }}">
                </div>
                <div class="flex flex-row gap-10">
                    <div class="flex flex-row items-center justify-center gap-6">
                        <div class="flex flex-col items-center justify-center">
                            <label for="Sudah" class="block mb-2 text-sm font-medium text-gray-900">Sudah
                                Diambil</label>
                            <input type="radio" name="konfirmasi" id="Sudah" value="Sudah Diambil"
                                @if ($subsidiPakan->konfirmasi == 'Sudah Diambil') checked @endif
                                onclick="if(this.checked) {Belum.checked=false;} {Proses.checked=false;}"
                                class="bg-gray-50 border border-gray-500 text-gray-900 sm:text-sm rounded-lg focus:ring-[#F5682A] focus:border-[#F5682A] block p-2.5">
                        </div>
                        <div class="flex flex-col items-center justify-center">
                            <label for="Proses" class="block mb-2 text-sm font-medium text-gray-900"> Proses
                                Validasi</label>
                            <input type="radio" name="konfirmasi" id="Proses" value="Proses Validasi"
                                @if ($subsidiPakan->konfirmasi == 'Proses Validasi') checked @endif
                                onclick="if(this.checked) {Sudah.checked=false;} {Belum.checked=false;}"
                                class="bg-gray-50 border border-gray-500 text-gray-900 sm:text-sm rounded-lg focus:ring-[#F5682A] focus:border-[#F5682A] block p-2.5">
                        </div>
                        <div class="flex flex-col items-center justify-center">
                            <label for="Belum" class="block mb-2 text-sm font-medium text-gray-900"> Belum
                                Diambil</label>
                            <input type="radio" name="konfirmasi" id="Belum" value="Belum Diambil"
                                @if ($subsidiPakan->konfirmasi == 'Belum Diambil') checked @endif
                                onclick="if(this.checked) {Sudah.checked=false;} {Proses.checked=false;}"
                                class="bg-gray-50 border border-gray-500 text-gray-900 sm:text-sm rounded-lg focus:ring-[#F5682A] focus:border-[#F5682A] block p-2.5">
                        </div>
                    </div>
                </div>
                <button type="submit"
                    class="items-center justify-center w-full bg-blue-500 hover:bg-blue-700 flex hover:cursor-pointer text-white font-medium py-2 px-4 rounded">Simpan
                    Perubahan</button>
            </form>
        </div>
    </div>
@endsection
