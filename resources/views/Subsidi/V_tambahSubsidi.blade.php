@extends('Layout.navbarDashboard')
@section('title', '| Tambah Subsidi')
@section('content')
    <div class="w-full bg-white rounded-lg shadow md:mt-0 xl:p-0">
        <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
            <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl text-center">
                Tambahkan Pengajuan Pakan Subsidi
            </h1>
            <form class="space-y-4 md:space-y-6" action="/addSubsidi" method="POST" enctype="multipart/form-data" novalidate>
                @csrf
                <div>
                    <label for="surat_pengantar" class="block mb-2 text-sm font-medium text-gray-900">Surat
                        Pengantar</label>
                    <input type="file" name="surat_pengantar" id="surat_pengantar" required="">
                    @error('surat_pengantar')
                        <p class="text-red-500 text-sm font-bold py-2 capitalize" role="alert">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <label for="surat_usaha" class="block mb-2 text-sm font-medium text-gray-900">Surat
                        Usaha</label>
                    <input type="file" name="surat_usaha" id="surat_usaha" required="">
                    @error('surat_usaha')
                        <p class="text-red-500 text-sm font-bold py-2 capitalize" role="alert">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <label for="jumlah_ternak" class="block mb-2 text-sm font-medium text-gray-900">Jumlah
                        Ternak (Ekor)</label>
                    <input type="number" name="jumlah_ternak" id="jumlah_ternak" placeholder="Jumlah Ternak"
                        class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-[#F5682A] focus:border-[#F5682A] block w-64 p-2.5 remove-arrow"
                        required="">
                    @error('jumlah_ternak')
                        <p class="text-red-500 text-sm font-bold py-2 capitalize" role="alert">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <label for="jumlah_pakan" class="block mb-2 text-sm font-medium text-gray-900">Ajuan Pakan
                        (Kwintal)</label>
                    <input type="number" name="jumlah_pakan" id="jumlah_pakan" placeholder="Ajuan Pakan (Kwintal)"
                        class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-[#F5682A] focus:border-[#F5682A] block w-64 p-2.5 remove-arrow"
                        required="">
                    @error('jumlah_pakan')
                        <p class="text-red-500 text-sm font-bold py-2 capitalize" role="alert">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <label for="foto_peternakan" class="block mb-2 text-sm font-medium text-gray-900">Foto
                        Peternakan</label>
                    <input type="file" name="foto_peternakan" id="foto_peternakan" required="">
                    @error('foto_peternakan')
                        <p class="text-red-500 text-sm font-bold py-2 capitalize" role="alert">{{ $message }}</p>
                    @enderror
                </div>
                <button type="submit"
                    class="items-center justify-center w-full bg-green-500 hover:bg-green-700 flex hover:cursor-pointer text-white font-medium py-2 px-4 rounded">Tambahkan</button>
            </form>
        </div>
    </div>
@endsection
