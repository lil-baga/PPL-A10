@extends('Layout.navbarDashboard')
@section('title', '| Validasi Subsidi')
@section('content')
    <div class="w-full bg-white rounded-lg md:mt-0 xl:p-0">
        <div class="px-6 py-4">
            <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl text-center">
                Validasi Pengajuan Pakan Subsidi
            </h1>
            <form class="space-y-4 md:space-y-6" action="{{ route('validasi.subsidi', $subsidiPakan->id) }}" method="POST"
                enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div>
                    <label for="catatan" class="block mb-2 text-sm font-medium text-gray-900">Catatan</label>
                    <div
                        class="overflow-hidden rounded-lg w-96 border border-gray-300 shadow-sm focus-within:border-[#F5682A] focus-within:ring-1 focus-within:ring-[#F5682A]">
                        <textarea id="catatan" name="catatan" class="p-2 w-96 resize-none border-none align-top focus:ring-0 sm:text-sm"
                            rows="4" placeholder="Berikan Catatan..."></textarea>
                    </div>
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
                    class="items-center justify-center w-full bg-green-500 hover:bg-green-700 flex hover:cursor-pointer text-white font-medium py-2 px-4 rounded">Validasi</button>
            </form>
        </div>
    </div>
@endsection
