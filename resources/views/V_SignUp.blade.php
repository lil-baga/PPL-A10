@extends('Layout.navbarLanding')
@section('title', '| Sign Up')
@section('content')
    <section
        class="bg-cover bg-center bg-no-repeat bg-[url('fotopenyuluhan.png')] bg-[#2B2B2B] bg-blend-multiply bg-opacity-80">
        <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
            <div class="w-full bg-white rounded-lg shadow md:mt-0 sm:max-w-2xl xl:p-0">
                <div class="space-y-4 md:space-y-6 sm:p-8">
                    @if ($roles_id == 2)
                        <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl text-center">
                            Sign Up Peternak
                        </h1>
                    @else
                        <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl text-center">
                            Sign Up Dinas
                        </h1>
                    @endif

                    @if ($roles_id == 2)
                        <form class="space-y-4 md:space-y-6" action="/signupPeternak" method="POST" novalidate>
                            @csrf
                            <div>
                                <label for="nama" class="block mb-2 text-sm font-medium text-gray-900 ">Nama Lengkap</label>
                                <input type="text" name="nama" id="nama" placeholder="Nama Lengkap"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-[#F5682A] focus:border-[#F5682A] block w-full p-2.5"
                                    required="">
                                @error('nama')
                                    <p class="text-red-500 text-sm font-medium py-2 capitalize" role="alert">{{ $message }}</p>
                                @enderror
                            </div>
                            <div>
                                <label for="alamat" class="block mb-2 text-sm font-medium text-gray-900 ">Alamat</label>
                                <input type="text" name="alamat" id="alamat" placeholder="Alamat Anda"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-[#F5682A] focus:border-[#F5682A] block w-full p-2.5"
                                    required="">
                                @error('alamat')
                                    <p class="text-red-500 text-sm font-medium py-2 capitalize" role="alert">{{ $message }}</p>
                                @enderror
                            </div>
                            <div>
                                <label for="email" class="block mb-2 text-sm font-medium text-gray-900 ">Email</label>
                                <input type="email" name="email" id="email" placeholder="email@gmail.com"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-[#F5682A] focus:border-[#F5682A] block w-full p-2.5"
                                    required="">
                                @error('email')
                                    <p class="text-red-500 text-sm font-medium py-2 capitalize" role="alert">{{ $message }}</p>
                                @enderror
                            </div>
                            <div>
                                <label for="kontak" class="block mb-2 text-sm font-medium text-gray-900 ">Nomor
                                    Telepon</label>
                                <input type="number" name="kontak" id="kontak" placeholder="081xxxxxxxxx"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-[#F5682A] focus:border-[#F5682A] block w-full p-2.5 remove-arrow"
                                    required="">
                                @error('kontak')
                                    <p class="text-red-500 text-sm font-medium py-2 capitalize" role="alert">{{ $message }}</p>
                                @enderror
                            </div>
                            <div>
                                <label for="password" class="block mb-2 text-sm font-medium text-gray-900">Password</label>
                                <input type="password" name="password" id="password" placeholder="Password minimal 8 karakter"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-[#F5682A] focus:border-[#F5682A] block w-full p-2.5"
                                    required="">
                                @error('password')
                                    <p class="text-red-500 text-sm font-medium py-2 capitalize" role="alert">{{ $message }}</p>
                                @enderror
                            </div>
                            <button type="submit"
                                class="w-full text-white bg-[#F5682A] hover:bg-[#F54C2A] focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Sign
                                Up</button>
                            <p class="text-sm font-light text-gray-500 ">
                                Sudah memiliki akun? <a href="/loginRole"
                                    class="font-medium text-[#F5682A] hover:text-[#F54C2A] hover:underline">Login</a>
                            </p>
                        </form>
                    @else
                        <form class="space-y-4 md:space-y-6" action="/signupDinas" method="POST" novalidate>
                            @csrf
                            <div>
                                <label for="nama" class="block mb-2 text-sm font-medium text-gray-900 ">Nama Lengkap</label>
                                <input type="text" name="nama" id="nama" placeholder="Nama Lengkap"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-[#F5682A] focus:border-[#F5682A] block w-full p-2.5"
                                    required="">
                                @error('nama')
                                    <p class="text-red-500 text-sm font-medium py-2 capitalize" role="alert">{{ $message }}</p>
                                @enderror
                            </div>
                            <div>
                                <label for="alamat" class="block mb-2 text-sm font-medium text-gray-900 ">Alamat</label>
                                <input type="text" name="alamat" id="alamat" placeholder="Alamat Anda"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-[#F5682A] focus:border-[#F5682A] block w-full p-2.5"
                                    required="">
                                @error('alamat')
                                    <p class="text-red-500 text-sm font-medium py-2 capitalize" role="alert">{{ $message }}</p>
                                @enderror
                            </div>
                            <div>
                                <label for="email" class="block mb-2 text-sm font-medium text-gray-900 ">Email</label>
                                <input type="email" name="email" id="email" placeholder="nameemail@gmail.com"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-[#F5682A] focus:border-[#F5682A] block w-full p-2.5"
                                    required="">
                                @error('email')
                                    <p class="text-red-500 text-sm font-medium py-2 capitalize" role="alert">{{ $message }}</p>
                                @enderror
                            </div>
                            <div>
                                <label for="kontak" class="block mb-2 text-sm font-medium text-gray-900 ">Nomor
                                    Telepon</label>
                                <input type="number" name="kontak" id="kontak" placeholder="081xxxxxxxxx"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-[#F5682A] focus:border-[#F5682A] block w-full p-2.5 remove-arrow"
                                    required="">
                                @error('kontak')
                                    <p class="text-red-500 text-sm font-medium py-2 capitalize" role="alert">{{ $message }}
                                    </p>
                                @enderror
                            </div>
                            <div>
                                <label for="password"
                                    class="block mb-2 text-sm font-medium text-gray-900">Password</label>
                                <input type="password" name="password" id="password" placeholder="Password minimal 8 karakter."
                                    class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-[#F5682A] focus:border-[#F5682A] block w-full p-2.5"
                                    required="">
                                @error('password')
                                    <p class="text-red-500 text-sm font-medium py-2 capitalize" role="alert">{{$message}}</p>
                                @enderror
                            </div>
                            <button type="submit"
                                class="w-full text-white bg-[#F5682A] hover:bg-[#F54C2A] focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Sign
                                Up</button>
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
