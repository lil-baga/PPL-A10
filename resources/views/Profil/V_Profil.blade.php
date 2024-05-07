@extends('Layout.navbarDashboard')
@if ($currentuser->roles_id == 2)
    @section('title', '| Profil Peternak')
@elseif($currentuser->roles_id == 3)
    @section('title', '| Profil Dinas')
@else
    @section('title', '| Profil Admin')
@endif
@section('content')
    <div class="w-full bg-white rounded-lg md:mt-0 xl:p-0">
        @if (Session::has('success'))
            <div class="rounded-md bg-green-50 p-4">
                <p class="flex items-center text-sm font-medium text-green-600">
                    <span class="pr-3">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="currentColor"
                            xmlns="http://www.w3.org/2000/svg">
                            <circle cx="10" cy="10" r="10" fill="currentColor"></circle>
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M14.1203 6.78954C14.3865 7.05581 14.3865 7.48751 14.1203 7.75378L9.12026 12.7538C8.85399 13.02 8.42229 13.02 8.15602 12.7538L5.88329 10.4811C5.61703 10.2148 5.61703 9.78308 5.88329 9.51682C6.14956 9.25055 6.58126 9.25055 6.84753 9.51682L8.63814 11.3074L13.156 6.78954C13.4223 6.52328 13.854 6.52328 14.1203 6.78954Z"
                                fill="white"></path>
                        </svg>
                    </span>
                    {{ Session::get('success') }}
                </p>
            </div>
        @endif
        <div class="px-6 py-4">
            <h1 class="text-2xl font-bold text-gray-900 text-center">
                Profil Anda
            </h1>
            <form class="space-y-4" action="" method="GET" enctype="multipart/form-data">
                @csrf
                <div>
                    <label for="nama" class="block mb-2 text-sm font-medium text-gray-900">Nama Lengkap</label>
                    <input type="text" name="nama" id="nama" placeholder="Nama Lengkap" readonly
                        value="{{ $currentuser->nama }}"
                        class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-[#F5682A] focus:border-[#F5682A] block w-full p-2.5"
                        required="">
                </div>
                <div>
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Email</label>
                    <input type="email" name="email" id="email" placeholder="namaemail@gmail.com" readonly
                        value="{{ $currentuser->email }}"
                        class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-[#F5682A] focus:border-[#F5682A] block w-full p-2.5"
                        required="">
                </div>
                <div>
                    <label for="alamat" class="block mb-2 text-sm font-medium text-gray-900">Alamat</label>
                    <input type="text" name="alamat" id="alamat" placeholder="Alamat Anda" readonly
                        value="{{ $currentuser->alamat }}"
                        class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-[#F5682A] focus:border-[#F5682A] block w-full p-2.5"
                        required="">
                </div>
                <div>
                    <label for="kontak" class="block mb-2 text-sm font-medium text-gray-900">Nomor
                        Telepon</label>
                    <input type="text" name="kontak" id="kontak" placeholder="081xxxxxxxxx" readonly
                        value="{{ $currentuser->kontak }}"
                        class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-[#F5682A] focus:border-[#F5682A] block w-full p-2.5"
                        required="">
                </div>
                <a href="{{ route('edit.profil', $currentuser->id) }}"
                    class="items-center justify-center w-full bg-[#F5682A] hover:bg-[#F54C2A] flex hover:cursor-pointer text-white font-medium py-2 px-4 rounded">Ubah</a>
            </form>
        </div>
    </div>
@endsection
