@extends('Layout.Navbar')
@section('title', '| Sign Up')
@section('content')
    <section class="bg-cover bg-center bg-no-repeat bg-[url('img/assets/fotopenyuluhan.png')] bg-gray-700 bg-blend-multiply">
        <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto h-screen lg:py-0">
            <div class="w-full bg-white rounded-lg shadow md:mt-0 sm:max-w-2xl xl:p-0">
                <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                    <div class="flex flex-row">
                        <a href="/signupRole"
                            class="button absolute hover:bg-slate-200 hover:rounded-lg content-center w-auto h-auto p-1">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                <path fill="currentColor"
                                    d="M21 11H6.414l5.293-5.293l-1.414-1.414L2.586 12l7.707 7.707l1.414-1.414L6.414 13H21z" />
                            </svg>
                        </a>
                    </div>
                    <div>
                        @if ($roles_id == 2)
                            <h1 class="text-xl font-bold tracking-tight text-gray-900 md:text-2xl text-center">
                                Sign Up Peternak
                            </h1>
                        @else
                            <h1 class="text-xl font-bold tracking-tight text-gray-900 md:text-2xl text-center">
                                Sign Up Dinas
                            </h1>
                        @endif
                    </div>
                    @if ($roles_id == 2)
                        <form class="space-y-4 md:space-y-6" action="/signupPeternak" method="POST" enctype="multipart/form-data" novalidate>
                            @csrf
                            <div>
                                <label for="nama" class="block mb-2 text-sm font-medium text-gray-900 ">Nama
                                    Lengkap</label>
                                <input type="text" name="nama" id="nama" placeholder="Nama Lengkap"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-[#F5682A] focus:border-[#F5682A] block w-full p-2.5"
                                    required="">
                                @error('nama')
                                    <p class="text-red-500 text-sm font-medium py-2 capitalize" role="alert">
                                        {{ $message }}</p>
                                @enderror
                            </div>
                            <div class="flex flex-row gap-2">
                                <div class="w-4/6">
                                    <label for="alamat"
                                        class="block mb-2 text-sm font-medium text-gray-900 ">Alamat</label>
                                    <input type="text" name="alamat" id="alamat" placeholder="Alamat Anda"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-[#F5682A] focus:border-[#F5682A] block w-full p-2.5"
                                        required="">
                                    @error('alamat')
                                        <p class="text-red-500 text-sm font-medium py-2 capitalize" role="alert">
                                            {{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="w-2/6">
                                    <label for="kecamatan_id"
                                        class="block mb-2 text-sm font-medium text-gray-900 ">Kecamatan</label>
                                    <select name="kecamatan_id" id="kecamatan_id"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-[#F5682A] focus:border-[#F5682A] block w-full p-2.5">
                                        <option selected disabled>Pilih Kecamatan</option>
                                        @foreach ($kecamatan_id as $val)
                                            <option value="{{ $val->id }}">{{ $val->nama }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div>
                                <label for="email" class="block mb-2 text-sm font-medium text-gray-900 ">Email</label>
                                <input type="email" name="email" id="email" placeholder="email@gmail.com"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-[#F5682A] focus:border-[#F5682A] block w-full p-2.5"
                                    required="">
                                @error('email')
                                    <p class="text-red-500 text-sm font-medium py-2 capitalize" role="alert">
                                        {{ $message }}</p>
                                @enderror
                            </div>
                            <div>
                                <label for="kontak" class="block mb-2 text-sm font-medium text-gray-900 ">Nomor
                                    Telepon</label>
                                <input type="number" name="kontak" id="kontak" placeholder="081xxxxxxxxx"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-[#F5682A] focus:border-[#F5682A] block w-full p-2.5 remove-arrow"
                                    required="">
                                @error('kontak')
                                    <p class="text-red-500 text-sm font-medium py-2 capitalize" role="alert">
                                        {{ $message }}</p>
                                @enderror
                            </div>
                            <div>
                                <label for="password" class="block mb-2 text-sm font-medium text-gray-900">Password</label>
                                <input type="password" name="password" id="password"
                                    placeholder="Password minimal 8 karakter"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-[#F5682A] focus:border-[#F5682A] block w-full p-2.5"
                                    required="">
                                @error('password')
                                    <p class="text-red-500 text-sm font-medium py-2 capitalize" role="alert">
                                        {{ $message }}</p>
                                @enderror
                            </div>
                            <div class="flex">
                                <button type="submit"
                                    class="flex flex-row items-center justify-center text-center content-center w-full text-white bg-[#F5682A] hover:bg-[#F54C2A] font-medium focus:bg-transparent focus:text-[#F5682A] focus:ring-2 focus:ring-[#F5682A] rounded-lg text-sm px-5 py-2.5 gap-2">Sign
                                    Up
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                        viewBox="0 0 24 24">
                                        <path fill="currentColor"
                                            d="M6 22h15v-2H6.012C5.55 19.988 5 19.805 5 19s.55-.988 1.012-1H21V4c0-1.103-.897-2-2-2H6c-1.206 0-3 .799-3 3v14c0 2.201 1.794 3 3 3zM5 8V5c0-.805.55-.988 1-1h13v12H5V8z" />
                                        <path fill="currentColor" d="M8 6h9v2H8z" />
                                    </svg>
                                </button>
                            </div>
                            <p class="text-sm font-light text-gray-500 ">
                                Sudah memiliki akun? <a href="/loginRole"
                                    class="font-medium text-[#F5682A] hover:text-[#F54C2A] hover:underline">Login</a>
                            </p>
                        </form>
                    @else
                        <form class="space-y-4 md:space-y-6" action="/signupDinas" method="POST" enctype="multipart/form-data" novalidate>
                            @csrf
                            <div>
                                <label for="nama" class="block mb-2 text-sm font-medium text-gray-900 ">Nama
                                    Lengkap</label>
                                <input type="text" name="nama" id="nama" placeholder="Nama Lengkap"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-[#F5682A] focus:border-[#F5682A] block w-full p-2.5"
                                    required="">
                                @error('nama')
                                    <p class="text-red-500 text-sm font-medium py-2 capitalize" role="alert">
                                        {{ $message }}</p>
                                @enderror
                            </div>
                            <div class="flex flex-row gap-2">
                                <div class="w-4/6">
                                    <label for="alamat"
                                        class="block mb-2 text-sm font-medium text-gray-900 ">Alamat</label>
                                    <input type="text" name="alamat" id="alamat" placeholder="Alamat Anda"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-[#F5682A] focus:border-[#F5682A] block w-full p-2.5"
                                        required="">
                                    @error('alamat')
                                        <p class="text-red-500 text-sm font-medium py-2 capitalize" role="alert">
                                            {{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="w-2/6">
                                    <label for="kecamatan_id"
                                        class="block mb-2 text-sm font-medium text-gray-900 ">Kecamatan</label>
                                    <select name="kecamatan_id" id="kecamatan_id"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-[#F5682A] focus:border-[#F5682A] block w-full p-2.5">
                                        <option selected disabled>Pilih Kecamatan</option>
                                        @foreach ($kecamatan_id as $val)
                                            <option value="{{ $val->id }}">{{ $val->nama }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div>
                                <label for="email" class="block mb-2 text-sm font-medium text-gray-900 ">Email</label>
                                <input type="email" name="email" id="email" placeholder="email@gmail.com"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-[#F5682A] focus:border-[#F5682A] block w-full p-2.5"
                                    required="">
                                @error('email')
                                    <p class="text-red-500 text-sm font-medium py-2 capitalize" role="alert">
                                        {{ $message }}</p>
                                @enderror
                            </div>
                            <div>
                                <label for="kontak" class="block mb-2 text-sm font-medium text-gray-900 ">Nomor
                                    Telepon</label>
                                <input type="number" name="kontak" id="kontak" placeholder="081xxxxxxxxx"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-[#F5682A] focus:border-[#F5682A] block w-full p-2.5 remove-arrow"
                                    required="">
                                @error('kontak')
                                    <p class="text-red-500 text-sm font-medium py-2 capitalize" role="alert">
                                        {{ $message }}</p>
                                @enderror
                            </div>
                            <div>
                                <label for="password"
                                    class="block mb-2 text-sm font-medium text-gray-900">Password</label>
                                <input type="password" name="password" id="password"
                                    placeholder="Password minimal 8 karakter"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-[#F5682A] focus:border-[#F5682A] block w-full p-2.5"
                                    required="">
                                @error('password')
                                    <p class="text-red-500 text-sm font-medium py-2 capitalize" role="alert">
                                        {{ $message }}</p>
                                @enderror
                            </div>
                            <div class="flex">
                                <button type="submit"
                                    class="flex flex-row items-center justify-center text-center content-center w-full text-white bg-[#F5682A] hover:bg-[#F54C2A] font-medium focus:bg-transparent focus:text-[#F5682A] focus:ring-2 focus:ring-[#F5682A] rounded-lg text-sm px-5 py-2.5 gap-2">Sign
                                    Up
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                        viewBox="0 0 24 24">
                                        <path fill="currentColor"
                                            d="M6 22h15v-2H6.012C5.55 19.988 5 19.805 5 19s.55-.988 1.012-1H21V4c0-1.103-.897-2-2-2H6c-1.206 0-3 .799-3 3v14c0 2.201 1.794 3 3 3zM5 8V5c0-.805.55-.988 1-1h13v12H5V8z" />
                                        <path fill="currentColor" d="M8 6h9v2H8z" />
                                    </svg>
                                </button>
                            </div>
                            <p class="text-sm font-light text-gray-500 ">
                                Sudah memiliki akun? <a href="/loginRole"
                                    class="font-medium text-[#F5682A] hover:text-[#F54C2A] hover:underline">Login</a>
                            </p>
                        </form>
                    @endif
                </div>
            </div>
        </div>
    </section>
@endsection
