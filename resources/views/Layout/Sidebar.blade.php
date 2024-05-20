<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .remove-arrow::-webkit-inner-spin-button,
        .remove-arrow::-webkit-outer-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        .remove-arrow {
            -moz-appearance: textfield;
        }

        .scrollbar::-webkit-scrollbar {
            width: 20px;
        }

        .scrollbar::-webkit-scrollbar-track {
            background: #fff;
        }

        .scrollbar::-webkit-scrollbar-thumb {
            background: #000;
        }
    </style>
    <link rel="stylesheet" href="./resources/output.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
    <link rel="icon" type="image" href="{{ url('img/assets/logoicon.png') }}">
    <title>Chick&Check @yield('title')</title>
</head>

<body class="font-[poppins] font-medium">
    <div class="flex flex-row">
        <div class="relative flex flex-col bg-clip-border bg-white text-slate-900 h-screen w-full max-w-[320px] p-4">
            <div class="mb-2 p-2 flex items-center justify-center">
                <img src="{{ url('img/assets/logobrand.png') }}" alt="" class="flex flex-row w-64 mr-4">
            </div>
            <h1 class="p-2 bg-slate-900 hover:bg-[#F5682A] text-white flex items-center justify-center max-w-[280px]">
                Halo, {{ Auth::user()->nama }}!
            </h1>
            <nav class="flex flex-col gap-1 max-w-[280px] p-2 text-sm font-normal text-slate-900">
                <a href="/subsidiPakan" role="button" tabindex="0"
                    class="flex items-center w-full p-3 rounded-lg text-start leading-tight transition-colors hover:bg-[#F5682A]  focus:bg-[#F5682A]  active:bg-[#F5682A]  hover:text-white focus:text-white active:text-white outline-none">
                    <div class="grid place-items-center mr-4">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
                            <path fill="currentColor"
                                d="M7.64 21.71a8 8 0 0 0 5.6-2.47l6-6c2.87-2.87 3.31-7.11 1-9.45s-6.58-1.91-9.45 1l-6 6c-2.87 2.87-3.31 7.11-1 9.45a5.38 5.38 0 0 0 3.85 1.47zm-2-9l2.78 2.79l1.42-1.42l-2.79-2.79l1.41-1.41l2.83 2.83l1.42-1.42l-2.83-2.83l1.41-1.41l2.83 2.83l1.42-1.42l-2.79-2.78c2-1.61 4.65-1.87 6-.47s1.09 4.56-1 6.62l-6 6c-2.06 2.05-5.09 2.5-6.62 1s-1.06-4.07.55-6.08z" />
                        </svg>
                    </div>Pakan Subsidi
                </a>
                <a href="/penyuluhanTernak" role="button" tabindex="0"
                    class="flex items-center w-full p-3 rounded-lg text-start leading-tight transition-colors hover:bg-[#F5682A]  focus:bg-[#F5682A]  active:bg-[#F5682A]  hover:text-white focus:text-white active:text-white outline-none">
                    <div class="grid place-items-center mr-4">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
                            <path fill="currentColor"
                                d="M10 18a7.952 7.952 0 0 0 4.897-1.688l4.396 4.396l1.414-1.414l-4.396-4.396A7.952 7.952 0 0 0 18 10c0-4.411-3.589-8-8-8s-8 3.589-8 8s3.589 8 8 8zm0-14c3.309 0 6 2.691 6 6s-2.691 6-6 6s-6-2.691-6-6s2.691-6 6-6z" />
                            <path fill="currentColor"
                                d="M11.412 8.586c.379.38.588.882.588 1.414h2a3.977 3.977 0 0 0-1.174-2.828c-1.514-1.512-4.139-1.512-5.652 0l1.412 1.416c.76-.758 2.07-.756 2.826-.002z" />
                        </svg>
                    </div>Penyuluhan Ternak
                </a>
                <a href="/broadcastBerita" role="button" tabindex="0"
                    class="flex items-center w-full p-3 rounded-lg text-start leading-tight transition-colors hover:bg-[#F5682A]  focus:bg-[#F5682A]  active:bg-[#F5682A]  hover:text-white focus:text-white active:text-white outline-none">
                    <div class="grid place-items-center mr-4">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
                            <path fill="currentColor"
                                d="M19.875 3H4.125C2.953 3 2 3.897 2 5v14c0 1.103.953 2 2.125 2h15.75C21.047 21 22 20.103 22 19V5c0-1.103-.953-2-2.125-2zm0 16H4.125c-.057 0-.096-.016-.113-.016c-.007 0-.011.002-.012.008L3.988 5.046c.007-.01.052-.046.137-.046h15.75c.079.001.122.028.125.008l.012 13.946c-.007.01-.052.046-.137.046z" />
                            <path fill="currentColor" d="M6 7h6v6H6zm7 8H6v2h12v-2h-4zm1-4h4v2h-4zm0-4h4v2h-4z" />
                        </svg>
                    </div>Broadcast Informasi
                </a>
                <a href="/profilUser" role="button" tabindex="0"
                    class="flex items-center w-full p-3 rounded-lg text-start leading-tight transition-colors hover:bg-[#F5682A]  focus:bg-[#F5682A]  active:bg-[#F5682A]  hover:text-white focus:text-white active:text-white outline-none">
                    <div class="grid place-items-center mr-4">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
                            <path fill="currentColor"
                                d="M9.715 12c1.151 0 2-.849 2-2s-.849-2-2-2s-2 .849-2 2s.848 2 2 2z" />
                            <path fill="currentColor"
                                d="M20 4H4c-1.103 0-2 .841-2 1.875v12.25C2 19.159 2.897 20 4 20h16c1.103 0 2-.841 2-1.875V5.875C22 4.841 21.103 4 20 4zm0 14l-16-.011V6l16 .011V18z" />
                            <path fill="currentColor"
                                d="M14 9h4v2h-4zm1 4h3v2h-3zm-1.57 2.536c0-1.374-1.676-2.786-3.715-2.786S6 14.162 6 15.536V16h7.43v-.464z" />
                        </svg>
                    </div>Profil
                </a>
                <button id="logoutButton" data-modal-target="logoutModal" data-modal-toggle="logoutModal"
                    class="flex items-center w-full p-3 rounded-lg text-start leading-tight transition-colors hover:bg-[#F5682A]  focus:bg-[#F5682A]  active:bg-[#F5682A]  hover:text-white focus:text-white active:text-white outline-none">
                    <div class="grid place-items-center mr-4">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
                            <path fill="currentColor" d="m2 12l5 4v-3h9v-2H7V8z" />
                            <path fill="currentColor"
                                d="M13.001 2.999a8.938 8.938 0 0 0-6.364 2.637L8.051 7.05c1.322-1.322 3.08-2.051 4.95-2.051s3.628.729 4.95 2.051s2.051 3.08 2.051 4.95s-.729 3.628-2.051 4.95s-3.08 2.051-4.95 2.051s-3.628-.729-4.95-2.051l-1.414 1.414c1.699 1.7 3.959 2.637 6.364 2.637s4.665-.937 6.364-2.637c1.7-1.699 2.637-3.959 2.637-6.364s-.937-4.665-2.637-6.364a8.938 8.938 0 0 0-6.364-2.637z" />
                        </svg>
                    </div>Logout
                </button>
            </nav>
            <div id="logoutModal" tabindex="-1" aria-hidden="true"
                class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-modal md:h-full">
                <div class="relative p-4 w-full max-w-md h-full md:h-auto">
                    <div class="relative p-4 text-center bg-white rounded-lg sm:p-5">
                        <p class="mb-4 text-gray-900">Yakin Ingin Logout?</p>
                        <div class="flex justify-center items-center space-x-4">
                            <button data-modal-toggle="logoutModal" type="button"
                                class="flex py-2 px-4 transition-colors text-sm font-medium text-white bg-blue-500 rounded hover:bg-blue-700 gap-2">
                                Tidak
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                    viewBox="0 0 24 24">
                                    <path fill="currentColor"
                                        d="M21 11H6.414l5.293-5.293l-1.414-1.414L2.586 12l7.707 7.707l1.414-1.414L6.414 13H21z" />
                                </svg>
                            </button>
                            <form id='logout' action="/logout">
                                @csrf
                                <button type="submit"
                                    class="flex py-2 px-4 transition-colors text-sm font-medium text-center text-white bg-red-500 rounded hover:bg-red-700 gap-2">
                                    Iya
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                        viewBox="0 0 24 24">
                                        <path fill="currentColor"
                                            d="M5 20a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V8h2V6h-4V4a2 2 0 0 0-2-2H9a2 2 0 0 0-2 2v2H3v2h2zM9 4h6v2H9zM8 8h9v12H7V8z" />
                                        <path fill="currentColor" d="M9 10h2v8H9zm4 0h2v8h-2z" />
                                    </svg>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <footer
                class="fixed font-medium bottom-0 left-0 z-10 w-[320px] p-2 bg-white shadow md:flex md:items-center md:justify-center">
                <p class="text-sm text-[#F5682A] text-center">© 2024 <a
                        href="https://docs.google.com/document/d/167jNoQAbCq6WD8fNQgyfTdpghg5DldRu" target="_blank"
                        class="hover:underline">Kelompok A10™ - Chick&Check</a>
                </p>
            </footer>
        </div>
        @yield('content')
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function(event) {
            document.getElementById('logoutButton').click();
        });
    </script>
</body>

</html>
