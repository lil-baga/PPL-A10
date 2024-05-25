@extends('Layout.Sidebar')
@section('title', '| Validasi Subsidi')
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
                    Validasi Pengajuan Pakan Subsidi
                </h1>
                <form class="flex flex-col space-y-12 justify-center items-center"
                    action="{{ route('validasi.subsidi', Crypt::encryptString($subsidiPakan->id)) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div>
                        <label for="tanggal_pengambilan" class="block mb-2 text-sm font-medium text-gray-900">Tanggal
                            Pengambilan</label>
                        <div
                            class="overflow-hidden rounded-lg w-96 border border-gray-300 focus-within:border-[#F5682A] focus-within:ring-1 focus-within:ring-[#F5682A]">
                            <input type="datetime-local" id="tanggal_pengambilan" name="tanggal_pengambilan"
                                class="p-2 w-96 resize-none border-none align-top focus:ring-0 sm:text-sm" rows="4"
                                placeholder="Berikan Tanggal Pengambilan..." min="{{ now()->translatedFormat('Y-m-d H:i') }}"
                                value="{{ $subsidiPakan->tanggal_pengambilan }}">
                        </div>
                    </div>
                    <div>
                        <label for="catatan" class="flex mb-1 font-medium text-sm text-slate-900">Catatan</label>
                        <div
                            class="overflow-hidden rounded-lg w-96 h-64 border border-gray-300 focus-within:border-[#F5682A] focus-within:ring-1 focus-within:ring-[#F5682A]">
                            <textarea id="catatan" name="catatan"
                                class="p-2 w-full h-full resize-none border-none align-top focus:ring-0 sm:text-sm"
                                placeholder="Belum Ada Catatan...">{{ $subsidiPakan->catatan }}</textarea>
                        </div>
                        @error('catatan')
                            <p class="text-red-500 text-sm font-medium py-2 capitalize" role="alert">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="flex flex-row gap-10">
                        <div class="flex flex-row items-center justify-center gap-6">
                            <div class="flex flex-col items-center justify-center">
                                <label for="Sudah" class="block mb-2 text-sm font-medium text-gray-900">Diterima</label>
                                <input type="radio" name="validasi_id" id="Sudah" value=1
                                    @if ($subsidiPakan->validasi_id == 1) checked @endif
                                    onclick="if(this.checked) {Belum.checked=false;} {Proses.checked=false;}"
                                    class="bg-gray-50 border border-gray-500 text-gray-900 sm:text-sm rounded-lg focus:ring-[#F5682A] focus:border-[#F5682A] block p-2.5">
                            </div>
                            <div class="flex flex-col items-center justify-center">
                                <label for="Proses" class="block mb-2 text-sm font-medium text-gray-900">Diproses</label>
                                <input type="radio" name="validasi_id" id="Proses" value=2
                                    @if ($subsidiPakan->validasi_id == 2) checked @endif
                                    onclick="if(this.checked) {Sudah.checked=false;} {Belum.checked=false;}"
                                    class="bg-gray-50 border border-gray-500 text-gray-900 sm:text-sm rounded-lg focus:ring-[#F5682A] focus:border-[#F5682A] block p-2.5">
                            </div>
                            <div class="flex flex-col items-center justify-center">
                                <label for="Belum" class="block mb-2 text-sm font-medium text-gray-900">Ditolak</label>
                                <input type="radio" name="validasi_id" id="Belum" value=3
                                    @if ($subsidiPakan->validasi_id == 3) checked @endif
                                    onclick="if(this.checked) {Sudah.checked=false;} {Proses.checked=false;}"
                                    class="bg-gray-50 border border-gray-500 text-gray-900 sm:text-sm rounded-lg focus:ring-[#F5682A] focus:border-[#F5682A] block p-2.5">
                            </div>
                        </div>
                    </div>
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
