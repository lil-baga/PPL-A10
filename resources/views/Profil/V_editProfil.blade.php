@extends('Layout.navbarDashboard')
@section('title', '| Edit Profil')
@section('content')
    <div class="w-full bg-gradient-to-l from-[#f5743d] to-white">
        <div class="px-16 py-16">
            <div class=" px-8 py-8 shadow-xl bg-white rounded-lg">
                <h1 class="text-2xl font-bold text-gray-900 text-center">
                    Edit Profil
                </h1>
                <form class="flex flex-col space-y-8 justify-center items-center" action="{{ route('update.profil', $currentuser->id) }}" method="POST"
                    enctype="multipart/form-data" novalidate>
                    @csrf
                    @method('PUT')
                    <div class="flex flex-row justify-between w-full gap-8">
                        <div class="w-1/2">
                            <label for="nama" class="block mb-2 text-sm font-medium text-gray-900">Nama Lengkap</label>
                            <input type="text" name="nama" id="nama" placeholder="Nama Lengkap"
                                value="{{ $currentuser->nama }}"
                                class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-[#F5682A] focus:border-[#F5682A] block w-full p-2.5 peer"
                                required="">
                            @error('nama')
                                <p class="text-red-500 text-sm font-medium py-2 capitalize" role="alert">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="w-1/2">
                            <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Email</label>
                            <input type="email" name="email" id="email" placeholder="namaemail@gmail.com"
                                value="{{ $currentuser->email }}"
                                class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-[#F5682A] focus:border-[#F5682A] block w-full p-2.5"
                                required="">
                            @error('email')
                                <p class="text-red-500 text-sm font-medium py-2 capitalize" role="alert">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="flex flex-row justify-between w-full gap-8">
                        <div class="flex flex-row gap-2 w-1/2">
                            <div class="w-4/6">
                                <label for="alamat" class="block mb-2 text-sm font-medium text-gray-900">Alamat</label>
                                <input type="text" name="alamat" id="alamat" placeholder="Alamat Anda"
                                    value="{{ $currentuser->alamat }}"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-[#F5682A] focus:border-[#F5682A] block w-full p-2.5"
                                    required="">
                                @error('alamat')
                                    <p class="text-red-500 text-sm font-medium py-2 capitalize" role="alert">{{ $message }}
                                    </p>
                                @enderror
                            </div>
                            <div class="w-2/6">
                                <label for="kecamatan_id"
                                    class="block mb-2 text-sm font-medium text-gray-900 ">Kecamatan</label>
                                <select name="kecamatan_id" id="kecamatan_id"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-[#F5682A] focus:border-[#F5682A] block w-full p-2.5">
                                    <option disabled>Pilih Kecamatan</option>
                                    <option selected value="{{ $kecamatan_id }}">{{ $kecamatan->nama }}</option>
                                    @foreach ($kecamatan_table as $val)
                                        @if ($val->id == $kecamatan_id)
                                            <option class="hidden" value="{{ $val->id }}">{{ $val->nama }}</option>
                                        @else
                                            <option value="{{ $val->id }}">{{ $val->nama }}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="w-1/2">
                            <label for="kontak" class="block mb-2 text-sm font-medium text-gray-900">Nomor
                                Telepon</label>
                            <input type="text" name="kontak" id="kontak" placeholder="081xxxxxxxxx"
                                value="{{ $currentuser->kontak }}"
                                class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-[#F5682A] focus:border-[#F5682A] block w-full p-2.5"
                                required="">
                            @error('kontak')
                                <p class="text-red-500 text-sm font-medium py-2 capitalize" role="alert">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <button type="submit"
                        class="text-center items-center justify-center w-auto bg-green-500 hover:bg-green-700 flex hover:cursor-pointer text-white font-medium py-2 px-4 rounded gap-2">Simpan
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
                            <path fill="currentColor" d="M19 3h-2.25a1 1 0 0 0-1-1h-7.5a1 1 0 0 0-1 1H5c-1.103 0-2 .897-2 2v15c0 1.103.897 2 2 2h14c1.103 0 2-.897 2-2V5c0-1.103-.897-2-2-2zm0 17H5V5h2v2h10V5h2v15z"/>
                        </svg>
                    </button>
                </form>
            </div>
        </div>
    </div>
    </div>
@endsection
