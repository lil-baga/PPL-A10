@extends('Layout.navbarDashboard')
@section('title', '| Validasi Subsidi')
@section('content')
    <div class="w-full bg-white rounded-lg shadow md:mt-0 xl:p-0">
        <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
            <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl text-center">
                Validasi Pengajuan Pakan Subsidi
            </h1>
            <form class="space-y-4 md:space-y-6" action="{{ route('validate.subsidi', $subsidiPakan->id) }}" method="POST"
                enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div>
                    <label for="catatan" class="block mb-2 text-sm font-medium text-gray-900">Catatan
                        Dinas</label>
                    <input type="text" name="catatan" id="catatan" placeholder="Beri Catatan"
                        class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-[#F5682A] focus:border-[#F5682A] block w-full p-2.5">
                </div>
                <div class="flex flex-row gap-10">
                    <div class="flex flex-row items-center justify-center gap-6">
                        <div class="flex flex-col items-center justify-center">
                            <label for="Sudah" class="block mb-2 text-sm font-medium text-gray-900">Diterima</label>
                            <input type="radio" name="validasi" id="Sudah" value="Diterima"
                                @if ($subsidiPakan->validasi == 'Diterima') checked @endif
                                onclick="if(this.checked) {Belum.checked=false;} {Proses.checked=false;}"
                                class="bg-gray-50 border border-gray-500 text-gray-900 sm:text-sm rounded-lg focus:ring-[#F5682A] focus:border-[#F5682A] block p-2.5">
                        </div>
                        <div class="flex flex-col items-center justify-center">
                            <label for="Proses" class="block mb-2 text-sm font-medium text-gray-900">Diproses</label>
                            <input type="radio" name="validasi" id="Proses" value="Diproses"
                                @if ($subsidiPakan->validasi == 'Diproses') checked @endif
                                onclick="if(this.checked) {Sudah.checked=false;} {Belum.checked=false;}"
                                class="bg-gray-50 border border-gray-500 text-gray-900 sm:text-sm rounded-lg focus:ring-[#F5682A] focus:border-[#F5682A] block p-2.5">
                        </div>
                        <div class="flex flex-col items-center justify-center">
                            <label for="Belum" class="block mb-2 text-sm font-medium text-gray-900">Ditolak</label>
                            <input type="radio" name="validasi" id="Belum" value="Ditolak"
                                @if ($subsidiPakan->validasi == 'Ditolak') checked @endif
                                onclick="if(this.checked) {Sudah.checked=false;} {Proses.checked=false;}"
                                class="bg-gray-50 border border-gray-500 text-gray-900 sm:text-sm rounded-lg focus:ring-[#F5682A] focus:border-[#F5682A] block p-2.5">
                        </div>
                    </div>
                </div>
                <button type="submit"
                    class="w-full text-white bg-[#F5682A] hover:bg-[#F54C2A] focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Validasi</button>
            </form>
        </div>
    </div>
@endsection
