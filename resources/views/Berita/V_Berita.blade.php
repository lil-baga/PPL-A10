@extends('Layout.navbarDashboard')
@section('title', '| Subsidi Pakan')
@section('content')
    <div class="w-screen px-0 flex flex-col">
        <div class="mt-4">
            <h1 class="text-2xl font-bold text-gray-900 text-center">
                Berita Terkini
            </h1>
        </div>
        @if ($broadcastBerita->count() > 0)
            <?php $no = 1; ?>
            @foreach ($broadcastBerita as $bb)
                <div class="py-4 px-12 w-full overflow-auto">
                    <div class="w-full bg-white border border-gray-200">
                        <div class="w-full h-64 overflow-clip">
                            <img src="{{ url('foto_berita/' . $bb->thumbnail) }}" class="w-full">
                        </div>
                        <div class="p-6 flex flex-row justify-between">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">{{ $bb->judul }}</h5>
                            <div class="flex gap-8">
                                <a href="#"
                                    class="items-center justify-center w-48 bg-[#F5682A] hover:bg-[#F54C2A] flex hover:cursor-pointer text-white font-medium py-2 px-4 rounded">
                                    Selengkapnya
                                    <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                                    </svg>
                                </a>
                                <a href="{{ route('edit.berita', $bb->id) }}"
                                    class="button bg-blue-500 inset-y-0 left-0 top-0 flex flex-col-reverse bottom-0 hover:cursor-pointer hover:bg-blue-700 text-white font-medium py-2 px-4 rounded w-16 ">
                                    Edit
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        @else
            <h1 class="py-4 px-12 text-m font-medium text-gray-900">Belum Ada Berita...</h1>
        @endif
        @if (Auth::user()->roles_id == 3)
            <div class="flex flex-row items-center justify-center">
                <a href="/tambahBerita"
                    class="button bg-green-500 inset-y-0 left-0 top-0 flex flex-col-reverse mt-6 bottom-0 hover:cursor-pointer hover:bg-green-700 text-white font-medium py-2 px-4 rounded">
                    Tambah
                </a>
            </div>
            <br>
        @else
        @endif
    </div>
@endsection
