@extends('Layout.Navbar')
@section('title', '| Login')
@section('content')
    <section class="bg-cover bg-center bg-no-repeat bg-[url('img/assets/fotopakan.png')] bg-gray-700 bg-blend-multiply w-full h-full">
        <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto h-screen lg:py-0">
            <div class="w-full bg-white rounded-lg shadow md:mt-0 sm:max-w-lg xl:p-0">
                <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                    <div class="flex flex-row">
                        <a href="/loginRole"
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
                                Login Peternak
                            </h1>
                        @elseif ($roles_id == 3)
                            <h1 class="text-xl font-bold tracking-tight text-gray-900 md:text-2xl text-center">
                                Login Dinas
                            </h1>
                        @else
                            <h1 class="text-xl font-bold tracking-tight text-gray-900 md:text-2xl text-center">
                                Login Admin
                            </h1>
                        @endif
                    </div>
                    <form class="space-y-4 md:space-y-6" action="/login" method="POST" novalidate>
                        @csrf
                        <div>
                            <label for="email" class="block mb-2 text-sm font-medium text-gray-900 ">Email</label>
                            <input type="email" name="email" id="email" placeholder="email@gmail.com"
                                class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-[#F5682A] focus:border-[#F5682A] block w-full p-2.5"
                                required="">
                            @error('email')
                                <p class="text-red-500 text-sm font-medium py-2 capitalize" role="alert">{{ $message }}
                                </p>
                            @enderror
                        </div>
                        <div>
                            <label for="password" class="block mb-2 text-sm font-medium text-gray-900">Password</label>
                            <input type="password" name="password" id="password" placeholder="••••••••"
                                class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-[#F5682A] focus:border-[#F5682A] block w-full p-2.5"
                                required="">
                            @error('password')
                                <p class="text-red-500 text-sm font-medium py-2 capitalize" role="alert">{{ $message }}
                                </p>
                            @enderror
                        </div>
                        <div class="hidden">
                            <input type="text" name="roles_id" id="roles_id" placeholder="Role Anda"
                                class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-[#F5682A] focus:border-[#F5682A] block w-full p-2.5"
                                value="{{ $roles_id }}" required="">
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
                                    <p class="text-red-500 text-sm font-medium py-2 capitalize" role="alert">
                                        {{ $message }}</p>
                                @enderror
                            </div>
                        @else
                        @endif
                        <div class="flex">
                            <button type="submit"
                                class="flex flex-row items-center justify-center text-center content-center w-full text-white bg-[#F5682A] hover:bg-[#F54C2A] font-medium focus:bg-transparent focus:text-[#F5682A] focus:ring-2 focus:ring-[#F5682A] rounded-lg text-sm px-5 py-2.5 gap-2">Login
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
                                    <path fill="currentColor" d="m10.998 16l5-4l-5-4v3h-9v2h9z" />
                                    <path fill="currentColor"
                                        d="M12.999 2.999a8.938 8.938 0 0 0-6.364 2.637L8.049 7.05c1.322-1.322 3.08-2.051 4.95-2.051s3.628.729 4.95 2.051S20 10.13 20 12s-.729 3.628-2.051 4.95s-3.08 2.051-4.95 2.051s-3.628-.729-4.95-2.051l-1.414 1.414c1.699 1.7 3.959 2.637 6.364 2.637s4.665-.937 6.364-2.637C21.063 16.665 22 14.405 22 12s-.937-4.665-2.637-6.364a8.938 8.938 0 0 0-6.364-2.637z" />
                                </svg></button>
                        </div>
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
