@extends('Layout.Sidebar')
@if ($currentuser->roles_id == 2)
    @section('title', '| Profil Peternak')
@elseif($currentuser->roles_id == 3)
    @section('title', '| Profil Dinas')
@else
    @section('title', '| Profil Admin')
@endif
@section('content')
    <div class="w-full bg-slate-200">
        @if (Session::has('success'))
            <div id="alert-border-3"
                class="flex items-center p-4 mb-4 text-green-800 border-t-4 border-green-300 bg-green-50" role="alert">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
                    <path fill="currentColor" d="M5 22h14c1.103 0 2-.897 2-2V5c0-1.103-.897-2-2-2h-2a1 1 0 0 0-1-1H8a1 1 0 0 0-1 1H5c-1.103 0-2 .897-2 2v15c0 1.103.897 2 2 2zM5 5h2v2h10V5h2v15H5V5z"/>
                    <path fill="currentColor" d="m11 13.586l-1.793-1.793l-1.414 1.414L11 16.414l5.207-5.207l-1.414-1.414z"/>
                </svg>
                <div class="ms-3 text-sm font-medium">
                    {{ Session::get('success') }}
                </div>
                <button type="button"
                    class="ms-auto -mx-1.5 -my-1.5 bg-green-50 text-green-500 rounded-lg p-1.5 hover:bg-green-200 inline-flex items-center justify-center h-8 w-8"
                    data-dismiss-target="#alert-border-3" aria-label="Close">
                    <span class="sr-only">Dismiss</span>
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                </button>
            </div>
        @endif
        <div class="px-16 py-16">
            <div class="px-8 py-8 shadow-xl bg-white rounded-lg">
                <h1 class="text-2xl font-bold text-gray-900 text-center">
                    Profil Anda
                </h1>
                <form class="flex flex-col space-y-8 justify-center items-center" action="" method="GET"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="flex flex-row justify-between w-full gap-8">
                        <div class="w-1/2">
                            <label for="nama" class="block mb-2 text-sm font-medium text-gray-900">Nama Lengkap</label>
                            <input type="text" name="nama" id="nama" placeholder="Nama Lengkap" readonly
                                value="{{ $currentuser->nama }}"
                                class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-[#F5682A] focus:border-[#F5682A] block w-full p-2.5"
                                required="">
                        </div>
                        <div class="w-1/2">
                            <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Email</label>
                            <input type="email" name="email" id="email" placeholder="namaemail@gmail.com" readonly
                                value="{{ $currentuser->email }}"
                                class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-[#F5682A] focus:border-[#F5682A] block w-full p-2.5"
                                required="">
                        </div>
                    </div>
                    <div class="flex flex-row justify-center w-full gap-8">
                        <div class="w-1/2">
                            <label for="alamat" class="block mb-2 text-sm font-medium text-gray-900">Alamat</label>
                            <input type="text" name="alamat" id="alamat" placeholder="Alamat Anda" readonly
                                value="{{ $currentuser->alamat }}, {{ $kecamatan->nama }}, Jember"
                                class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-[#F5682A] focus:border-[#F5682A] block w-full p-2.5"
                                required="">
                        </div>
                        <div class="w-1/2">
                            <label for="kontak" class="block mb-2 text-sm font-medium text-gray-900">Nomor
                                Telepon</label>
                            <input type="text" name="kontak" id="kontak" placeholder="081xxxxxxxxx" readonly
                                value="{{ $currentuser->kontak }}"
                                class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-[#F5682A] focus:border-[#F5682A] block w-full p-2.5"
                                required="">
                        </div>
                    </div>
                    <div class="flex flex-row items-center justify-center">
                        <a href="{{ route('edit.profil', $currentuser->id) }}"
                            class="text-center items-center justify-center w-auto bg-blue-500 hover:bg-blue-700 flex hover:cursor-pointer text-white font-medium py-2 px-4 rounded gap-2">Ubah
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
                                <path fill="currentColor" d="m7 17.013l4.413-.015l9.632-9.54c.378-.378.586-.88.586-1.414s-.208-1.036-.586-1.414l-1.586-1.586c-.756-.756-2.075-.752-2.825-.003L7 12.583v4.43zM18.045 4.458l1.589 1.583l-1.597 1.582l-1.586-1.585l1.594-1.58zM9 13.417l6.03-5.973l1.586 1.586l-6.029 5.971L9 15.006v-1.589z"/>
                                <path fill="currentColor" d="M5 21h14c1.103 0 2-.897 2-2v-8.668l-2 2V19H8.158c-.026 0-.053.01-.079.01c-.033 0-.066-.009-.1-.01H5V5h6.847l2-2H5c-1.103 0-2 .897-2 2v14c0 1.103.897 2 2 2z"/>
                            </svg>
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
