@extends('Layout.navbarLanding')
@section('title', '| Sign Up')
@section('content')
    <section class="bg-cover bg-center bg-no-repeat bg-[url('fotopenyuluhan.png')] bg-[#2B2B2B] bg-blend-multiply bg-opacity-80">
        <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
            <div class="w-full bg-white rounded-lg shadow md:mt-0 sm:max-w-2xl xl:p-0">
                <div class="space-y-4 md:space-y-6 sm:p-8">
                    <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl text-center">
                        Sign Up Dinas
                    </h1>
                    <form class="space-y-4 md:space-y-6" action="/signupDinas" method="POST">
                        @csrf
                        <div>
                            <label for="name" class="block mb-2 text-sm font-medium text-gray-900 ">Nama</label>
                            <input type="text" name="name" id="name" placeholder="Nama Lengkap"
                                class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-[#F5682A] focus:border-[#F5682A] block w-full p-2.5"
                                required="">
                        </div>
                        <div>
                            <label for="address" class="block mb-2 text-sm font-medium text-gray-900 ">Alamat</label>
                            <input type="text" name="address" id="address" placeholder="Jalan Alamat Anda"
                                class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-[#F5682A] focus:border-[#F5682A] block w-full p-2.5"
                                required="">
                        </div>
                        <div>
                            <label for="email" class="block mb-2 text-sm font-medium text-gray-900 ">Email</label>
                            <input type="email" name="email" id="email" placeholder="namaemail@gmail.com"
                                class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-[#F5682A] focus:border-[#F5682A] block w-full p-2.5"
                                required="">
                        </div>
                        <div>
                            <label for="phone_number" class="block mb-2 text-sm font-medium text-gray-900 ">Nomor
                                Telepon</label>
                            <input type="text" name="phone_number" id="phone_number" placeholder="081xxxxxxxxx"
                                class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-[#F5682A] focus:border-[#F5682A] block w-full p-2.5"
                                required="">
                        </div>
                        <div>
                            <label for="password" class="block mb-2 text-sm font-medium text-gray-900">Password</label>
                            <input type="password" name="password" id="password" placeholder="••••••••"
                                class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-[#F5682A] focus:border-[#F5682A] block w-full p-2.5"
                                required="">
                        </div>
                        <button type="submit"
                            class="w-full text-white bg-[#F5682A] hover:bg-[#F54C2A] focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Sign
                            Up</button>
                        <p class="text-sm font-light text-gray-500 ">
                            Sudah memiliki akun? <a href="/login"
                                class="font-medium text-[#F5682A] hover:text-[#F54C2A] hover:underline">Login</a>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
