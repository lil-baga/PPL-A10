@extends('Layout.navbarDashboard')
@section('title', '| Edit Profil')
@section('content')
    <div class="w-full bg-white rounded-lg shadow md:mt-0 xl:p-0">
        <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
            <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl text-center">
                Edit Profil
            </h1>
            <form class="space-y-4 md:space-y-6" action="{{ route('update.profil', $currentuser->id) }}" method="POST"
                enctype="multipart/form-data" novalidate>
                @csrf
                @method('PUT')
                <div>
                    <label for="name" class="block mb-2 text-sm font-medium text-gray-900">Nama</label>
                    <input type="text" name="name" id="name" placeholder="Nama" value="{{ $currentuser->name }}"
                        class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-[#F5682A] focus:border-[#F5682A] block w-full p-2.5 peer"
                        required="">
                    @error('name')
                        <p class="text-red-500 text-sm font-bold py-2" role="alert">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Email</label>
                    <input type="email" name="email" id="email" placeholder="namaemail@gmail.com"
                        value="{{ $currentuser->email }}"
                        class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-[#F5682A] focus:border-[#F5682A] block w-full p-2.5"
                        required="">
                    @error('name')
                        <p class="text-red-500 text-sm font-bold py-2" role="alert">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <label for="address" class="block mb-2 text-sm font-medium text-gray-900">Address</label>
                    <input type="text" name="address" id="address" placeholder="Jalan Alamat Anda"
                        value="{{ $currentuser->address }}"
                        class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-[#F5682A] focus:border-[#F5682A] block w-full p-2.5"
                        required="">
                    @error('address')
                        <p class="text-red-500 text-sm font-bold py-2" role="alert">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <label for="phone_number" class="block mb-2 text-sm font-medium text-gray-900">Nomor
                        Telepon</label>
                    <input type="text" name="phone_number" id="phone_number" placeholder="Nomor Telepon"
                        value="{{ $currentuser->phone_number }}"
                        class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-[#F5682A] focus:border-[#F5682A] block w-full p-2.5"
                        required="">
                    @error('phone_number')
                        <p class="text-red-500 text-sm font-bold py-2" role="alert">{{ $message }}</p>
                    @enderror
                </div>
                <button type="submit"
                    class="w-full text-white bg-[#F5682A] hover:bg-[#F54C2A] focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Simpan</button>
            </form>
        </div>
    </div>
@endsection
