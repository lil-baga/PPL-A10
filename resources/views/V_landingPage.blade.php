@extends('Layout.Navbar')
@section('title', '| Landing Page')
@section('content')
    <div class="flex flex-row h-full w-full">
        <section
            class="bg-cover bg-center bg-no-repeat bg-[url('img/assets/fotopakan.png')] bg-gray-700 bg-blend-multiply w-1/2 h-full">
            <div
                class="flex flex-col px-4 mx-auto max-w-screen-xl text-center items-center justify-center content-center py-72 mb-96">
                <svg xmlns="http://www.w3.org/2000/svg" width="200" height="200" viewBox="0 0 24 24">
                    <path fill="white"
                        d="M7.64 21.71a8 8 0 0 0 5.6-2.47l6-6c2.87-2.87 3.31-7.11 1-9.45s-6.58-1.91-9.45 1l-6 6c-2.87 2.87-3.31 7.11-1 9.45a5.38 5.38 0 0 0 3.85 1.47zm-2-9l2.78 2.79l1.42-1.42l-2.79-2.79l1.41-1.41l2.83 2.83l1.42-1.42l-2.83-2.83l1.41-1.41l2.83 2.83l1.42-1.42l-2.79-2.78c2-1.61 4.65-1.87 6-.47s1.09 4.56-1 6.62l-6 6c-2.06 2.05-5.09 2.5-6.62 1s-1.06-4.07.55-6.08z" />
                </svg>
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

        <section
            class="bg-cover bg-center bg-no-repeat bg-[url('img/assets/fotopenyuluhan.png')] bg-gray-700 bg-blend-multiply w-1/2 h-full">
            <div class="flex flex-col px-4 mx-auto max-w-screen-xl text-center items-center justify-center py-72 mb-96">
                <svg xmlns="http://www.w3.org/2000/svg" width="200" height="200" viewBox="0 0 24 24">
                    <path fill="white"
                        d="M10 18a7.952 7.952 0 0 0 4.897-1.688l4.396 4.396l1.414-1.414l-4.396-4.396A7.952 7.952 0 0 0 18 10c0-4.411-3.589-8-8-8s-8 3.589-8 8s3.589 8 8 8zm0-14c3.309 0 6 2.691 6 6s-2.691 6-6 6s-6-2.691-6-6s2.691-6 6-6z" />
                    <path fill="white"
                        d="M11.412 8.586c.379.38.588.882.588 1.414h2a3.977 3.977 0 0 0-1.174-2.828c-1.514-1.512-4.139-1.512-5.652 0l1.412 1.416c.76-.758 2.07-.756 2.826-.002z" />
                </svg>
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
