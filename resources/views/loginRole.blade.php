@extends('Layout.Navbar')
@section('title', '| Login')
@section('content')
    <section class="bg-cover bg-center bg-no-repeat bg-[url('img/assets/fotopakan.png')] bg-slate-700 bg-blend-multiply w-full h-full">
        <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto h-screen lg:py-0">
            <div class="w-full bg-white rounded-lg shadow md:my-0 md:mt-0 sm:max-w-lg xl:p-0">
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
                    @if (Session::has('failed'))
                        <div id="alert-border-3"
                            class="flex items-center p-4 mb-4 text-red-800 border-t-4 border-red-300 bg-red-50"
                            role="alert">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
                                <path fill="currentColor"
                                    d="M3 20c0 1.103.897 2 2 2h14c1.103 0 2-.897 2-2V5c0-1.103-.897-2-2-2h-2a1 1 0 0 0-1-1H8a1 1 0 0 0-1 1H5c-1.103 0-2 .897-2 2v15zM5 5h2v2h10V5h2v15H5V5z" />
                                <path fill="currentColor"
                                    d="M14.292 10.295L12 12.587l-2.292-2.292l-1.414 1.414l2.292 2.292l-2.292 2.292l1.414 1.414L12 15.415l2.292 2.292l1.414-1.414l-2.292-2.292l2.292-2.292z" />
                            </svg>
                            <div class="ms-3 text-sm font-medium">
                                {{ Session::get('failed') }}
                            </div>
                            <button type="button"
                                class="ms-auto -mx-1.5 -my-1.5 bg-red-50 text-red-500 rounded-lg p-1.5 hover:bg-red-200 inline-flex items-center justify-center h-8 w-8"
                                data-dismiss-target="#alert-border-3" aria-label="Close">
                                <span class="sr-only">Dismiss</span>
                                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 14 14">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                </svg>
                            </button>
                        </div>
                    @endif
                    <div>
                        <h1 class="text-lg font-bold leading-tight tracking-tight text-slate-900 md:text-2xl text-center">
                            Login Sebagai
                        </h1>
                    </div>
                    <div class="space-y-4 md:space-y-6">
                        <div class="flex md:order-2 space-x-3 md:space-x-0 gap-2 md:gap-6 items-center justify-center">
                            <form action="/loginPeternak" method="GET">
                                <button
                                    class="text-white bg-[#F5682A] hover:bg-[#F54C2A] focus:bg-transparent focus:text-[#F5682A] focus:ring-2 focus:ring-[#F5682A] font-medium rounded-lg text-xs md:text-sm px-4 py-2 text-center">Peternak</button>
                            </form>
                            <form action="/loginDinas" method="GET">
                                <button
                                    class="text-white bg-[#F5682A] hover:bg-[#F54C2A] focus:bg-transparent focus:text-[#F5682A] focus:ring-2 focus:ring-[#F5682A] font-medium rounded-lg text-xs md:text-sm px-4 py-2 text-center">Dinas</button>
                            </form>
                            <form action="/loginAdmin" method="GET">
                                <button
                                    class="text-white bg-[#F5682A] hover:bg-[#F54C2A] focus:bg-transparent focus:text-[#F5682A] focus:ring-2 focus:ring-[#F5682A] font-medium rounded-lg text-xs md:text-sm px-4 py-2 text-center">Admin</button>
                            </form>
                        </div>
                        <p class="text-xs md:text-sm font-light text-slate-500 ">
                            Belum memiliki akun? <a href="/signupRole"
                                class="font-medium text-[#F5682A] hover:text-[#F54C2A] text-xs md:text-sm hover:underline">Sign Up</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
