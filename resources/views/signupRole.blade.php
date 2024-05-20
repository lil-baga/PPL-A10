@extends('Layout.Navbar')
@section('title', '| Login')
@section('hidden', 'hidden')
@section('content')
    <section class="bg-cover bg-center bg-no-repeat bg-[url('img/assets/fotopenyuluhan.png')] bg-gray-700 bg-blend-multiply">
        <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
            <div class="w-full bg-white rounded-lg shadow md:mt-0 sm:max-w-lg xl:p-0">
                <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                    <div class="flex flex-row mb-8">
                        <a href="/"
                            class="button absolute hover:bg-slate-200 hover:rounded-lg content-center w-auto h-auto p-1">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                <path fill="currentColor"
                                    d="M21 11H6.414l5.293-5.293l-1.414-1.414L2.586 12l7.707 7.707l1.414-1.414L6.414 13H21z" />
                            </svg>
                        </a>
                    </div>
                    <div>
                        <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl text-center">
                            Sign Up Sebagai
                        </h1>
                    </div>
                    <div class="space-y-4 md:space-y-6">
                        <div class="flex md:order-2 space-x-3 md:space-x-0 gap-6 items-center justify-center">
                            <form action="/signupPeternak" method="GET">
                                <button
                                    class="text-white bg-[#F5682A] hover:bg-[#F54C2A] focus:bg-transparent focus:text-[#F5682A] focus:ring-2 focus:ring-[#F5682A] font-medium rounded-lg text-sm px-4 py-2 text-center">Peternak</button>
                            </form>
                            <form action="/signupDinas" method="GET">
                                <button
                                    class="text-white bg-[#F5682A] hover:bg-[#F54C2A] focus:bg-transparent focus:text-[#F5682A] focus:ring-2 focus:ring-[#F5682A] font-medium rounded-lg text-sm px-4 py-2 text-center">Dinas</button>
                            </form>
                        </div>
                        <p class="text-sm font-light text-gray-500 ">
                            Sudah memiliki akun? <a href="/loginRole"
                                class="font-medium text-[#F5682A] hover:text-[#F54C2A] hover:underline">Login</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
