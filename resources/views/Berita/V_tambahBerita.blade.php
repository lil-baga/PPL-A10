@extends('Layout.Sidebar')
@section('title', '| Tambah Berita')
@section('content')
    <div class="w-full bg-slate-200 scrollbar">
        <div class="px-16 py-16">
            <div class=" px-8 py-8 shadow-xl bg-white rounded-lg">
                <div class="flex flex-row">
                    <a href="/broadcastBerita"
                        class="button absolute hover:bg-slate-200 hover:rounded-lg content-center w-auto h-auto p-1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <path fill="currentColor"
                                d="M21 11H6.414l5.293-5.293l-1.414-1.414L2.586 12l7.707 7.707l1.414-1.414L6.414 13H21z" />
                        </svg>
                    </a>
                </div>
                <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl text-center">
                    Tambahkan Berita
                </h1>
                <form class="flex flex-col space-y-12 justify-center items-center" action="/tambahBerita" method="POST"
                    enctype="multipart/form-data" novalidate>
                    @csrf
                    <div>
                        <label for="thumbnail" class="block mb-2 text-sm font-medium text-gray-900">Thumbnail</label>
                        <input class="w-96" type="file" name="thumbnail" id="thumbnail" required="">
                        @error('thumbnail')
                            <p class="text-red-500 text-sm font-medium py-2 capitalize" role="alert">{{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <label for="judul" class="block mb-2 text-sm font-medium text-gray-900">Judul</label>
                        <input type="text" name="judul" id="judul" placeholder="Isi Judul Berita..."
                            class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-[#F5682A] focus:border-[#F5682A] block w-96 p-2.5"
                            required="">
                        @error('judul')
                            <p class="text-red-500 text-sm font-medium py-2 capitalize" role="alert">{{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <label for="isi" class="block mb-2 text-sm font-medium text-gray-900">Isi Berita</label>
                        <div
                            class="overflow-hidden rounded-lg w-[720px] h-96 border border-gray-300 focus-within:border-[#F5682A] focus-within:ring-1 focus-within:ring-[#F5682A]">
                            <textarea id="isi" name="isi"
                                class="p-2 w-full h-full resize-none border-none align-top focus:ring-0 sm:text-sm preserveLines"
                                placeholder="Tuliskan Isi Berita..."></textarea>
                        </div>
                        @error('isi')
                            <p class="text-red-500 text-sm font-medium py-2 capitalize" role="alert">{{ $message }}</p>
                        @enderror
                    </div>
                    <button type="submit"
                        class="text-center items-center justify-center w-auto bg-green-500 hover:bg-green-700 flex hover:cursor-pointer text-white font-medium py-2 px-4 rounded gap-2">Tambahkan
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
                            <path fill="currentColor"
                                d="m21.706 5.292l-2.999-2.999A.996.996 0 0 0 18 2H6a.996.996 0 0 0-.707.293L2.294 5.292A.994.994 0 0 0 2 6v13c0 1.103.897 2 2 2h16c1.103 0 2-.897 2-2V6a.994.994 0 0 0-.294-.708zM6.414 4h11.172l1 1H5.414l1-1zM4 19V7h16l.002 12H4z" />
                            <path fill="currentColor" d="M14 9h-4v3H7l5 5l5-5h-3z" />
                        </svg>
                    </button>
            </div>
        </div>
    </div>
@endsection
