@extends('Layout.navbarLanding')
@section('title', '| Login')
@section('content')
    <section class="bg-cover bg-center bg-no-repeat bg-[url('fotopakan.png')] bg-[#2B2B2B] bg-blend-multiply bg-opacity-80">
        <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
            <div class="w-full bg-white rounded-lg shadow md:mt-0 sm:max-w-lg xl:p-0">
                <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                    @if ($roles_id == 2)
                        <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl text-center">
                            Login Peternak
                        </h1>
                    @elseif ($roles_id == 3)
                        <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl text-center">
                            Login Dinas
                        </h1>
                    @else
                        <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl text-center">
                            Login Admin
                        </h1>
                    @endif
                    <form class="space-y-4 md:space-y-6" action="/login" method="POST" novalidate>
                        @csrf
                        <div>
                            <label for="email" class="block mb-2 text-sm font-medium text-gray-900 ">Email</label>
                            <input type="email" name="email" id="email" placeholder="namaemail@gmail.com"
                                class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-[#F5682A] focus:border-[#F5682A] block w-full p-2.5"
                                required="">
                            @error('email')
                                <p class="text-red-500 text-sm font-medium py-2 capitalize" role="alert">{{ $message }}</p>
                            @enderror
                        </div>
                        <div>
                            <label for="password" class="block mb-2 text-sm font-medium text-gray-900">Password</label>
                            <input type="password" name="password" id="password" placeholder="••••••••"
                                class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-[#F5682A] focus:border-[#F5682A] block w-full p-2.5"
                                required="">
                            @error('password')
                                <p class="text-red-500 text-sm font-medium py-2 capitalize" role="alert">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="hidden">
                            <label for="kode_akses" class="block mb-2 text-sm fbolddium text-gray-900 ">Kode
                                Akses</label>
                            <input type="text" name="kode_akses" id="kode_akses"
                                placeholder="Kode Akses (Hubungi Admin)"
                                class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-[#F5682A] focus:border-[#F5682A] block w-full p-2.5" value="0"
                                required="">
                        </div>
                        @if ($roles_id == 3)
                            <div>
                                <label for="kode_akses" class="block mb-2 text-sm font-medium text-gray-900 ">Kode
                                    Akses</label>
                                <input type="text" name="kode_akses" id="kode_akses"
                                    placeholder="Kode Akses (Hubungi Admin)"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-[#F5682A] focus:border-[#F5682A] block w-full p-2.5"
                                    required="">
                                @error('kode_akses')
                                    <p class="text-red-500 text-sm font-medium py-2 capitalize" role="alert">{{ $message }}</p>
                                @enderror
                            </div>
                        @else
                        @endif
                        <button type="submit"
                            class="w-full text-white bg-[#F5682A] hover:bg-[#F54C2A] focus:ring-4 focus:outline-none font-medium rounded-lg text-sm px-5 py-2.5 text-center">Login</button>
                        <p class="text-sm font-light text-gray-500 ">
                            Belum memiliki akun? <a href="/signupRole"
                                class="font-medium text-[#F5682A] hover:text-[#F54C2A] hover:underline">Sign Up</a>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
