@extends('Layout.Sidebar')
@section('title', '| Tambah Penyuluhan')
@section('content')
    <div class="w-full bg-white border-l-4 border-gray-200">
        <div class="px-6 py-4">
            <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl text-center">
                Tambahkan Pengajuan Penyuluhan Ternak
            </h1>
            <form class="space-y-4 md:space-y-6" action="/tambahPenyuluhan" method="POST" enctype="multipart/form-data" novalidate>
                @csrf
                <div>
                    <label for="surat_pengantar" class="block mb-2 text-sm font-medium text-gray-900">Surat
                        Pengantar</label>
                    <input type="file" name="surat_pengantar" id="surat_pengantar" required="">
                    @error('surat_pengantar')
                        <p class="text-red-500 text-sm font-medium py-2 capitalize" role="alert">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <label for="suhu_kandang" class="block mb-2 text-sm font-medium text-gray-900">Suhu
                        Kandang (°C)</label>
                    <input type="number" name="suhu_kandang" id="suhu_kandang" placeholder="Suhu Kandang"
                        class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-[#F5682A] focus:border-[#F5682A] block w-64 p-2.5 remove-arrow"
                        required="">
                    @error('suhu_kandang')
                        <p class="text-red-500 text-sm font-medium py-2 capitalize" role="alert">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <label for="kadar_air" class="block mb-2 text-sm font-medium text-gray-900">Kadar
                        Air (L)</label>
                    <input type="number" name="kadar_air" id="kadar_air" placeholder="Kadar Air"
                        class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-[#F5682A] focus:border-[#F5682A] block w-64 p-2.5 remove-arrow"
                        required="">
                    @error('kadar_air')
                        <p class="text-red-500 text-sm font-medium py-2 capitalize" role="alert">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <label for="kadar_pakan" class="block mb-2 text-sm font-medium text-gray-900">Kadar Pakan
                        (Kg)</label>
                    <input type="number" name="kadar_pakan" id="kadar_pakan" placeholder="Kadar Pakan"
                        class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-[#F5682A] focus:border-[#F5682A] block w-64 p-2.5 remove-arrow"
                        required="">
                    @error('kadar_pakan')
                        <p class="text-red-500 text-sm font-medium py-2 capitalize" role="alert">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <label for="kondisi_ayam" class="block mb-2 text-sm font-medium text-gray-900">Kondisi Ayam</label>
                    <div
                    class="overflow-hidden rounded-lg w-1/2 h-64 border border-gray-300 focus-within:border-[#F5682A] focus-within:ring-1 focus-within:ring-[#F5682A]">
                        <textarea id="kondisi_ayam" name="kondisi_ayam" class="p-2 w-full h-full resize-none border-none align-top focus:ring-0 sm:text-sm" placeholder="Tuliskan Isi Kondisi Ayam Anda..."></textarea>
                    </div>
                    @error('kondisi_ayam')
                    <p class="text-red-500 text-sm font-medium py-2 capitalize" role="alert">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <label for="foto_ayam" class="block mb-2 text-sm font-medium text-gray-900">Foto
                        Ayam</label>
                    <input type="file" name="foto_ayam" id="foto_ayam" required="">
                    @error('foto_ayam')
                        <p class="text-red-500 text-sm font-medium py-2 capitalize" role="alert">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <label for="foto_peternakan" class="block mb-2 text-sm font-medium text-gray-900">Foto
                        Peternakan</label>
                    <input type="file" name="foto_peternakan" id="foto_peternakan" required="">
                    @error('foto_peternakan')
                        <p class="text-red-500 text-sm font-medium py-2 capitalize" role="alert">{{ $message }}</p>
                    @enderror
                </div>
                <button type="submit"
                    class="items-center justify-center w-full bg-green-500 hover:bg-green-700 flex hover:cursor-pointer text-white font-medium py-2 px-4 rounded">Tambahkan</button>
            </form>
        </div>
    </div>
@endsection
