@extends('Layout.navbarDashboard')
@section('title', '| Subsidi Pakan')
@section('content')
    <div class=" w-screen px-0 flex flex-col">
        @if (Session::has('success'))
            <div class="bg-green-500 inset-y-0 left-0 top-0 flex flex-col-reverse bottom-0 text-white font-bold py-2 px-4"
                role="alert">
                {{ Session::get('success') }}
            </div>
        @endif
        <table class="w-full min-w-max table-auto text-left">
            <thead>
                <tr class="border-[#F54C2A] bg-[#F5682A]">
                    <th class="cursor-pointer p-4 transition-colors hover:bg-[#F54C2A]">
                        <p
                            class="antialias text-sm text-white flex items-center justify-center gap-2 font-normal leading-none">
                            No.</p>
                    </th>
                    <th class="cursor-pointer p-4 transition-colors hover:bg-[#F54C2A]">
                        <p
                            class="antialias text-sm text-white flex items-center justify-center gap-2 font-normal leading-none">
                            Surat Pengantar</p>
                    </th>
                    <th class="cursor-pointer p-4 transition-colors hover:bg-[#F54C2A]">
                        <p
                            class="antialias text-sm text-white flex items-center justify-center gap-2 font-normal leading-none">
                            Surat Usaha</p>
                    </th>
                    <th class="cursor-pointer p-4 transition-colors hover:bg-[#F54C2A]">
                        <p
                            class="antialias text-sm text-white flex items-center justify-center gap-2 font-normal leading-none">
                            Jumlah Ternak</p>
                    </th>
                    <th class="cursor-pointer p-4 transition-colors hover:bg-[#F54C2A]">
                        <p
                            class="antialias text-sm text-white flex items-center justify-center gap-2 font-normal leading-none">
                            Ajuan Pakan (Kwintal)</p>
                    </th>
                    <th class="cursor-pointer p-4 transition-colors hover:bg-[#F54C2A]">
                        <p
                            class="antialias text-sm text-white flex items-center justify-center gap-2 font-normal leading-none">
                            Foto Peternakan</p>
                    </th>
                    <th class="cursor-pointer p-4 transition-colors hover:bg-[#F54C2A]">
                        <p
                            class="antialias text-sm text-white flex items-center justify-center gap-2 font-normal leading-none">
                            Validasi</p>
                    </th>
                    <th class="cursor-pointer p-4 transition-colors hover:bg-[#F54C2A]">
                        <p
                            class="antialias text-sm text-white flex items-center justify-center gap-2 font-normal leading-none">
                            Foto Penerimaan</p>
                    </th>
                    <th class="cursor-pointer p-4 transition-colors hover:bg-[#F54C2A]">
                        <p
                            class="antialias text-sm text-white flex items-center justify-center gap-2 font-normal leading-none">
                            Konfirmasi</p>
                    </th>
                    <th class="cursor-pointer p-4 transition-colors hover:bg-[#F54C2A]">
                        <p
                            class="antialias text-sm text-white flex items-center justify-center gap-2 font-normal leading-none">
                            Catatan</p>
                    </th>
                    <th class="cursor-pointer p-4 transition-colors hover:bg-[#F54C2A]">
                        <p
                            class="antialias text-sm text-white flex items-center justify-center gap-2 font-normal leading-none">
                            Aksi</p>
                    </th>
                </tr>
            </thead>
            <tbody>
                @if ($subsidiPakan->count() > 0)
                <?php $no = 1?>
                    @if (Auth::user()->roles_id == 2)
                        @foreach ($subsidiPakan as $sp)
                            @if ($sp->users_id == $id)
                                <tr>
                                    <td class="p-4 border-b border-gray-400">
                                        <div class="flex flex-col items-center justify-center">
                                            <p
                                                class="block antialiased text-sm leading-normal text-gray-900 font-normal">
                                                {{ $no++ }}</p>
                                        </div>
                                    </td>
                                    <td class="p-4 border-b border-gray-400">
                                        <div class="flex flex-col items-center justify-center">
                                            <p
                                                class="block antialiased text-sm leading-normal text-gray-900 font-normal">
                                                {{ $sp->surat_pengantar }}</p>
                                        </div>
                                    </td>
                                    <td class="p-4 border-b border-gray-400">
                                        <div class="flex flex-col items-center justify-center">
                                            <p
                                                class="block antialiased text-sm leading-normal text-gray-900 font-normal">
                                                {{ $sp->surat_usaha }}</p>
                                        </div>
                                    </td>
                                    <td class="p-4 border-b border-gray-400">
                                        <div class="flex flex-col items-center justify-center">
                                            <p
                                                class="block antialiased text-sm leading-normal text-gray-900 font-normal">
                                                {{ $sp->jumlah_ternak }}</p>
                                        </div>
                                    </td>
                                    <td class="p-4 border-b border-gray-400">
                                        <div class="flex flex-col items-center justify-center">
                                            <p
                                                class="block antialiased text-sm leading-normal text-gray-900 font-normal">
                                                {{ $sp->jumlah_pakan }}</p>
                                        </div>
                                    </td>
                                    <td class="p-4 border-b border-gray-400">
                                        <div class="flex flex-col items-center justify-center">
                                            <p
                                                class="block antialiased text-sm leading-normal text-gray-900 font-normal">
                                                {{ $sp->foto_peternakan }}</p>
                                        </div>
                                    </td>
                                    <td class="p-4 border-b border-gray-400">
                                        @if ($sp->validasi == 'Diterima')
                                            <div
                                                class="flex flex-col items-center justify-center bg-green-300 rounded-full p-2">
                                                <p
                                                    class="block antialiased text-sm leading-normal text-gray-900 font-normal">
                                                    {{ $sp->validasi }}</p>
                                            </div>
                                        @elseif($sp->validasi == 'Ditolak')
                                            <div
                                                class="flex flex-col items-center justify-center bg-red-300 rounded-full p-2">
                                                <p
                                                    class="block antialiased text-sm leading-normal text-gray-900 font-normal">
                                                    {{ $sp->validasi }}</p>
                                            </div>
                                        @else
                                            <div
                                                class="flex flex-col items-center justify-center bg-yellow-300 rounded-full p-2">
                                                <p
                                                    class="block antialiased text-sm leading-normal text-gray-900 font-normal">
                                                    {{ $sp->validasi }}</p>
                                            </div>
                                        @endif
                                    </td>
                                    <td class="p-4 border-b border-gray-400">
                                        <div class="flex flex-col items-center justify-center">
                                            <p
                                                class="block antialiased text-sm leading-normal text-gray-900 font-normal">
                                                {{ $sp->foto_konfirmasi }}</p>
                                        </div>
                                    </td>
                                    <td class="p-4 border-b border-gray-400">
                                        @if ($sp->konfirmasi == 'Sudah Diambil')
                                            <div
                                                class="flex flex-col items-center justify-center bg-green-300 rounded-full p-2">
                                                <p
                                                    class="block antialiased text-sm leading-normal text-gray-900 font-normal">
                                                    {{ $sp->konfirmasi }}</p>
                                            </div>
                                        @elseif($sp->konfirmasi == 'Belum Diambil')
                                            <div
                                                class="flex flex-col items-center justify-center bg-red-300 rounded-full p-2">
                                                <p
                                                    class="block antialiased text-sm leading-normal text-gray-900 font-normal">
                                                    {{ $sp->konfirmasi }}</p>
                                            </div>
                                        @else
                                            <div
                                                class="flex flex-col items-center justify-center bg-yellow-300 rounded-full p-2">
                                                <p
                                                    class="block antialiased text-sm leading-normal text-gray-900 font-normal">
                                                    {{ $sp->konfirmasi }}</p>
                                            </div>
                                        @endif
                                    </td>
                                    <td class="p-4 border-b border-gray-400">
                                        <div class="flex flex-col items-center justify-center">
                                            <p
                                                class="block antialiased text-sm leading-normal text-gray-900 font-normal">
                                                {{ $sp->catatan }}</p>
                                        </div>
                                    </td>
                                    <td class="p-4 border-b border-gray-400">
                                        <div class="flex flex-row items-center justify-center">
                                            <a href="{{ route('detail.subsidi', $sp->id) }}"
                                                class="button bg-blue-500 inset-y-0 left-0 top-0 flex flex-col-reverse bottom-0 hover:cursor-pointer hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                                                Detail
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            @else
                            @endif
                        @endforeach
                    @else
                        @foreach ($subsidiPakan as $sp)
                            <tr>
                                <td class="p-4 border-b border-gray-400">
                                    <div class="flex flex-col items-center justify-center">
                                        <p
                                            class="block antialiased text-sm leading-normal text-gray-900 font-normal">
                                            {{ $no++ }}</p>
                                    </div>
                                </td>
                                <td class="p-4 border-b border-gray-400">
                                    <div class="flex flex-col items-center justify-center">
                                        <p
                                            class="block antialiased text-sm leading-normal text-gray-900 font-normal">
                                            {{ $sp->surat_pengantar }}</p>
                                    </div>
                                </td>
                                <td class="p-4 border-b border-gray-400">
                                    <div class="flex flex-col items-center justify-center">
                                        <p
                                            class="block antialiased text-sm leading-normal text-gray-900 font-normal">
                                            {{ $sp->surat_usaha }}</p>
                                    </div>
                                </td>
                                <td class="p-4 border-b border-gray-400">
                                    <div class="flex flex-col items-center justify-center">
                                        <p
                                            class="block antialiased text-sm leading-normal text-gray-900 font-normal">
                                            {{ $sp->jumlah_ternak }}</p>
                                    </div>
                                </td>
                                <td class="p-4 border-b border-gray-400">
                                    <div class="flex flex-col items-center justify-center">
                                        <p
                                            class="block antialiased text-sm leading-normal text-gray-900 font-normal">
                                            {{ $sp->jumlah_pakan }}</p>
                                    </div>
                                </td>
                                <td class="p-4 border-b border-gray-400">
                                    <div class="flex flex-col items-center justify-center">
                                        <p
                                            class="block antialiased text-sm leading-normal text-gray-900 font-normal">
                                            {{ $sp->foto_peternakan }}</p>
                                    </div>
                                </td>
                                <td class="p-4 border-b border-gray-400">
                                    @if ($sp->validasi == 'Diterima')
                                        <div
                                            class="flex flex-col items-center justify-center bg-green-300 rounded-full p-2">
                                            <p
                                                class="block antialiased text-sm leading-normal text-gray-900 font-normal">
                                                {{ $sp->validasi }}</p>
                                        </div>
                                    @elseif($sp->validasi == 'Ditolak')
                                        <div class="flex flex-col items-center justify-center bg-red-300 rounded-full p-2">
                                            <p
                                                class="block antialiased text-sm leading-normal text-gray-900 font-normal">
                                                {{ $sp->validasi }}</p>
                                        </div>
                                    @else
                                        <div
                                            class="flex flex-col items-center justify-center bg-yellow-300 rounded-full p-2">
                                            <p
                                                class="block antialiased text-sm leading-normal text-gray-900 font-normal">
                                                {{ $sp->validasi }}</p>
                                        </div>
                                    @endif
                                </td>
                                <td class="p-4 border-b border-gray-400">
                                    <div class="flex flex-col items-center justify-center">
                                        <p
                                            class="block antialiased text-sm leading-normal text-gray-900 font-normal">
                                            {{ $sp->foto_konfirmasi }}</p>
                                    </div>
                                </td>
                                <td class="p-4 border-b border-gray-400">
                                    @if ($sp->konfirmasi == 'Sudah Diambil')
                                        <div
                                            class="flex flex-col items-center justify-center bg-green-300 rounded-full p-2">
                                            <p
                                                class="block antialiased text-sm leading-normal text-gray-900 font-normal">
                                                {{ $sp->konfirmasi }}</p>
                                        </div>
                                    @elseif($sp->konfirmasi == 'Belum Diambil')
                                        <div class="flex flex-col items-center justify-center bg-red-300 rounded-full p-2">
                                            <p
                                                class="block antialiased text-sm leading-normal text-gray-900 font-normal">
                                                {{ $sp->konfirmasi }}</p>
                                        </div>
                                    @else
                                        <div
                                            class="flex flex-col items-center justify-center bg-yellow-300 rounded-full p-2">
                                            <p
                                                class="block antialiased text-sm leading-normal text-gray-900 font-normal">
                                                {{ $sp->konfirmasi }}</p>
                                        </div>
                                    @endif
                                </td>
                                <td class="p-4 border-b border-gray-400">
                                    <div class="flex flex-col items-center justify-center">
                                        <p
                                            class="block antialiased text-sm leading-normal text-gray-900 font-normal">
                                            {{ $sp->catatan }}</p>
                                    </div>
                                </td>
                                <td class="p-4 border-b border-gray-400">
                                    <div class="flex flex-row items-center justify-center">
                                        <a href="{{ route('detail.subsidi', $sp->id) }}"
                                            class="button bg-blue-500 inset-y-0 left-0 top-0 flex flex-col-reverse bottom-0 hover:cursor-pointer hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                                            Detail
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    @endif
                @else
                    <tr>
                        <td class="p-4 border-b border-gray-50" colspan="11">Belum Ada Pengajuan...</td>
                    </tr>
                @endif
            </tbody>
        </table>
        @if (Auth::user()->roles_id == 2)
        <div class="flex flex-row items-center justify-center">
            <a href="/addSubsidi"
                class="button bg-green-500 inset-y-0 left-0 top-0 flex flex-col-reverse mt-6 bottom-0 hover:cursor-pointer hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
                Tambah
            </a>
        </div>
        @else
        @endif
    </div>
@endsection
