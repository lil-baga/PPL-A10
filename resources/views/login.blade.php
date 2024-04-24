@extends('Layout.navbarLanding')
@section('title', '| Login')
@section('content')
    <section class="bg-cover bg-center bg-no-repeat bg-[url('fotopakan.png')] bg-[#2B2B2B] bg-blend-multiply bg-opacity-80">
        <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
            <div class="w-full bg-white rounded-lg shadow md:mt-0 sm:max-w-lg xl:p-0">
                <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                    <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl text-center">
                        Login Sebagai
                    </h1>
                    <form class="space-y-4 md:space-y-6" action="">
                        <div class="flex md:order-2 space-x-3 md:space-x-0 gap-6 items-center justify-center">
                            <a href="/loginPeternak"
                                class="text-white bg-[#F5682A] hover:bg-[#F54C2A] focus:bg-transparent focus:text-[#F5682A] focus:ring-2 focus:ring-[#F5682A] font-medium rounded-lg text-sm px-4 py-2 text-center">Peternak</a>
                            <a href="/loginDinas"
                                class="text-white bg-[#F5682A] hover:bg-[#F54C2A] focus:bg-transparent focus:text-[#F5682A] focus:ring-2 focus:ring-[#F5682A] font-medium rounded-lg text-sm px-4 py-2 text-center">Dinas</a>
                            <a href="/loginAdmin"
                                class="text-white bg-[#F5682A] hover:bg-[#F54C2A] focus:bg-transparent focus:text-[#F5682A] focus:ring-2 focus:ring-[#F5682A] font-medium rounded-lg text-sm px-4 py-2 text-center">Admin</a>
                        </div>
                        <p class="text-sm font-light text-gray-500 ">
                            Belum memiliki akun? <a href="/signup"
                                class="font-medium text-[#F5682A] hover:text-[#F54C2A] hover:underline">Sign Up</a>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
