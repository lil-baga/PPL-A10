@extends('Layout.navbarDinas')
@section('title', '| Detail Subsidi')
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
                Detail Pengajuan Pakan Subsidi
            </h1>
            <div class="flex flex-row gap-10">
                <p class="block text-sm font-medium text-gray-900"><b>Nama:</b> {{ $currentuser->name }}</p>
                <p class="block text-sm font-medium text-gray-900"><b>Alamat:</b> {{ $currentuser->address }}</p>
                <p class="block text-sm font-medium text-gray-900"><b>Nomor Telepon:</b>
                    {{ $currentuser->phone_number }}</p>
            </div>
            <div>
                <p class="block font-medium text-sm text-gray-900">Surat Pengantar:
                <p class="block mb-1 font-medium text-sm text-gray-900"><a
                        href="{{ url("image/$foodSubmissions->covering_letter") }}" target="_blank"
                        class="hover:text-[#F5682A]">{{ $foodSubmissions->covering_letter }}</a></p>
            </div>
            <div>
                <p class="block font-medium text-sm text-gray-900">Surat Usaha:
                <p class="block mb-1 font-medium text-sm text-gray-900"><a
                        href="{{ url("image/$foodSubmissions->business_letter") }}" target="_blank"
                        class="hover:text-[#F5682A]">{{ $foodSubmissions->business_letter }}</a></p>
            </div>
            <div>
                <label for="farm_quantity" class="block mb-1 font-medium text-sm text-gray-900">Jumlah
                    Ternak</label>
                <input type="text" name="name" id="farm_quantity" placeholder="Jumlah Ternak" readonly
                    value="{{ $foodSubmissions->farm_quantity }}"
                    class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-[#F5682A] focus:border-[#F5682A] block w-full p-2.5"
                    required="">
            </div>
            <div>
                <label for="food_quantity" class="block mb-1 font-medium text-sm text-gray-900">Ajuan Pakan
                    (Kwintal)</label>
                <input type="text" name="name" id="food_quantity" placeholder="Ajuan Pakan (Kwintal)" readonly
                    value="{{ $foodSubmissions->food_quantity }}"
                    class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-[#F5682A] focus:border-[#F5682A] block w-full p-2.5"
                    required="">
            </div>
            <div>
                <p class="block font-medium text-sm text-gray-900">Status Validasi</p>
                @if ($foodSubmissions->validation == 'Diterima')
                    <div class="flex flex-col items-center justify-center bg-green-300 rounded-full p-2 w-36">
                        <p class="block antialiased font-sans text-sm leading-normal text-gray-900 font-normal">
                            {{ $foodSubmissions->validation }}</p>
                    </div>
                @elseif($foodSubmissions->validation == 'Ditolak')
                    <div class="flex flex-col items-center justify-center bg-red-300 rounded-full p-2 w-36">
                        <p class="block antialiased font-sans text-sm leading-normal text-gray-900 font-normal">
                            {{ $foodSubmissions->validation }}</p>
                    </div>
                @else
                    <div class="flex flex-col items-center justify-center bg-yellow-300 rounded-full p-2 w-36">
                        <p class="block antialiased font-sans text-sm leading-normal text-gray-900 font-normal">
                            {{ $foodSubmissions->validation }}</p>
                    </div>
                @endif
            </div>
            <div>
                <p class="block font-medium text-sm text-gray-900">Foto Peternakan:</p>
                <p class="block mb-1 font-medium text-sm text-gray-900"><a
                        href="{{ url("image/$foodSubmissions->farm_picture") }}" target="_blank"
                        class="hover:text-[#F5682A]">{{ $foodSubmissions->farm_picture }}</a></p>
            </div>
            <div>
                <p class="block font-medium text-sm text-gray-900">Foto Pakan Subsidi Yang Diterima:</p>
                <p class="block mb-1 font-medium text-sm text-gray-900"><a
                        href="{{ url("image/$foodSubmissions->confirm_picture") }}" target="_blank"
                        class="hover:text-[#F5682A]">{{ $foodSubmissions->confirm_picture }}</a></p>
            </div>
            <div>
                <p class="block font-medium text-sm text-gray-900">Status Konfirmasi</p>
                @if ($foodSubmissions->confirmation == 'Sudah Diambil')
                    <div class="flex flex-col items-center justify-center bg-green-300 rounded-full p-2 w-36">
                        <p class="block antialiased font-sans text-sm leading-normal text-gray-900 font-normal">
                            {{ $foodSubmissions->confirmation }}</p>
                    </div>
                @elseif($foodSubmissions->confirmation == 'Belum Diambil')
                    <div class="flex flex-col items-center justify-center bg-red-300 rounded-full p-2 w-36">
                        <p class="block antialiased font-sans text-sm leading-normal text-gray-900 font-normal">
                            {{ $foodSubmissions->confirmation }}</p>
                    </div>
                @else
                    <div class="flex flex-col items-center justify-center bg-yellow-300 rounded-full p-2 w-36">
                        <p class="block antialiased font-sans text-sm leading-normal text-gray-900 font-normal">
                            {{ $foodSubmissions->confirmation }}</p>
                    </div>
                @endif
            </div>
            <div>
                <label for="government_note" class="block mb-1 font-medium text-sm text-gray-900">Catatan</label>
                <input type="text" name="name" id="government_note" placeholder="-" readonly
                    value="{{ $foodSubmissions->government_note }}"
                    class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-[#F5682A] focus:border-[#F5682A] block w-full p-2.5"
                    required="">
            </div>
            <div class="flex-col items-center justify-center">
                <a href="{{ route('subsidi.validate', $foodSubmissions->id) }}"
                    class="items-center justify-center w-full button bg-green-500 inset-y-0 left-0 top-0 flex flex-col-reverse bottom-0 ml-2 hover:cursor-pointer hover:bg-green-700 text-white font-bold py-2 px-4 rounded">Validasi</a>
            </div>
        </div>
    </div>
@endsection
