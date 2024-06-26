@extends('Layout.Sidebar')
@section('title', '| Tambah Subsidi')
@section('content')
    <div class="w-full bg-slate-200 scrollbar">
        <div class="px-12 py-12">
            <div class=" px-6 py-6 shadow-xl bg-white rounded-lg">
                <div class="flex flex-row">
                    <a href="/subsidiPakan"
                        class="button absolute hover:bg-slate-200 hover:rounded-lg content-center w-auto h-auto p-1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <path fill="currentColor"
                                d="M21 11H6.414l5.293-5.293l-1.414-1.414L2.586 12l7.707 7.707l1.414-1.414L6.414 13H21z" />
                        </svg>
                    </a>
                </div>
                <h1 class="text-xl font-bold leading-tight tracking-tight text-slate-900 md:text-2xl text-center">
                    Tambahkan Pengajuan Pakan Subsidi
                </h1>
                <form class="flex flex-col space-y-12 justify-center items-center" action="/tambahSubsidi" method="POST"
                    enctype="multipart/form-data" novalidate>
                    @csrf
                    <div class="flex flex-row justify-center w-full gap-8">
                        <div class="w-64">
                            <label for="surat_pengantar" class="block mb-2 text-sm font-medium text-slate-900">Surat
                                Pengantar</label>
                            <input class="w-64" type="file" name="surat_pengantar" id="surat_pengantar" accept="image/png, image/jpeg" required="">
                            @error('surat_pengantar')
                                <p class="text-red-500 text-sm font-medium py-2 capitalize" role="alert">{{ $message }}
                                </p>
                            @enderror
                        </div>
                        <div class="w-64">
                            <label for="surat_usaha" class="block mb-2 text-sm font-medium text-slate-900">Surat
                                Usaha</label>
                            <input class="w-64" type="file" name="surat_usaha" id="surat_usaha" accept="image/png, image/jpeg" required="">
                            @error('surat_usaha')
                                <p class="text-red-500 text-sm font-medium py-2 capitalize" role="alert">{{ $message }}
                                </p>
                            @enderror
                        </div>
                    </div>
                    <div class="flex flex-row justify-center w-full gap-8">
                        <div class="w-64">
                            <label for="jumlah_ternak" class="block mb-2 text-sm font-medium text-slate-900">Jumlah
                                Ternak (Ekor)</label>
                            <input type="number" name="jumlah_ternak" id="jumlah_ternak" placeholder="Jumlah Ternak"
                                class="bg-slate-50 border border-slate-300 text-slate-900 sm:text-sm rounded-lg focus:ring-[#F5682A] focus:border-[#F5682A] block w-64 p-2.5 remove-arrow"
                                required="">
                            @error('jumlah_ternak')
                                <p class="text-red-500 text-sm font-medium py-2 capitalize" role="alert">{{ $message }}
                                </p>
                            @enderror
                        </div>
                        <div class="w-64">
                            <label for="jumlah_pakan" class="block mb-2 text-sm font-medium text-slate-900">Ajuan Pakan
                                (Kwintal)</label>
                            <input type="number" name="jumlah_pakan" id="jumlah_pakan" placeholder="Ajuan Pakan"
                                class="bg-slate-50 border border-slate-300 text-slate-900 sm:text-sm rounded-lg focus:ring-[#F5682A] focus:border-[#F5682A] block w-64 p-2.5 remove-arrow"
                                required="">
                            @error('jumlah_pakan')
                                <p class="text-red-500 text-sm font-medium py-2 capitalize" role="alert">{{ $message }}
                                </p>
                            @enderror
                        </div>
                    </div>
                    <div class="w-64">
                        <label for="foto_peternakan" class="block mb-2 text-sm font-medium text-slate-900">Foto
                            Peternakan</label>
                        <input class="w-64" type="file" name="foto_peternakan" id="foto_peternakan" accept="image/png, image/jpeg" required="">
                        @error('foto_peternakan')
                            <p class="text-red-500 text-sm font-medium py-2 capitalize" role="alert">{{ $message }}</p>
                        @enderror
                    </div>
                    <button type="submit"
                        class="text-center items-center justify-center w-auto bg-green-500 hover:bg-green-700 flex hover:cursor-pointer text-white font-medium py-2 px-4 rounded gap-2">Tambahkan
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
                            <path fill="currentColor"
                                d="m21.706 5.292l-2.999-2.999A.996.996 0 0 0 18 2H6a.996.996 0 0 0-.707.293L2.294 5.292A.994.994 0 0 0 2 6v13c0 1.103.897 2 2 2h16c1.103 0 2-.897 2-2V6a.994.994 0 0 0-.294-.708zM6.414 4h11.172l1 1H5.414l1-1zM4 19V7h16l.002 12H4z" />
                            <path fill="currentColor" d="M14 9h-4v3H7l5 5l5-5h-3z" />
                        </svg>
                    </button>
                </form>
            </div>
        </div>
    </div>
@endsection
