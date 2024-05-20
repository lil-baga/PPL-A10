@extends('Layout.Sidebar')
@section('title', '| Tambah Berita')
@section('content')
    <div class="w-full bg-white border-l-4 border-gray-200">
        <div class="px-6 py-4">
            <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl text-center">
                Tambahkan Berita
            </h1>
            <form class="space-y-4 md:space-y-6" action="/tambahBerita" method="POST" enctype="multipart/form-data" novalidate>
                @csrf
                <div>
                    <label for="thumbnail" class="block mb-2 text-sm font-medium text-gray-900">Thumbnail</label>
                    <input type="file" name="thumbnail" id="thumbnail" required="">
                    @error('thumbnail')
                        <p class="text-red-500 text-sm font-medium py-2 capitalize" role="alert">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <label for="judul" class="block mb-2 text-sm font-medium text-gray-900">Judul</label>
                    <input type="text" name="judul" id="judul" placeholder="Isi Judul Berita..."
                        class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-[#F5682A] focus:border-[#F5682A] block w-64 p-2.5"
                        required="">
                    @error('judul')
                        <p class="text-red-500 text-sm font-medium py-2 capitalize" role="alert">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <label for="isi" class="block mb-2 text-sm font-medium text-gray-900">Isi Berita</label>
                    <div
                    class="overflow-hidden rounded-lg w-1/2 h-64 border border-gray-300 focus-within:border-[#F5682A] focus-within:ring-1 focus-within:ring-[#F5682A]">
                        <textarea id="isi" name="isi" class="p-2 w-full h-full resize-none border-none align-top focus:ring-0 sm:text-sm" placeholder="Tuliskan Isi Berita..."></textarea>
                    </div>
                    @error('isi')
                    <p class="text-red-500 text-sm font-medium py-2 capitalize" role="alert">{{ $message }}</p>
                    @enderror
                </div>
                <button type="submit"
                    class="items-center justify-center w-full bg-green-500 hover:bg-green-700 flex hover:cursor-pointer text-white font-medium py-2 px-4 rounded">Tambahkan</button>
            </form>
        </div>
    </div>
@endsection
