@extends('Layout.navbarDashboard')
@section('title', '| {{ $broadcastBerita->judul }}')
@section('content')
    <div class="w-screen px-0 flex flex-col">
        <div class="mt-4">
            <h1 class="text-2xl font-bold text-gray-900 text-center">
                {{ $broadcastBerita->judul }}
            </h1>
            <div class="flex w-full items-center justify-center mt-4">
                <img src="{{ url('foto_berita/' . $broadcastBerita->thumbnail) }}" class="w-[720px]">
            </div>
            <div class="flex  items-center justify-center mt-4">
                <p class="flex w-[1080px] text-center">
                    {{ $broadcastBerita->isi }}
                </p>
            </div>
        </div>
    </div>
@endsection
