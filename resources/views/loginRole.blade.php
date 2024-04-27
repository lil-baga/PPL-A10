@extends('Layout.navbarLanding')
@section('title', '| Login')
@section('content')
    <section class="bg-cover bg-center bg-no-repeat bg-[url('fotopakan.png')] bg-[#2B2B2B] bg-blend-multiply bg-opacity-80">
        <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
            <div class="w-full bg-white rounded-lg shadow md:mt-0 sm:max-w-lg xl:p-0">
                <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                    @if (Session::has('failed'))
                        <div class="bg-red-500 text-white font-bold py-2 px-4" role="alert">
                            {{ Session::get('failed') }}
                        </div>
                    @endif
                    <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl text-center">
                        Login Sebagai
                    </h1>
                    <div class="space-y-4 md:space-y-6">
                        <div class="flex md:order-2 space-x-3 md:space-x-0 gap-6 items-center justify-center">
                            <form action="/loginPeternak" method="GET">
                                <button
                                    class="text-white bg-[#F5682A] hover:bg-[#F54C2A] focus:bg-transparent focus:text-[#F5682A] focus:ring-2 focus:ring-[#F5682A] font-medium rounded-lg text-sm px-4 py-2 text-center">Peternak</button>
                            </form>
                            <form action="/loginDinas" method="GET">
                                <button
                                    class="text-white bg-[#F5682A] hover:bg-[#F54C2A] focus:bg-transparent focus:text-[#F5682A] focus:ring-2 focus:ring-[#F5682A] font-medium rounded-lg text-sm px-4 py-2 text-center">Dinas</button>
                            </form>
                            <form action="/loginAdmin" method="GET">
                                <button
                                    class="text-white bg-[#F5682A] hover:bg-[#F54C2A] focus:bg-transparent focus:text-[#F5682A] focus:ring-2 focus:ring-[#F5682A] font-medium rounded-lg text-sm px-4 py-2 text-center">Admin</button>
                            </form>
                        </div>
                        <p class="text-sm font-light text-gray-500 ">
                            Belum memiliki akun? <a href="/signupRole"
                                class="font-medium text-[#F5682A] hover:text-[#F54C2A] hover:underline">Sign Up</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection