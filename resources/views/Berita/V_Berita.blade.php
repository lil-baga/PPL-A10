@extends('Layout.Sidebar')
@section('title', '| Broadcast Berita')
@section('content')
    <div class="w-full bg-slate-200 scrollbar">
        @if (Session::has('success'))
            <div id="alert-border-3"
                class="flex absolute w-auto justify-center p-4 mb-4 text-slate-800 border-t-4 border-green-300 bg-green-50 z-50"
                role="alert">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
                    <path fill="currentColor"
                        d="M5 22h14c1.103 0 2-.897 2-2V5c0-1.103-.897-2-2-2h-2a1 1 0 0 0-1-1H8a1 1 0 0 0-1 1H5c-1.103 0-2 .897-2 2v15c0 1.103.897 2 2 2zM5 5h2v2h10V5h2v15H5V5z" />
                    <path fill="currentColor" d="m11 13.586l-1.793-1.793l-1.414 1.414L11 16.414l5.207-5.207l-1.414-1.414z" />
                </svg>
                <div class="mx-3 text-sm font-medium">
                    {{ Session::get('success') }}
                </div>
                <button type="button"
                    class="ms-auto -mx-1.5 -my-1.5 bg-green-50 text-slate-500 rounded-lg p-1.5 hover:bg-slate-200 inline-flex items-center justify-center ml-8 h-8 w-8"
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
            <div class="px-8 py-8 shadow-xl bg-white rounded-lg overflow-auto">
                <h1 class="text-2xl font-bold text-gray-900 text-center">
                    Broadcast Berita
                </h1>
                <div class="flex flex-col h-[540px] overflow-auto mt-4">
                    <div class="flex flex-col mt-4">
                        @if ($broadcastBerita->count() > 0)
                            @foreach ($broadcastBerita as $bb)
                                <div class="py-4 px-12 w-full">
                                    <div class="w-full bg-white border border-gray-200">
                                        <div class="w-full flex">
                                            <div class="h-54 w-64 flex-none bg-cover bg-center rounded-t lg:rounded-t-none lg:rounded-l text-center overflow-hidden"
                                                style="background-image: url('{{ 'img/foto_berita/' . $bb->thumbnail }}')">
                                            </div>
                                            <div
                                                class="flex w-full border-r border-b border-l border-slate-200 lg:border-l-0 lg:border-t lg:border-slate-200 bg-white rounded-b lg:rounded-b-none lg:rounded-r p-4 flex-col justify-between leading-normal">
                                                <div class="mb-4">
                                                    <div class="text-black font-bold text-xl mb-2">{{ $bb->judul }}</div>
                                                    <p
                                                        class="truncate text-slate-900 text-medium max-w-[1080px] max-h-[146px]">
                                                        {{ $bb->isi }}...</p>
                                                </div>
                                                <div class="flex gap-4 mb-8">
                                                    <a href="{{ route('detail.berita', Crypt::encryptString($bb->id)) }}"
                                                        class="items-center justify-center w-48 h-10 bg-[#F5682A] hover:bg-[#F54C2A] flex hover:cursor-pointer text-white font-medium py-2 px-4 rounded">
                                                        Selengkapnya
                                                        <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true"
                                                            xmlns="http://www.w3.org/2000/svg" fill="none"
                                                            viewBox="0 0 14 10">
                                                            <path stroke="currentColor" stroke-linecap="round"
                                                                stroke-linejoin="round" stroke-width="2"
                                                                d="M1 5h12m0 0L9 1m4 4L9 9" />
                                                        </svg>
                                                    </a>
                                                    @if (Auth::user()->roles_id == 3)
                                                        <a href="{{ route('edit.berita', Crypt::encryptString($bb->id)) }}"
                                                            class="items-center justify-center w-10 h-10 bg-blue-500 hover:bg-blue-700 flex hover:cursor-pointer fill-white font-medium py-2 px-2 rounded">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="20"
                                                                height="20" viewBox="0 0 24 24">
                                                                <path fill="white"
                                                                    d="m7 17.013l4.413-.015l9.632-9.54c.378-.378.586-.88.586-1.414s-.208-1.036-.586-1.414l-1.586-1.586c-.756-.756-2.075-.752-2.825-.003L7 12.583v4.43zM18.045 4.458l1.589 1.583l-1.597 1.582l-1.586-1.585l1.594-1.58zM9 13.417l6.03-5.973l1.586 1.586l-6.029 5.971L9 15.006v-1.589z" />
                                                                <path fill="white"
                                                                    d="M5 21h14c1.103 0 2-.897 2-2v-8.668l-2 2V19H8.158c-.026 0-.053.01-.079.01c-.033 0-.066-.009-.1-.01H5V5h6.847l2-2H5c-1.103 0-2 .897-2 2v14c0 1.103.897 2 2 2z" />
                                                            </svg>
                                                        </a>
                                                        <button id="deleteButton/{{ $bb->id }}"
                                                            data-modal-target="deleteModal/{{ $bb->id }}"
                                                            data-modal-toggle="deleteModal/{{ $bb->id }}"
                                                            class="items-center justify-center w-10 h-10 button bg-red-500 flex hover:cursor-pointer hover:bg-red-700 text-white font-medium py-2 px-2 rounded"
                                                            type="button">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="20"
                                                                height="20" viewBox="0 0 24 24">
                                                                <path fill="currentColor"
                                                                    d="M5 20a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V8h2V6h-4V4a2 2 0 0 0-2-2H9a2 2 0 0 0-2 2v2H3v2h2zM9 4h6v2H9zM8 8h9v12H7V8z" />
                                                                <path fill="currentColor" d="M9 10h2v8H9zm4 0h2v8h-2z" />
                                                            </svg></button>
                                                        <div id="deleteModal/{{ $bb->id }}" tabindex="-1"
                                                            aria-hidden="true"
                                                            class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-modal md:h-full">
                                                            <div class="relative p-4 w-full max-w-md h-full md:h-auto">
                                                                <div
                                                                    class="relative p-4 text-center bg-white rounded-lg sm:p-5">
                                                                    <p class="mb-4 text-gray-900">Yakin Ingin Menghapus
                                                                        Berita?</p>
                                                                    <div class="flex justify-center items-center space-x-4">
                                                                        <button
                                                                            data-modal-toggle="deleteModal/{{ $bb->id }}"
                                                                            type="button"
                                                                            class="flex py-2 px-4 transition-colors text-sm font-medium text-white bg-blue-500 rounded hover:bg-blue-700 gap-2">
                                                                            Tidak
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="20" height="20"
                                                                                viewBox="0 0 24 24">
                                                                                <path fill="currentColor"
                                                                                    d="M21 11H6.414l5.293-5.293l-1.414-1.414L2.586 12l7.707 7.707l1.414-1.414L6.414 13H21z" />
                                                                            </svg>
                                                                        </button>
                                                                        <form id='delete' method="POST"
                                                                            action="{{ route('destroy.berita', Crypt::encryptString($bb->id)) }}">
                                                                            @csrf
                                                                            @method('DELETE')
                                                                            <button type="submit"
                                                                                class="flex py-2 px-4 transition-colors text-sm font-medium text-center text-white bg-red-500 rounded hover:bg-red-700 gap-2">
                                                                                Iya
                                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                                    width="20" height="20"
                                                                                    viewBox="0 0 24 24">
                                                                                    <path fill="currentColor"
                                                                                        d="M5 20a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V8h2V6h-4V4a2 2 0 0 0-2-2H9a2 2 0 0 0-2 2v2H3v2h2zM9 4h6v2H9zM8 8h9v12H7V8z" />
                                                                                    <path fill="currentColor"
                                                                                        d="M9 10h2v8H9zm4 0h2v8h-2z" />
                                                                                </svg>
                                                                            </button>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @else
                                                    @endif
                                                </div>
                                                <div class="flex items-center gap-2">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                        viewBox="0 0 24 24">
                                                        <path fill="currentColor" d="M13 19v-4h3l-4-5l-4 5h3v4z" />
                                                        <path fill="currentColor"
                                                            d="M7 19h2v-2H7c-1.654 0-3-1.346-3-3c0-1.404 1.199-2.756 2.673-3.015l.581-.102l.192-.558C8.149 8.274 9.895 7 12 7c2.757 0 5 2.243 5 5v1h1c1.103 0 2 .897 2 2s-.897 2-2 2h-3v2h3c2.206 0 4-1.794 4-4a4.01 4.01 0 0 0-3.056-3.888C18.507 7.67 15.56 5 12 5C9.244 5 6.85 6.611 5.757 9.15C3.609 9.792 2 11.82 2 14c0 2.757 2.243 5 5 5z" />
                                                    </svg>
                                                    <div class="text-sm">
                                                        <p class="text-slate-900">
                                                            {{ $bb->created_at->translatedFormat('l, d F Y H:i') }}</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @else
                            <h1 class="py-4 px-12 text-sm text-center font-medium text-gray-900">Belum Ada Berita...</h1>
                        @endif
                    </div>
                </div>
            </div>
            @if (Auth::user()->roles_id == 3)
                <div class="flex flex-row items-center justify-center">
                    <a href="/tambahBerita"
                        class="button items-center justify-center transition-colors bg-green-500 inset-y-0 left-0 top-0 flex flex-row mt-6 bottom-0 hover:cursor-pointer hover:bg-green-700 text-white font-medium py-2 px-4 rounded gap-2">
                        Tambah
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
                            <path fill="currentColor"
                                d="m21.706 5.292l-2.999-2.999A.996.996 0 0 0 18 2H6a.996.996 0 0 0-.707.293L2.294 5.292A.994.994 0 0 0 2 6v13c0 1.103.897 2 2 2h16c1.103 0 2-.897 2-2V6a.994.994 0 0 0-.294-.708zM6.414 4h11.172l1 1H5.414l1-1zM4 19V7h16l.002 12H4z" />
                            <path fill="currentColor" d="M14 9h-4v3H7l5 5l5-5h-3z" />
                        </svg>
                    </a>
                </div>
            @else
            @endif
        </div>
    </div>
@endsection
