@extends('Layout.Sidebar')
@section('title', '| Detail Berita')
@section('content')
    <div class="w-full bg-slate-200 scrollbar">
        <div class="px-16 py-16">
            <div class=" px-8 py-8 shadow-xl bg-white rounded-lg overflow-auto">
                <div class="flex flex-row">
                    <a href="/broadcastBerita"
                        class="button absolute hover:bg-slate-200 hover:rounded-lg content-center w-auto h-auto p-1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <path fill="currentColor"
                                d="M21 11H6.414l5.293-5.293l-1.414-1.414L2.586 12l7.707 7.707l1.414-1.414L6.414 13H21z" />
                        </svg>
                    </a>
                </div>
                <div class="flex flex-col items-center justify-center gap-4">
                    <h1 class="text-2xl max-w-[720px] text-wrap text-center font-bold text-gray-900">
                        {{ $broadcastBerita->judul }}
                    </h1>
                    <div class="flex items-center gap-4">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                            viewBox="0 0 24 24">
                            <path fill="currentColor"
                                d="M12 2A10.13 10.13 0 0 0 2 12a10 10 0 0 0 4 7.92V20h.1a9.7 9.7 0 0 0 11.8 0h.1v-.08A10 10 0 0 0 22 12A10.13 10.13 0 0 0 12 2zM8.07 18.93A3 3 0 0 1 11 16.57h2a3 3 0 0 1 2.93 2.36a7.75 7.75 0 0 1-7.86 0zm9.54-1.29A5 5 0 0 0 13 14.57h-2a5 5 0 0 0-4.61 3.07A8 8 0 0 1 4 12a8.1 8.1 0 0 1 8-8a8.1 8.1 0 0 1 8 8a8 8 0 0 1-2.39 5.64z" />
                            <path fill="currentColor"
                                d="M12 6a3.91 3.91 0 0 0-4 4a3.91 3.91 0 0 0 4 4a3.91 3.91 0 0 0 4-4a3.91 3.91 0 0 0-4-4zm0 6a1.91 1.91 0 0 1-2-2a1.91 1.91 0 0 1 2-2a1.91 1.91 0 0 1 2 2a1.91 1.91 0 0 1-2 2z" />
                        </svg>
                        <div class="text-sm">
                            <p class="text-black leading-none">{{ $currentuser->nama }}</p>
                            <p class="text-slate-900">
                                {{ $broadcastBerita->created_at->translatedFormat('l, d F Y H:i') }}</p>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col h-[540px] overflow-auto mt-4">
                    <div class="flex w-full items-center justify-center mt-4">
                        <img src="{{ url('img/foto_berita/' . $broadcastBerita->thumbnail) }}" width="720">
                    </div>
                    <div class="flex text-center items-center justify-center mt-4">
                        <textarea class="flex w-[720px] h-[540px] resize-none text-justify overflow-visible outline-none border-none active:ring-transparent" readonly>{{ $broadcastBerita->isi }}</textarea>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
