@extends('Layout.navbarAdmin')
@section('title', '| Profil Admin')
@section('content')
    <div class="w-full bg-white rounded-lg shadow md:mt-0 xl:p-0">
        @if (Session::has('success'))
            <div class="bg-green-500 inset-y-0 left-0 top-0 flex flex-col-reverse bottom-0 text-white font-bold py-2 px-4"
                role="alert">
                {{ Session::get('success') }}
            </div>
        @endif
        <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
            <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl text-center">
                Profil
            </h1>
            <form class="space-y-4 md:space-y-6" action="{{ route('edit.profilAdmin') }}" method="GET"
                enctype="multipart/form-data">
                @csrf
                <div>
                    <label for="name" class="block mb-2 text-sm font-medium text-gray-900">Nama</label>
                    <input type="text" name="name" id="name" placeholder="Nama" readonly
                        value="{{ $currentuser->name }}"
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
                    <label for="address" class="block mb-2 text-sm font-medium text-gray-900">Address</label>
                    <input type="text" name="address" id="address" placeholder="Jalan Alamat Anda" readonly
                        value="{{ $currentuser->address }}"
                        class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-[#F5682A] focus:border-[#F5682A] block w-full p-2.5"
                        required="">
                </div>
                <div>
                    <label for="phone_number" class="block mb-2 text-sm font-medium text-gray-900">Nomor
                        Telepon</label>
                    <input type="text" name="phone_number" id="phone_number" placeholder="Nomor Telepon" readonly
                        value="{{ $currentuser->phone_number }}"
                        class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-[#F5682A] focus:border-[#F5682A] block w-full p-2.5"
                        required="">
                </div>
                <a href="{{ route('edit.profilAdmin', $currentuser->id) }}"
                    class="items-center justify-center w-full button bg-[#F5682A] hover:bg-[#F54C2A] inset-y-0 left-0 top-0 flex flex-col-reverse bottom-0 hover:cursor-pointer text-white font-bold py-2 px-4 rounded">Ubah</a>
            </form>
        </div>
    </div>
@endsection
