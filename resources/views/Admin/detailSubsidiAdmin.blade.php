<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
    <link rel="icon" type="image" href="{{ url("logoicon.png") }}">
    <title>Subsidi Pakan</title>
</head>
<body>
    <div class="flex flex-row">
        <div class="relative flex flex-col bg-clip-border rounded-xl bg-white text-gray-700 h-[100vh] w-full max-w-[20rem] p-4 shadow-xl shadow-gray-900/5">
          <div class="mb-2 p-2 flex items-center justify-center">
            <img src="{{ url("logobrand.png") }}" alt="" class="flex flex-row w-40 mr-4">
          </div>
          <nav class="flex flex-col gap-1 min-w-[240px] p-2 font-sans text-base font-normal text-gray-700">
            <div role="button" tabindex="0" class="flex items-center w-full p-3 rounded-lg text-start leading-tight transition-all bg-[#F5682A]  text-white outline-none">
              <div class="grid place-items-center mr-4">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" class="h-5 w-5">
                  <path fill-rule="evenodd" d="M6.912 3a3 3 0 00-2.868 2.118l-2.411 7.838a3 3 0 00-.133.882V18a3 3 0 003 3h15a3 3 0 003-3v-4.162c0-.299-.045-.596-.133-.882l-2.412-7.838A3 3 0 0017.088 3H6.912zm13.823 9.75l-2.213-7.191A1.5 1.5 0 0017.088 4.5H6.912a1.5 1.5 0 00-1.434 1.059L3.265 12.75H6.11a3 3 0 012.684 1.658l.256.513a1.5 1.5 0 001.342.829h3.218a1.5 1.5 0 001.342-.83l.256-.512a3 3 0 012.684-1.658h2.844z" clip-rule="evenodd"></path>
                </svg>
              </div><a href="/subsidiAdmin">Pengajuan Pakan Subsidi</a><div class="grid place-items-center ml-auto justify-self-end">
              </div>
            </div>
            <div role="button" tabindex="0" class="flex items-center w-full p-3 rounded-lg text-start leading-tight transition-all hover:bg-[#F5682A]  focus:bg-[#F5682A]  active:bg-[#F5682A]  hover:text-white focus:text-white active:text-white outline-none">
              <div class="grid place-items-center mr-4">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" class="h-5 w-5">
                  <path fill-rule="evenodd" d="M6.912 3a3 3 0 00-2.868 2.118l-2.411 7.838a3 3 0 00-.133.882V18a3 3 0 003 3h15a3 3 0 003-3v-4.162c0-.299-.045-.596-.133-.882l-2.412-7.838A3 3 0 0017.088 3H6.912zm13.823 9.75l-2.213-7.191A1.5 1.5 0 0017.088 4.5H6.912a1.5 1.5 0 00-1.434 1.059L3.265 12.75H6.11a3 3 0 012.684 1.658l.256.513a1.5 1.5 0 001.342.829h3.218a1.5 1.5 0 001.342-.83l.256-.512a3 3 0 012.684-1.658h2.844z" clip-rule="evenodd"></path>
                </svg>
              </div><a href="#">Pengajuan Penyuluhan</a><div class="grid place-items-center ml-auto justify-self-end">
              </div>
            </div>
            <div role="button" tabindex="0" class="flex items-center w-full p-3 rounded-lg text-start leading-tight transition-all hover:bg-[#F5682A]  focus:bg-[#F5682A]  active:bg-[#F5682A]  hover:text-white focus:text-white active:text-white outline-none">
              <div class="grid place-items-center mr-4">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" class="h-5 w-5">
                  <path fill-rule="evenodd" d="M6.912 3a3 3 0 00-2.868 2.118l-2.411 7.838a3 3 0 00-.133.882V18a3 3 0 003 3h15a3 3 0 003-3v-4.162c0-.299-.045-.596-.133-.882l-2.412-7.838A3 3 0 0017.088 3H6.912zm13.823 9.75l-2.213-7.191A1.5 1.5 0 0017.088 4.5H6.912a1.5 1.5 0 00-1.434 1.059L3.265 12.75H6.11a3 3 0 012.684 1.658l.256.513a1.5 1.5 0 001.342.829h3.218a1.5 1.5 0 001.342-.83l.256-.512a3 3 0 012.684-1.658h2.844z" clip-rule="evenodd"></path>
                </svg>
              </div><a href="#">Broadcast</a><div class="grid place-items-center ml-auto justify-self-end">
              </div>
            </div>
            <div role="button" tabindex="0" class="flex items-center w-full p-3 rounded-lg text-start leading-tight transition-all hover:bg-[#F5682A]  focus:bg-[#F5682A]  active:bg-[#F5682A]  hover:text-white focus:text-white active:text-white outline-none">
              <div class="grid place-items-center mr-4">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" class="h-5 w-5">
                  <path fill-rule="evenodd" d="M18.685 19.097A9.723 9.723 0 0021.75 12c0-5.385-4.365-9.75-9.75-9.75S2.25 6.615 2.25 12a9.723 9.723 0 003.065 7.097A9.716 9.716 0 0012 21.75a9.716 9.716 0 006.685-2.653zm-12.54-1.285A7.486 7.486 0 0112 15a7.486 7.486 0 015.855 2.812A8.224 8.224 0 0112 20.25a8.224 8.224 0 01-5.855-2.438zM15.75 9a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0z" clip-rule="evenodd"></path>
                </svg>
              </div><a href="/profilAdmin">Profil</a>
            </div>
            <div role="button" tabindex="0" class="flex items-center w-full p-3 rounded-lg text-start leading-tight transition-all hover:bg-[#F5682A]  focus:bg-[#F5682A]  active:bg-[#F5682A]  hover:text-white focus:text-white active:text-white outline-none">
              <div class="grid place-items-center mr-4">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" class="h-5 w-5">
                  <path fill-rule="evenodd" d="M12 2.25a.75.75 0 01.75.75v9a.75.75 0 01-1.5 0V3a.75.75 0 01.75-.75zM6.166 5.106a.75.75 0 010 1.06 8.25 8.25 0 1011.668 0 .75.75 0 111.06-1.06c3.808 3.807 3.808 9.98 0 13.788-3.807 3.808-9.98 3.808-13.788 0-3.808-3.807-3.808-9.98 0-13.788a.75.75 0 011.06 0z" clip-rule="evenodd"></path>
                </svg>
              </div><a href="/logout">Logout</a>
            </div>
          </nav>
        </div>

        <div class="w-full bg-white rounded-lg shadow md:mt-0 xl:p-0">
            @if(Session::has('success'))
              <div class="bg-green-500 inset-y-0 left-0 top-0 flex flex-col-reverse bottom-0 text-white font-bold py-2 px-4" role="alert">
                {{ Session::get('success') }}
              </div>
            @endif
              <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                    <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl text-center">
                      Detail Pengajuan Pakan Subsidi
                    </h1>
                    <div class="flex flex-row gap-10">
                        <p class="block text-sm font-medium text-gray-900"><b>Nama:</b> {{ $currentuser->name }}</p>
                        <p class="block text-sm font-medium text-gray-900"><b>Alamat:</b> {{ $currentuser->address }}</p>
                        <p class="block text-sm font-medium text-gray-900"><b>Nomor Telepon:</b> {{ $currentuser->phone_number }}</p>
                    </div>
                    <div>
                        <p class="block font-medium text-sm text-gray-900">Surat Pengantar:
                        <p class="block mb-1 font-medium text-sm text-gray-900"><a href="{{ url("image/$foodSubmissions->covering_letter") }}" target="_blank" class="hover:text-[#F5682A]">{{ $foodSubmissions->covering_letter }}</a></p>
                    </div>
                    <div>
                        <p class="block font-medium text-sm text-gray-900">Surat Usaha:
                        <p class="block mb-1 font-medium text-sm text-gray-900"><a href="{{ url("image/$foodSubmissions->business_letter") }}" target="_blank" class="hover:text-[#F5682A]">{{ $foodSubmissions->business_letter }}</a></p>
                    </div>
                    <div>
                        <label for="farm_quantity" class="block mb-1 font-medium text-sm text-gray-900">Jumlah Ternak</label>
                        <input type="text" name="name" id="farm_quantity" placeholder="Jumlah Ternak" readonly value="{{ $foodSubmissions->farm_quantity }}" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-[#F5682A] focus:border-[#F5682A] block w-full p-2.5" required="">
                    </div>
                    <div>
                        <label for="food_quantity" class="block mb-1 font-medium text-sm text-gray-900">Ajuan Pakan (Kwintal)</label>
                        <input type="text" name="name" id="food_quantity" placeholder="Ajuan Pakan (Kwintal)" readonly value="{{ $foodSubmissions->food_quantity }}" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-[#F5682A] focus:border-[#F5682A] block w-full p-2.5" required="">
                    </div>
                    <div>
                        <p class="block font-medium text-sm text-gray-900">Status Validasi</p>
                        @if($foodSubmissions->validation == 'Diterima')
                            <div class="flex flex-col items-center justify-center bg-green-300 rounded-full p-2 w-36">
                            <p class="block antialiased font-sans text-sm leading-normal text-gray-900 font-normal">{{ $foodSubmissions->validation }}</p>
                            </div>
                        @elseif($foodSubmissions->validation == 'Ditolak')
                            <div class="flex flex-col items-center justify-center bg-red-300 rounded-full p-2 w-36">
                            <p class="block antialiased font-sans text-sm leading-normal text-gray-900 font-normal">{{ $foodSubmissions->validation }}</p>
                            </div>
                        @else
                            <div class="flex flex-col items-center justify-center bg-yellow-300 rounded-full p-2 w-36">
                            <p class="block antialiased font-sans text-sm leading-normal text-gray-900 font-normal">{{ $foodSubmissions->validation }}</p>
                            </div>
                        @endif
                    </div>
                    <div>
                        <p class="block font-medium text-sm text-gray-900">Foto Peternakan:</p>
                        <p class="block mb-1 font-medium text-sm text-gray-900"><a href="{{ url("image/$foodSubmissions->farm_picture") }}" target="_blank" class="hover:text-[#F5682A]">{{ $foodSubmissions->farm_picture }}</a></p>
                    </div>
                    <div>
                        <p class="block font-medium text-sm text-gray-900">Foto Pakan Subsidi Yang Diterima:</p>
                        <p class="block mb-1 font-medium text-sm text-gray-900"><a href="{{ url("image/$foodSubmissions->confirm_picture") }}" target="_blank" class="hover:text-[#F5682A]">{{ $foodSubmissions->confirm_picture }}</a></p>
                    </div>
                    <div>
                        <p class="block font-medium text-sm text-gray-900">Status Konfirmasi</p>
                        @if($foodSubmissions->confirmation == 'Sudah Diambil')
                            <div class="flex flex-col items-center justify-center bg-green-300 rounded-full p-2 w-36">
                            <p class="block antialiased font-sans text-sm leading-normal text-gray-900 font-normal">{{ $foodSubmissions->confirmation }}</p>
                            </div>
                        @elseif($foodSubmissions->confirmation == 'Belum Diambil')
                            <div class="flex flex-col items-center justify-center bg-red-300 rounded-full p-2 w-36">
                            <p class="block antialiased font-sans text-sm leading-normal text-gray-900 font-normal">{{ $foodSubmissions->confirmation }}</p>
                            </div>
                        @else
                            <div class="flex flex-col items-center justify-center bg-yellow-300 rounded-full p-2 w-36">
                            <p class="block antialiased font-sans text-sm leading-normal text-gray-900 font-normal">{{ $foodSubmissions->confirmation }}</p>
                            </div>
                        @endif
                    </div>
                    <div>
                        <label for="government_note" class="block mb-1 font-medium text-sm text-gray-900">Catatan</label>
                        <input type="text" name="name" id="government_note" placeholder="-" readonly value="{{ $foodSubmissions->government_note }}" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-[#F5682A] focus:border-[#F5682A] block w-full p-2.5" required="">
                    </div>
              </div>
          </div>
    </div>
  </div>
</body>