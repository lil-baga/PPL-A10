@extends('Layout.Sidebar')
@section('title', '| Detail Subsidi')
@section('content')
    <div class="w-full bg-slate-200 scrollbar">
        <div class="px-12 py-12">
            <div class=" px-6 py-6 shadow-xl bg-white rounded-lg">
                <div class="flex flex-row">
                    <a href="/subsidiPakan"
                        class="button absolute hover:bg-slate-200 hover:rounded-lg content-center w-auto h-auto p-1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <path fill="currentColor"
                                d="M21 11H6.414l5.293-5.293l-1.414-1.414L2.586 12l7.707 7.707l1.414-1.414L6.414 13H21z" />
                        </svg>
                    </a>
                </div>
                <h1 class="text-2xl font-bold text-slate-900 text-center">
                    Detail Pengajuan Pakan Subsidi
                </h1>
                <div class="p-6">
                    <p class="block text-m font-medium text-slate-900"><b>Nama: </b> {{ $currentuser->nama }}</p>
                    <p class="block text-m font-medium text-slate-900"><b>Alamat: </b> {{ $currentuser->alamat }},
                        {{ $kecamatan->nama }}, Jember</p>
                    <p class="block text-m font-medium text-slate-900"><b>Nomor Telepon: </b> {{ $currentuser->kontak }}
                    </p>
                </div>
                <div class="p-6 flex flex-row gap-64">
                    <div class="flex flex-col items-start justify-inline-start max-w-[512px] gap-8">
                        <div class="space-y-2">
                            <p class="flex font-medium text-sm text-slate-900">Surat Pengantar:</p>
                            <a href="{{ url("img/foto_surat/$subsidiPakan->surat_pengantar") }}" target="_blank"
                                class="text-center items-center justify-center w-20 transition-colors bg-slate-900 hover:bg-[#F5682A] flex hover:cursor-pointer text-white font-medium py-2 px-4 rounded gap-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
                                    <path fill="currentColor" d="M11.024 11.536L10 10l-2 3h9l-3.5-5z" />
                                    <circle cx="9.503" cy="7.497" r="1.503" fill="currentColor" />
                                    <path fill="currentColor"
                                        d="M19 2H6c-1.206 0-3 .799-3 3v14c0 2.201 1.794 3 3 3h15v-2H6.012C5.55 19.988 5 19.806 5 19s.55-.988 1.012-1H21V4c0-1.103-.897-2-2-2zm0 14H5V5c0-.806.55-.988 1-1h13v12z" />
                                </svg>
                            </a>
                        </div>
                        <div class="space-y-2">
                            <p class="flex font-medium text-sm text-slate-900">Surat Usaha:</p>
                            <a href="{{ url("img/foto_surat/$subsidiPakan->surat_usaha") }}" target="_blank"
                                class="text-center items-center justify-center w-20 transition-colors bg-slate-900 hover:bg-[#F5682A] flex hover:cursor-pointer text-white font-medium py-2 px-4 rounded gap-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
                                    <path fill="currentColor" d="M11.024 11.536L10 10l-2 3h9l-3.5-5z" />
                                    <circle cx="9.503" cy="7.497" r="1.503" fill="currentColor" />
                                    <path fill="currentColor"
                                        d="M19 2H6c-1.206 0-3 .799-3 3v14c0 2.201 1.794 3 3 3h15v-2H6.012C5.55 19.988 5 19.806 5 19s.55-.988 1.012-1H21V4c0-1.103-.897-2-2-2zm0 14H5V5c0-.806.55-.988 1-1h13v12z" />
                                </svg>
                            </a>
                        </div>
                        <div class="space-y-2">
                            <p class="flex font-medium text-sm text-slate-900">Foto Peternakan:</p>
                            <a href="{{ url("img/foto_peternak/$subsidiPakan->foto_peternakan") }}" target="_blank"
                                class="text-center items-center justify-center w-20 transition-colors bg-slate-900 hover:bg-[#F5682A] flex hover:cursor-pointer text-white font-medium py-2 px-4 rounded gap-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
                                    <path fill="currentColor" d="M11.024 11.536L10 10l-2 3h9l-3.5-5z" />
                                    <circle cx="9.503" cy="7.497" r="1.503" fill="currentColor" />
                                    <path fill="currentColor"
                                        d="M19 2H6c-1.206 0-3 .799-3 3v14c0 2.201 1.794 3 3 3h15v-2H6.012C5.55 19.988 5 19.806 5 19s.55-.988 1.012-1H21V4c0-1.103-.897-2-2-2zm0 14H5V5c0-.806.55-.988 1-1h13v12z" />
                                </svg>
                            </a>
                        </div>
                        <div class="space-y-2">
                            <p class="flex font-medium text-sm text-slate-900">Foto Menerima Pakan Subsidi:</p>
                            @if ($subsidiPakan->foto_konfirmasi == null)
                                <p class="flex leading-normal text-slate-900">
                                    -
                                </p>
                            @else
                                <a href="{{ url("img/foto_peternak/$subsidiPakan->foto_konfirmasi") }}" target="_blank"
                                    class="text-center items-center justify-center w-20 transition-colors bg-slate-900 hover:bg-[#F5682A] flex hover:cursor-pointer text-white font-medium py-2 px-4 rounded gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                        viewBox="0 0 24 24">
                                        <path fill="currentColor" d="M11.024 11.536L10 10l-2 3h9l-3.5-5z" />
                                        <circle cx="9.503" cy="7.497" r="1.503" fill="currentColor" />
                                        <path fill="currentColor"
                                            d="M19 2H6c-1.206 0-3 .799-3 3v14c0 2.201 1.794 3 3 3h15v-2H6.012C5.55 19.988 5 19.806 5 19s.55-.988 1.012-1H21V4c0-1.103-.897-2-2-2zm0 14H5V5c0-.806.55-.988 1-1h13v12z" />
                                    </svg>
                                </a>
                            @endif
                        </div>
                    </div>
                    <div class="flex flex-col items-start justify-inline-start max-w-[512px] gap-8">
                        <div class="space-y-2">
                            <label for="jumlah_ternak" class="flex mb-1 font-medium text-sm text-slate-900">Jumlah
                                Ternak (Ekor)</label>
                            <input type="text" name="jumlah_ternak" id="jumlah_ternak" placeholder="Jumlah Ternak"
                                readonly value="{{ $subsidiPakan->jumlah_ternak }}"
                                class="border border-slate-300 text-slate-900 sm:text-sm rounded-lg focus:ring-[#F5682A] focus:border-[#F5682A] flex w-full p-2.5"
                                required="">
                        </div>
                        <div class="space-y-2">
                            <label for="jumlah_pakan" class="flex mb-1 font-medium text-sm text-slate-900">Ajuan Pakan
                                (Kwintal)</label>
                            <input type="text" name="jumlah_pakan" id="jumlah_pakan" placeholder="Ajuan Pakan (Kwintal)"
                                readonly value="{{ $subsidiPakan->jumlah_pakan }}"
                                class="border border-slate-300 text-slate-900 sm:text-sm rounded-lg focus:ring-[#F5682A] focus:border-[#F5682A] flex w-full p-2.5"
                                required="">
                        </div>
                        <div class="space-y-2">
                            <p class="flex font-medium text-sm text-slate-900">Status Validasi</p>
                            @if ($subsidiPakan->validasi_id == 1)
                                <div
                                    class="flex flex-row items-center justify-center bg-green-400 rounded p-2 w-auto gap-1">
                                    <p class="flex antialiased text-sm leading-normal text-slate-900 font-medium">
                                        {{ $validasi }}
                                    </p>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                        viewBox="0 0 24 24">
                                        <path fill="currentColor"
                                            d="m2.394 13.742l4.743 3.62l7.616-8.704l-1.506-1.316l-6.384 7.296l-3.257-2.486zm19.359-5.084l-1.506-1.316l-6.369 7.279l-.753-.602l-1.25 1.562l2.247 1.798z" />
                                    </svg>
                                </div>
                            @elseif($subsidiPakan->validasi_id == 3)
                                <div class="flex flex-row items-center justify-center bg-red-400 rounded p-2 w-auto gap-1">
                                    <p class="flex antialiased text-sm leading-normal text-slate-900 font-medium">
                                        {{ $validasi }}
                                    </p>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                        viewBox="0 0 24 24">
                                        <path fill="currentColor"
                                            d="M12 2C6.486 2 2 6.486 2 12s4.486 10 10 10s10-4.486 10-10S17.514 2 12 2zM4 12c0-1.846.634-3.542 1.688-4.897l11.209 11.209A7.946 7.946 0 0 1 12 20c-4.411 0-8-3.589-8-8zm14.312 4.897L7.103 5.688A7.948 7.948 0 0 1 12 4c4.411 0 8 3.589 8 8a7.954 7.954 0 0 1-1.688 4.897z" />
                                    </svg>
                                </div>
                            @else
                                <div
                                    class="flex flex-row items-center justify-center bg-yellow-400 rounded p-2 w-auto gap-1">
                                    <p class="flex antialiased text-sm leading-normal text-slate-900 font-medium">
                                        {{ $validasi }}
                                    </p>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                        viewBox="0 0 24 24">
                                        <path fill="currentColor"
                                            d="M12 4c-4.879 0-9 4.121-9 9s4.121 9 9 9s9-4.121 9-9s-4.121-9-9-9zm0 16c-3.794 0-7-3.206-7-7s3.206-7 7-7s7 3.206 7 7s-3.206 7-7 7z" />
                                        <path fill="currentColor"
                                            d="M13 12V8h-2v6h6v-2zm4.284-8.293l1.412-1.416l3.01 3l-1.413 1.417zm-10.586 0l-2.99 2.999L2.29 5.294l2.99-3z" />
                                    </svg>
                                </div>
                            @endif
                        </div>
                        <div class="space-y-2">
                            <p class="flex font-medium text-sm text-slate-900">Status Konfirmasi</p>
                            @if ($subsidiPakan->konfirmasi_id == 1)
                                <div
                                    class="flex flex-row items-center justify-center bg-green-400 rounded p-2 w-auto gap-1">
                                    <p class="flex antialiased text-sm leading-normal text-slate-900 font-medium">
                                        {{ $konfirmasi }}
                                    </p>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                        viewBox="0 0 24 24">
                                        <path fill="currentColor"
                                            d="m2.394 13.742l4.743 3.62l7.616-8.704l-1.506-1.316l-6.384 7.296l-3.257-2.486zm19.359-5.084l-1.506-1.316l-6.369 7.279l-.753-.602l-1.25 1.562l2.247 1.798z" />
                                    </svg>
                                </div>
                            @elseif($subsidiPakan->konfirmasi_id == 3)
                                <div class="flex flex-row items-center justify-center bg-red-400 rounded p-2 w-auto gap-1">
                                    <p class="flex antialiased text-sm leading-normal text-slate-900 font-medium">
                                        {{ $konfirmasi }}
                                    </p>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                        viewBox="0 0 24 24">
                                        <path fill="currentColor"
                                            d="M12 2C6.486 2 2 6.486 2 12s4.486 10 10 10s10-4.486 10-10S17.514 2 12 2zM4 12c0-1.846.634-3.542 1.688-4.897l11.209 11.209A7.946 7.946 0 0 1 12 20c-4.411 0-8-3.589-8-8zm14.312 4.897L7.103 5.688A7.948 7.948 0 0 1 12 4c4.411 0 8 3.589 8 8a7.954 7.954 0 0 1-1.688 4.897z" />
                                    </svg>
                                </div>
                            @else
                                <div
                                    class="flex flex-row items-center justify-center bg-yellow-400 rounded p-2 w-auto gap-1">
                                    <p class="flex antialiased text-sm leading-normal text-slate-900 font-medium">
                                        {{ $konfirmasi }}
                                    </p>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                        viewBox="0 0 24 24">
                                        <path fill="currentColor"
                                            d="M12 4c-4.879 0-9 4.121-9 9s4.121 9 9 9s9-4.121 9-9s-4.121-9-9-9zm0 16c-3.794 0-7-3.206-7-7s3.206-7 7-7s7 3.206 7 7s-3.206 7-7 7z" />
                                        <path fill="currentColor"
                                            d="M13 12V8h-2v6h6v-2zm4.284-8.293l1.412-1.416l3.01 3l-1.413 1.417zm-10.586 0l-2.99 2.999L2.29 5.294l2.99-3z" />
                                    </svg>
                                </div>
                            @endif
                        </div>
                    </div>
                    <div class="flex flex-col items-start justify-inline-start max-w-[512px] gap-8">
                        <div class="space-y-2">
                            <label for="tanggal_pengambilan" class="block mb-2 text-sm font-medium text-slate-900">Tanggal
                                Pengambilan</label>
                            <div
                                class="overflow-hidden rounded-lg w-96 border border-slate-300 focus-within:border-[#F5682A] focus-within:ring-1 focus-within:ring-[#F5682A]">
                                <input readonly type="datetime-local" id="tanggal_pengambilan" name="tanggal_pengambilan"
                                    class="p-2 w-96 resize-none border-none align-top focus:ring-0 sm:text-sm"
                                    rows="4" placeholder="Berikan Tanggal Pengambilan..."
                                    value="{{ $subsidiPakan->tanggal_pengambilan }}">
                            </div>
                        </div>
                        <div class="space-y-2">
                            <div>
                                <label for="catatan" class="flex mb-1 font-medium text-sm text-slate-900">Catatan</label>
                                <div
                                    class="overflow-hidden rounded-lg w-96 h-64 border border-gray-300 focus-within:border-[#F5682A] focus-within:ring-1 focus-within:ring-[#F5682A]">
                                    <textarea id="catatan" name="catatan" readonly
                                        class="p-2 w-full h-full resize-none border-none align-top focus:ring-0 sm:text-sm"
                                        placeholder="Belum Ada Catatan...">{{ $subsidiPakan->catatan }}</textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex flex-row items-center justify-center gap-8 w-full mt-4">
                    @if (Auth::user()->roles_id == 2)
                        @if ($subsidiPakan->validasi_id == 2)
                        @else
                            @if ($subsidiPakan->konfirmasi_id == 1)
                            @else
                            <a href="{{ route('edit.subsidi', Crypt::encryptString($subsidiPakan->id)) }}"
                                class="items-center justify-center w-auto button transition-colors bg-blue-500 flex hover:cursor-pointer hover:bg-blue-700 text-white font-medium py-2 px-4 rounded gap-2">Ubah
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
                                    <path fill="currentColor" d="m7 17.013l4.413-.015l9.632-9.54c.378-.378.586-.88.586-1.414s-.208-1.036-.586-1.414l-1.586-1.586c-.756-.756-2.075-.752-2.825-.003L7 12.583v4.43zM18.045 4.458l1.589 1.583l-1.597 1.582l-1.586-1.585l1.594-1.58zM9 13.417l6.03-5.973l1.586 1.586l-6.029 5.971L9 15.006v-1.589z"/>
                                    <path fill="currentColor" d="M5 21h14c1.103 0 2-.897 2-2v-8.668l-2 2V19H8.158c-.026 0-.053.01-.079.01c-.033 0-.066-.009-.1-.01H5V5h6.847l2-2H5c-1.103 0-2 .897-2 2v14c0 1.103.897 2 2 2z"/>
                                </svg></a>
                            @endif
                        @endif
                        <button id="deleteButton" data-modal-target="deleteModal" data-modal-toggle="deleteModal"
                            class="items-center justify-center w-auto button transition-colors bg-red-500 flex hover:cursor-pointer hover:bg-red-700 text-white font-medium py-2 px-4 rounded gap-2"
                            type="button">Hapus
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
                                <path fill="currentColor" d="M5 20a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V8h2V6h-4V4a2 2 0 0 0-2-2H9a2 2 0 0 0-2 2v2H3v2h2zM9 4h6v2H9zM8 8h9v12H7V8z"/>
                                <path fill="currentColor" d="M9 10h2v8H9zm4 0h2v8h-2z"/>
                            </svg></button>
                        <div id="deleteModal" tabindex="-1" aria-hidden="true"
                            class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-modal md:h-full">
                            <div class="relative p-4 w-full max-w-md h-full md:h-auto">
                                <div class="relative p-4 text-center bg-white rounded-lg sm:p-5">
                                    <p class="mb-4 text-slate-900">Yakin Ingin Menghapus Pengajuan?</p>
                                    <div class="flex justify-center items-center space-x-4">
                                        <button data-modal-toggle="deleteModal" type="button"
                                            class="flex py-2 px-4 transition-colors text-sm font-medium text-white bg-blue-500 rounded hover:bg-blue-700 gap-2">
                                            Tidak
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
                                                <path fill="currentColor" d="M21 11H6.414l5.293-5.293l-1.414-1.414L2.586 12l7.707 7.707l1.414-1.414L6.414 13H21z"/>
                                            </svg>
                                        </button>
                                        <form id='delete' method="POST"
                                            action="{{ route('destroy.subsidi', Crypt::encryptString($subsidiPakan->id)) }}">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit"
                                                class="flex py-2 px-4 transition-colors text-sm font-medium text-center text-white bg-red-500 rounded hover:bg-red-700 gap-2">
                                                Iya
                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
                                                    <path fill="currentColor" d="M5 20a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V8h2V6h-4V4a2 2 0 0 0-2-2H9a2 2 0 0 0-2 2v2H3v2h2zM9 4h6v2H9zM8 8h9v12H7V8z"/>
                                                    <path fill="currentColor" d="M9 10h2v8H9zm4 0h2v8h-2z"/>
                                                </svg>
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @elseif(Auth::user()->roles_id == 3)
                        <a href="{{ route('view.validsubsidi', Crypt::encryptString($subsidiPakan->id)) }}"
                            class="text-center items-center justify-center w-auto bg-green-500 hover:bg-green-700 flex hover:cursor-pointer text-white font-medium py-2 px-4 rounded gap-2">Validasi
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
                                <path fill="currentColor" d="M20.995 6.9a.998.998 0 0 0-.548-.795l-8-4a1 1 0 0 0-.895 0l-8 4a1.002 1.002 0 0 0-.547.795c-.011.107-.961 10.767 8.589 15.014a.987.987 0 0 0 .812 0c9.55-4.247 8.6-14.906 8.589-15.014zM12 19.897C5.231 16.625 4.911 9.642 4.966 7.635L12 4.118l7.029 3.515c.037 1.989-.328 9.018-7.029 12.264z"/>
                                <path fill="currentColor" d="m11 12.586l-2.293-2.293l-1.414 1.414L11 15.414l5.707-5.707l-1.414-1.414z"/>
                            </svg></a>
                    @else
                    @endif
                </div>
            </div>
        </div>
    </div>
    <script>
        document.addEventListener("DOMContentLoaded", function(event) {
            document.getElementById('deleteButton').click();
        });
    </script>
@endsection
