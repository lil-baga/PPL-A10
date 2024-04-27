@extends('Layout.navbarDashboard')
@section('title', '| Edit Subsidi')
@section('content')
    <div class="w-full bg-white rounded-lg shadow md:mt-0 xl:p-0">
        <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
            <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl text-center">
                Ubah Pengajuan Pakan Subsidi
            </h1>
            <form class="space-y-4 md:space-y-6" action="{{ route('update.subsidi', $foodSubmissions->id) }}" method="POST"
                enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div>
                    <label for="covering" class="block mb-2 text-sm font-medium text-gray-900">Surat
                        Pengantar</label>
                    <input type="file" name="covering_letter" id="covering_letter"
                        value="{{ $foodSubmissions->covering_letter }}">
                </div>
                <div>
                    <label for="business" class="block mb-2 text-sm font-medium text-gray-900">Surat Usaha</label>
                    <input type="file" name="business_letter" id="business_letter"
                        value="{{ $foodSubmissions->business_letter }}">
                </div>
                <div>
                    <label for="farm_quantity" class="block mb-2 text-sm font-medium text-gray-900">Jumlah
                        Ternak</label>
                    <input type="number" name="farm_quantity" id="farm_quantity"
                        value="{{ $foodSubmissions->farm_quantity }}" placeholder="Jumlah Ternak"
                        class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-[#F5682A] focus:border-[#F5682A] block w-full p-2.5 remove-arrow"
                        required="">
                </div>
                <div>
                    <label for="food_quantity" class="block mb-2 text-sm font-medium text-gray-900">Ajuan Pakan
                        (Kwintal)</label>
                    <input type="number" name="food_quantity" id="food_quantity"
                        value="{{ $foodSubmissions->food_quantity }}" placeholder="Ajuan Pakan (Kwintal)"
                        class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-[#F5682A] focus:border-[#F5682A] block w-full p-2.5 remove-arrow"
                        required="">
                </div>
                <div>
                    <label for="farm_picture" class="block mb-2 text-sm font-medium text-gray-900">Foto
                        Peternakan</label>
                    <input type="file" name="farm_picture" id="farm_picture"
                        value="{{ $foodSubmissions->farm_picture }}">
                </div>
                <div>
                    <label for="confirm_picture" class="block mb-2 text-sm font-medium text-gray-900">Foto Pakan
                        Subsidi Yang Diterima</label>
                    <input type="file" name="confirm_picture" id="confirm_picture"
                        value="{{ $foodSubmissions->confirm_picture }}">
                </div>
                <div class="flex flex-row gap-10">
                    <div class="flex flex-row items-center justify-center gap-6">
                        <div class="flex flex-col items-center justify-center">
                            <label for="Sudah" class="block mb-2 text-sm font-medium text-gray-900">Sudah
                                Diambil</label>
                            <input type="radio" name="confirmation" id="Sudah" value="Sudah Diambil"
                                @if ($foodSubmissions->confirmation == 'Sudah Diambil') checked @endif
                                onclick="if(this.checked) {Belum.checked=false;} {Proses.checked=false;}"
                                class="bg-gray-50 border border-gray-500 text-gray-900 sm:text-sm rounded-lg focus:ring-[#F5682A] focus:border-[#F5682A] block p-2.5">
                        </div>
                        <div class="flex flex-col items-center justify-center">
                            <label for="Proses" class="block mb-2 text-sm font-medium text-gray-900"> Proses
                                Validasi</label>
                            <input type="radio" name="confirmation" id="Proses" value="Proses Validasi"
                                @if ($foodSubmissions->confirmation == 'Proses Validasi') checked @endif
                                onclick="if(this.checked) {Sudah.checked=false;} {Belum.checked=false;}"
                                class="bg-gray-50 border border-gray-500 text-gray-900 sm:text-sm rounded-lg focus:ring-[#F5682A] focus:border-[#F5682A] block p-2.5">
                        </div>
                        <div class="flex flex-col items-center justify-center">
                            <label for="Belum" class="block mb-2 text-sm font-medium text-gray-900"> Belum
                                Diambil</label>
                            <input type="radio" name="confirmation" id="Belum" value="Belum Diambil"
                                @if ($foodSubmissions->confirmation == 'Belum Diambil') checked @endif
                                onclick="if(this.checked) {Sudah.checked=false;} {Proses.checked=false;}"
                                class="bg-gray-50 border border-gray-500 text-gray-900 sm:text-sm rounded-lg focus:ring-[#F5682A] focus:border-[#F5682A] block p-2.5">
                        </div>
                    </div>
                </div>
                <button type="submit"
                    class="w-full text-white bg-[#F5682A] hover:bg-[#F54C2A] focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Simpan
                    Perubahan</button>
            </form>
        </div>
    </div>
@endsection
