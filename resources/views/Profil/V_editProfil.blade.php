@extends('Layout.navbarDashboard')
@section('title', '| Edit Profil')
@section('content')
    <div class="w-full bg-white rounded-lg shadow md:mt-0 xl:p-0">
        <div class="p-6 space-y-4">
            <h1 class="text-2xl font-bold text-gray-900 text-center">
                Edit Profil
            </h1>
            <form class="space-y-4 md:space-y-6" action="{{ route('update.profil', $currentuser->id) }}" method="POST"
                enctype="multipart/form-data" novalidate>
                @csrf
                @method('PUT')
                <div>
                    <label for="nama" class="block mb-2 text-sm font-medium text-gray-900">Nama Lengkap</label>
                    <input type="text" name="nama" id="nama" placeholder="Nama Lengkap" value="{{ $currentuser->nama }}"
                        class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-[#F5682A] focus:border-[#F5682A] block w-full p-2.5 peer"
                        required="">
                    @error('nama')
                        <p class="text-red-500 text-sm font-bold py-2 capitalize" role="alert">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Email</label>
                    <input type="email" name="email" id="email" placeholder="namaemail@gmail.com"
                        value="{{ $currentuser->email }}"
                        class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-[#F5682A] focus:border-[#F5682A] block w-full p-2.5"
                        required="">
                    @error('email')
                        <p class="text-red-500 text-sm font-bold py-2 capitalize" role="alert">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <label for="alamat" class="block mb-2 text-sm font-medium text-gray-900">Alamat</label>
                    <input type="text" name="alamat" id="alamat" placeholder="Alamat Anda"
                        value="{{ $currentuser->alamat }}"
                        class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-[#F5682A] focus:border-[#F5682A] block w-full p-2.5"
                        required="">
                    @error('alamat')
                        <p class="text-red-500 text-sm font-bold py-2 capitalize" role="alert">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <label for="kontak" class="block mb-2 text-sm font-medium text-gray-900">Nomor
                        Telepon</label>
                    <input type="text" name="kontak" id="kontak" placeholder="081xxxxxxxxx"
                        value="{{ $currentuser->kontak }}"
                        class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-[#F5682A] focus:border-[#F5682A] block w-full p-2.5"
                        required="">
                    @error('kontak')
                        <p class="text-red-500 text-sm font-bold py-2 title capitalize" role="alert">{{ $message }}</p>
                    @enderror
                </div>
                <button type="submit"
                    class="items-center justify-center w-full bg-[#F5682A] hover:bg-[#F54C2A] flex hover:cursor-pointer text-white font-medium py-2 px-4 rounded">Simpan</button>
            </form>
        </div>
    </div>
@endsection
