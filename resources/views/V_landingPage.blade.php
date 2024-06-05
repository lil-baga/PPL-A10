@extends('Layout.Navbar')
@section('title', '| Landing Page')
@section('content')
    <div class="flex flex-col h-full w-full">
        <div class="flex text-center items-center justify-center content-center bg-cover bg-center bg-no-repeat bg-[url('img/assets/fotopakan.png')] bg-slate-700 bg-blend-multiply w-full h-full">
            <div class="flex flex-col h-screen max-w-screen text-center items-center justify-center content-center py-36 md:py-96 mx-16 gap-8">
                <img src="{{ url('img/assets/logobrand.png') }}" class="w-72 md:w-[512px]" alt="Logo">
                <p class="text-xs md:text-xl font-normal text-slate-200 md:mx-[512px]">Web-App Pengajuan Penyuluhan Ayam Petelur dan Pemantauan Distribusi Pakan Ayam Bersubsidi di Kabupaten Jember</p>
                <div class="flex flex-row gap-8">
                    <a href="/loginRole"
                        class="inline-flex justify-center hover:text-slate-900 items-center py-2 px-4 md:py-3 md:px-5 text-xs md:text-base font-medium text-center text-white rounded-lg border border-white hover:bg-white focus:ring-2 focus:ring-white">
                        Login
                    </a>
                    <a href="/signupRole"
                        class="inline-flex justify-center hover:text-slate-900 items-center py-2 px-4 md:py-3 md:px-5 text-xs md:text-base font-medium text-center text-white rounded-lg border border-white hover:bg-white focus:ring-2 focus:ring-white">
                        Sign Up
                    </a>
                </div>
            </div>
        </div>

        <div class="flex flex-row bg-white w-full h-dull">
            <div class="flex flex-col px-4 mx-auto text-center items-center my-4 md:my-8">
                <h1 class="flex text-[#F5682A] text-2xl md:text-4xl font-bold">Fitur Kami</h1>
                <div class="flex flex-row text-[#F5682A] text-center items-center justify-center gap-10 md:gap-60 mt-4 md:mt-8">
                    <div class="flex flex-col text-center items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-16 md:w-32" viewBox="0 0 24 24">
                            <path fill="#F5682A"
                                d="M7.64 21.71a8 8 0 0 0 5.6-2.47l6-6c2.87-2.87 3.31-7.11 1-9.45s-6.58-1.91-9.45 1l-6 6c-2.87 2.87-3.31 7.11-1 9.45a5.38 5.38 0 0 0 3.85 1.47zm-2-9l2.78 2.79l1.42-1.42l-2.79-2.79l1.41-1.41l2.83 2.83l1.42-1.42l-2.83-2.83l1.41-1.41l2.83 2.83l1.42-1.42l-2.79-2.78c2-1.61 4.65-1.87 6-.47s1.09 4.56-1 6.62l-6 6c-2.06 2.05-5.09 2.5-6.62 1s-1.06-4.07.55-6.08z" />
                        </svg>
                        <h4 class="flex text-xs md:text-2xl font-medium max-w-28 md:max-w-48">
                            Pengajuan Subsidi Pakan
                        </h4>
                    </div>
                    <div class="flex flex-col text-center items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-16 md:w-32" viewBox="0 0 24 24">
                            <path fill="#F5682A"
                                d="M10 18a7.952 7.952 0 0 0 4.897-1.688l4.396 4.396l1.414-1.414l-4.396-4.396A7.952 7.952 0 0 0 18 10c0-4.411-3.589-8-8-8s-8 3.589-8 8s3.589 8 8 8zm0-14c3.309 0 6 2.691 6 6s-2.691 6-6 6s-6-2.691-6-6s2.691-6 6-6z" />
                            <path fill="#F5682A"
                                d="M11.412 8.586c.379.38.588.882.588 1.414h2a3.977 3.977 0 0 0-1.174-2.828c-1.514-1.512-4.139-1.512-5.652 0l1.412 1.416c.76-.758 2.07-.756 2.826-.002z" />
                        </svg>
                        <h4 class="flex text-xs md:text-2xl font-medium max-w-28 md:max-w-48">
                            Pengajuan Penyuluhan Ternak
                        </h4>
                    </div>
                    <div class="flex flex-col text-center items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-16 md:w-32" viewBox="0 0 24 24">
                            <path fill="#F5682A"
                                d="M19.875 3H4.125C2.953 3 2 3.897 2 5v14c0 1.103.953 2 2.125 2h15.75C21.047 21 22 20.103 22 19V5c0-1.103-.953-2-2.125-2zm0 16H4.125c-.057 0-.096-.016-.113-.016c-.007 0-.011.002-.012.008L3.988 5.046c.007-.01.052-.046.137-.046h15.75c.079.001.122.028.125.008l.012 13.946c-.007.01-.052.046-.137.046z" />
                            <path fill="#F5682A" d="M6 7h6v6H6zm7 8H6v2h12v-2h-4zm1-4h4v2h-4zm0-4h4v2h-4z" />
                        </svg>
                        <h4 class="flex text-xs md:text-2xl font-medium max-w-28 md:max-w-48">
                            Broadcast Berita
                        </h4>
                    </div>
                </div>
            </div>
        </div>
    <footer class="flex font-medium bottom-0 w-full p-2 bg-white shadow text-center items-center justify-center">
        <p class="text-sm text-[#F5682A] text-center">© 2024 <a
                href="https://docs.google.com/document/d/167jNoQAbCq6WD8fNQgyfTdpghg5DldRu" target="_blank"
                class="hover:underline">Kelompok A10™ - Chick&Check</a>
        </p>
    </footer>
@endsection
