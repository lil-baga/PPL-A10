@extends('Layout.navbarLanding')
@section('title', '| Landing Page')
@section('content')
    <div class="flex flex-row h-full w-full">
        <section class="bg-cover bg-center bg-no-repeat bg-[url('fotopakan.png')] bg-gray-700 bg-blend-multiply w-1/2 h-full">
            <div class="px-4 mx-auto max-w-screen-xl text-center items-center justify-center py-[400px]">
                <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-white md:text-5xl lg:text-6xl">
                    Subsidi Pakan</h1>
                <p class="mb-8 text-lg font-normal text-gray-300 lg:text-xl px-36">Dapatkan pakan ternak ayam petelur
                    bersubsidi dengan melakukan pengajuan pada fitur <b>Subsidi Pakan.</b></p>
                {{-- <a href="#"
                    class="inline-flex justify-center hover:text-gray-900 items-center py-3 px-5 sm:ms-4 text-base font-medium text-center text-white rounded-lg border border-white hover:bg-white focus:ring-2 focus:ring-white">
                    Pelajari Lebih Lanjut
                </a> --}}
            </div>
        </section>

        <section class="bg-cover bg-center bg-no-repeat bg-[url('fotopenyuluhan.png')] bg-gray-700 bg-blend-multiply w-1/2">
            <div class="px-4 mx-auto max-w-screen-xl text-center items-center justify-center py-[400px]">
                <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-white md:text-5xl lg:text-6xl">
                    Penyuluhan Ternak</h1>
                <p class="mb-8 text-lg font-normal text-gray-300 lg:text-xl px-36">Jadwalkan penyuluhan peternakan ayam
                    petelur anda dengan melakukan pengajuan pada fitur <b>Penyuluhan Ternak.</p>
                {{-- <a href="#"
                    class="inline-flex justify-center hover:text-gray-900 items-center py-3 px-5 sm:ms-4 text-base font-medium text-center text-white rounded-lg border border-white hover:bg-white focus:ring-2 focus:ring-white">
                    Pelajari Lebih Lanjut
                </a> --}}
            </div>
        </section>
    </div>
@endsection
