@extends('Layout.Sidebar')
@section('title', '| Edit Subsidi')
@section('content')
    <div class="w-full bg-slate-200 scrollbar">
        <div class="px-16 py-16">
            <div class=" px-8 py-8 shadow-xl bg-white rounded-lg">
                <div class="flex flex-row">
                    <a href="{{ route('detail.subsidi', Crypt::encryptString($subsidiPakan->id)) }}"
                        class="button absolute hover:bg-slate-200 hover:rounded-lg content-center w-auto h-auto p-1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <path fill="currentColor"
                                d="M21 11H6.414l5.293-5.293l-1.414-1.414L2.586 12l7.707 7.707l1.414-1.414L6.414 13H21z" />
                        </svg>
                    </a>
                </div>
                <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl text-center">
                    Ubah Pengajuan Pakan Subsidi
                </h1>
                <form class="flex flex-col space-y-12 justify-center items-center"
                    action="{{ route('update.subsidi', Crypt::encryptString($subsidiPakan->id)) }}" method="POST" enctype="multipart/form-data"
                    novalidate>
                    @csrf
                    @method('PUT')
                    @if ($subsidiPakan->validasi_id == 3)
                        <div class="flex flex-row justify-center w-full gap-8">
                            <div class="w-64">
                                <label for="surat_pengantar" class="block mb-2 text-sm font-medium text-slate-900">Surat
                                    Pengantar</label>
                                <input class="w-64" type="file" name="surat_pengantar" id="surat_pengantar" accept="image/png, image/jpeg"
                                    required="" value="{{ $subsidiPakan->surat_pengantar }}">
                                @error('surat_pengantar')
                                    <p class="text-red-500 text-sm font-medium py-2 capitalize" role="alert">
                                        {{ $message }}</p>
                                @enderror
                            </div>
                            <div class="w-64">
                                <label for="surat_usaha" class="block mb-2 text-sm font-medium text-slate-900">Surat
                                    Usaha</label>
                                <input class="w-64" type="file" name="surat_usaha" id="surat_usaha" accept="image/png, image/jpeg" required="" value="{{ $subsidiPakan->surat_usaha }}">
                                @error('surat_usaha')
                                    <p class="text-red-500 text-sm font-medium py-2 capitalize" role="alert">
                                        {{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="flex flex-row justify-center w-full gap-8">
                            <div class="w-64">
                                <label for="jumlah_ternak" class="block mb-2 text-sm font-medium text-slate-900">Jumlah
                                    Ternak (Ekor)</label>
                                <input type="number" name="jumlah_ternak" id="jumlah_ternak" placeholder="Jumlah Ternak"
                                    class="bg-slate-50 border border-slate-300 text-slate-900 sm:text-sm rounded-lg focus:ring-[#F5682A] focus:border-[#F5682A] block w-64 p-2.5 remove-arrow"
                                    required="" value="{{ $subsidiPakan->jumlah_ternak }}">
                                @error('jumlah_ternak')
                                    <p class="text-red-500 text-sm font-medium py-2 capitalize" role="alert">
                                        {{ $message }}</p>
                                @enderror
                            </div>
                            <div class="w-64">
                                <label for="jumlah_pakan" class="block mb-2 text-sm font-medium text-slate-900">Ajuan Pakan
                                    (Kwintal)</label>
                                <input type="number" name="jumlah_pakan" id="jumlah_pakan" placeholder="Ajuan Pakan"
                                    class="bg-slate-50 border border-slate-300 text-slate-900 sm:text-sm rounded-lg focus:ring-[#F5682A] focus:border-[#F5682A] block w-64 p-2.5 remove-arrow"
                                    required="" value="{{ $subsidiPakan->jumlah_pakan }}">
                                @error('jumlah_pakan')
                                    <p class="text-red-500 text-sm font-medium py-2 capitalize" role="alert">
                                        {{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="w-64">
                            <label for="foto_peternakan" class="block mb-2 text-sm font-medium text-slate-900">Foto
                                Peternakan</label>
                            <input class="w-64" type="file" name="foto_peternakan" id="foto_peternakan" accept="image/png, image/jpeg" required="" value="{{ $subsidiPakan->foto_peternakan }}">
                            @error('foto_peternakan')
                                <p class="text-red-500 text-sm font-medium py-2 capitalize" role="alert">{{ $message }}
                                </p>
                            @enderror
                        </div>
                        <div class="flex-col items-center w-auto hidden">
                            <div>
                                <label for="foto_konfirmasi" class="block mb-2 text-sm font-medium text-gray-900">Foto Pakan
                                    Subsidi Yang Diterima</label>
                                <input class="w-64" type="file" name="foto_konfirmasi" id="foto_konfirmasi" value="null">
                                @error('foto_konfirmasi')
                                    <p class="text-red-500 text-sm font-medium py-2 capitalize" role="alert">
                                        {{ $message }}
                                    </p>
                                @enderror
                            </div>
                        </div>
                    @elseif ($subsidiPakan->validasi_id == 1)
                        <div class="flex flex-col items-center w-auto">
                            <div>
                                <label for="foto_konfirmasi" class="block mb-2 text-sm font-medium text-gray-900">Foto Pakan
                                    Subsidi Yang Diterima</label>
                                <input class="w-64" type="file" name="foto_konfirmasi" id="foto_konfirmasi" accept="image/png, image/jpeg">
                                @error('foto_konfirmasi')
                                    <p class="text-red-500 text-sm font-medium py-2 capitalize" role="alert">
                                        {{ $message }}
                                    </p>
                                @enderror
                            </div>
                        </div>
                        <div class="flex flex-row gap-10 justify-center">
                            <div class="flex flex-row items-center justify-center gap-6">
                                <div class="flex flex-col items-center justify-center">
                                    <label for="Sudah" class="block mb-2 text-sm font-medium text-gray-900">Sudah
                                        Diterima</label>
                                    <input type="radio" name="konfirmasi_id" id="Sudah" value=1
                                        @if ($subsidiPakan->konfirmasi_id == 1) checked @endif
                                        onclick="if(this.checked) {Belum.checked=false;} {Proses.checked=false;}"
                                        class="bg-gray-50 border border-gray-500 text-gray-900 sm:text-sm rounded-lg focus:ring-[#F5682A] focus:border-[#F5682A] block p-2.5">
                                </div>
                                <div class="flex flex-col items-center justify-center">
                                    <label for="Proses" class="block mb-2 text-sm font-medium text-gray-900"> Proses
                                        Validasi</label>
                                    <input type="radio" name="konfirmasi_id" id="Proses" value=2
                                        @if ($subsidiPakan->konfirmasi_id == 2) checked @endif
                                        onclick="if(this.checked) {Sudah.checked=false;} {Belum.checked=false;}"
                                        class="bg-gray-50 border border-gray-500 text-gray-900 sm:text-sm rounded-lg focus:ring-[#F5682A] focus:border-[#F5682A] block p-2.5">
                                </div>
                                <div class="flex flex-col items-center justify-center">
                                    <label for="Belum" class="block mb-2 text-sm font-medium text-gray-900"> Belum
                                        Diterima</label>
                                    <input type="radio" name="konfirmasi_id" id="Belum" value=3
                                        @if ($subsidiPakan->konfirmasi_id == 3) checked @endif
                                        onclick="if(this.checked) {Sudah.checked=false;} {Proses.checked=false;}"
                                        class="bg-gray-50 border border-gray-500 text-gray-900 sm:text-sm rounded-lg focus:ring-[#F5682A] focus:border-[#F5682A] block p-2.5">
                                </div>
                            </div>
                        </div>
                        <div class="hidden">
                            <input type="number" name="jumlah_ternak" id="jumlah_ternak"
                                value="{{ $subsidiPakan->jumlah_ternak }}" placeholder="Jumlah Ternak"
                                class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-[#F5682A] focus:border-[#F5682A] block w-64 p-2.5 remove-arrow"
                                required="">
                            <input type="number" name="jumlah_pakan" id="jumlah_pakan"
                                value="{{ $subsidiPakan->jumlah_pakan }}" placeholder="Ajuan Pakan (Kwintal)"
                                class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-[#F5682A] focus:border-[#F5682A] block w-64 p-2.5 remove-arrow"
                                required="">
                                <div class="flex flex-col items-center justify-center">
                                    <label for="Sudah" class="block mb-2 text-sm font-medium text-gray-900">Diterima</label>
                                    <input type="radio" name="validasi_id" id="Sudah" value="{{ $subsidiPakan->validasi_id }}"
                                        @if ($subsidiPakan->validasi_id == 1) checked @endif
                                        onclick="if(this.checked) {Belum.checked=false;} {Proses.checked=false;}"
                                        class="bg-gray-50 border border-gray-500 text-gray-900 sm:text-sm rounded-lg focus:ring-[#F5682A] focus:border-[#F5682A] block p-2.5">
                                </div>
                        </div>
                    @else
                        <h1>Pengajuan Anda Masih Diproses...</h1>
                    @endif
                    <div class="flex justify-center items-center">
                        <button type="submit"
                            class="text-center items-center justify-center w-auto bg-green-500 hover:bg-green-700 flex hover:cursor-pointer text-white font-medium py-2 px-4 rounded gap-2">Simpan
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
                                <path fill="currentColor"
                                    d="M19 3h-2.25a1 1 0 0 0-1-1h-7.5a1 1 0 0 0-1 1H5c-1.103 0-2 .897-2 2v15c0 1.103.897 2 2 2h14c1.103 0 2-.897 2-2V5c0-1.103-.897-2-2-2zm0 17H5V5h2v2h10V5h2v15z" />
                            </svg></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
