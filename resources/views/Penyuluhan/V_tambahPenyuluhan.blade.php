@extends('Layout.Sidebar')
@section('title', '| Tambah Penyuluhan')
@section('content')
    <div class="w-full bg-slate-200 scrollbar">
        <div class="px-16 py-16">
            <div class=" px-8 py-8 shadow-xl bg-white rounded-lg">
                <div class="flex flex-row">
                    <a href="/penyuluhanTernak"
                        class="button absolute hover:bg-slate-200 hover:rounded-lg content-center w-auto h-auto p-1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <path fill="currentColor"
                                d="M21 11H6.414l5.293-5.293l-1.414-1.414L2.586 12l7.707 7.707l1.414-1.414L6.414 13H21z" />
                        </svg>
                    </a>
                </div>
                <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl text-center">
                    Tambahkan Pengajuan Penyuluhan Ternak
                </h1>
                <form class="flex flex-col space-y-12 justify-center items-center" action="/tambahPenyuluhan" method="POST"
                    enctype="multipart/form-data" novalidate>
                    @csrf
                    <div class="flex flex-row justify-center w-full gap-8">
                        <div class="w-64">
                            <label for="surat_pengantar" class="block mb-2 text-sm font-medium text-slate-900">Surat
                                Pengantar</label>
                            <input class="w-64" type="file" name="surat_pengantar" id="surat_pengantar" required="">
                            @error('surat_pengantar')
                                <p class="text-red-500 text-sm font-medium py-2 capitalize" role="alert">{{ $message }}
                                </p>
                            @enderror
                        </div>
                        <div class="w-64">
                            <label for="surat_usaha" class="block mb-2 text-sm font-medium text-slate-900">Surat
                                Usaha</label>
                            <input class="w-64" type="file" name="surat_usaha" id="surat_usaha" required="">
                            @error('surat_usaha')
                                <p class="text-red-500 text-sm font-medium py-2 capitalize" role="alert">{{ $message }}
                                </p>
                            @enderror
                        </div>
                    </div>
                    <div class="flex flex-row justify-center w-full gap-8">
                        <div>
                            <label for="suhu_kandang" class="block mb-2 text-sm font-medium text-gray-900">Suhu
                                Kandang (°C)</label>
                            <input type="number" name="suhu_kandang" id="suhu_kandang" placeholder="Suhu Kandang (°C)"
                                class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-[#F5682A] focus:border-[#F5682A] block w-64 p-2.5 remove-arrow"
                                required="">
                            @error('suhu_kandang')
                                <p class="text-red-500 text-sm font-medium py-2 capitalize" role="alert">{{ $message }}
                                </p>
                            @enderror
                        </div>
                        <div>
                            <label for="kadar_air" class="block mb-2 text-sm font-medium text-gray-900">Kadar
                                Air (Liter)</label>
                            <input type="number" name="kadar_air" id="kadar_air" placeholder="Kadar Air (Liter)"
                                class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-[#F5682A] focus:border-[#F5682A] block w-64 p-2.5 remove-arrow"
                                required="">
                            @error('kadar_air')
                                <p class="text-red-500 text-sm font-medium py-2 capitalize" role="alert">{{ $message }}
                                </p>
                            @enderror
                        </div>
                        <div>
                            <label for="kadar_pakan" class="block mb-2 text-sm font-medium text-gray-900">Kadar Pakan
                                (Kg)</label>
                            <input type="number" name="kadar_pakan" id="kadar_pakan" placeholder="Kadar Pakan (Kg)"
                                class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-[#F5682A] focus:border-[#F5682A] block w-64 p-2.5 remove-arrow"
                                required="">
                            @error('kadar_pakan')
                                <p class="text-red-500 text-sm font-medium py-2 capitalize" role="alert">{{ $message }}
                                </p>
                            @enderror
                        </div>
                    </div>
                    <div class="flex flex-row justify-center w-full gap-8">
                        <div>
                            <label for="foto_ayam" class="block mb-2 text-sm font-medium text-gray-900">Foto
                                Ayam</label>
                            <input class="w-64" type="file" name="foto_ayam" id="foto_ayam" required="">
                            @error('foto_ayam')
                                <p class="text-red-500 text-sm font-medium py-2 capitalize" role="alert">{{ $message }}
                                </p>
                            @enderror
                        </div>
                        <div>
                            <label for="kondisi_ayam" class="block mb-2 text-sm font-medium text-gray-900">Kondisi
                                Ayam</label>
                            <div
                                class="overflow-hidden rounded-lg w-96 h-64 border border-gray-300 focus-within:border-[#F5682A] focus-within:ring-1 focus-within:ring-[#F5682A]">
                                <textarea id="kondisi_ayam" name="kondisi_ayam"
                                    class="p-2 w-full h-full resize-none border-none align-top focus:ring-0 sm:text-sm"
                                    placeholder="Tuliskan Isi Kondisi Ayam Anda..."></textarea>
                            </div>
                            @error('kondisi_ayam')
                                <p class="text-red-500 text-sm font-medium py-2 capitalize" role="alert">{{ $message }}
                                </p>
                            @enderror
                        </div>
                        <div>
                            <label for="foto_peternakan" class="block mb-2 text-sm font-medium text-gray-900">Foto
                                Peternakan</label>
                            <input class="w-64" type="file" name="foto_peternakan" id="foto_peternakan" required="">
                            @error('foto_peternakan')
                                <p class="text-red-500 text-sm font-medium py-2 capitalize" role="alert">{{ $message }}
                                </p>
                            @enderror
                        </div>
                    </div>
                    <button type="submit"
                        class="items-center justify-center w-full bg-green-500 hover:bg-green-700 flex hover:cursor-pointer text-white font-medium py-2 px-4 rounded">Tambahkan</button>
                </form>
            </div>
        </div>
    </div>
@endsection
