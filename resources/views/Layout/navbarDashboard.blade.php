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
    </style>
    <link rel="stylesheet" href="./resources/output.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
    <link rel="icon" type="image" href="{{ url('logoicon.png') }}">
    <title>Chick&Check @yield('title')</title>
</head>

<body class="font-[poppins] font-medium">
    <div class="flex flex-row">
        <div
            class="relative flex flex-col bg-clip-border bg-white text-gray-700 h-full w-full max-w-[320px] p-4">
            <div class="mb-2 p-2 flex items-center justify-center">
                <img src="{{ url('logobrand.png') }}" alt="" class="flex flex-row w-40 mr-4">
            </div>
            <h1 class="p-2 flex items-center justify-center max-w-[280px]">
                Halo, {{ Auth::user()->nama }}!
            </h1>
            <nav class="flex flex-col gap-1 max-w-[280px] p-2 text-sm font-normal text-gray-700">
                <div role="button" tabindex="0"
                    class="flex items-center w-full p-3 rounded-lg text-start leading-tight transition-all hover:bg-[#F5682A]  focus:bg-[#F5682A]  active:bg-[#F5682A]  hover:text-white focus:text-white active:text-white outline-none">
                    <div class="grid place-items-center mr-4">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" aria-hidden="true" class="h-5 w-5">
                            <path fill="currentColor"
                                d="m16.525 4.11l.979.98l2.086-2.085c-.37-.062-.785-.006-1.257.152c-.61.205-1.232.559-1.808.953Zm4.473.316l-2.08 2.078l.972.972c.394-.575.747-1.194.951-1.802c.158-.469.215-.88.157-1.248Zm-2.336 4.65l-1.159-1.159L15.93 9.49l1.338 1.338l.989-1.243l.406-.51Zm-2.65 3.326l-1.497-1.499l-2.06 2.058c.996-.053 1.994.04 2.902.263l.655-.822Zm1.31 1.566a9.27 9.27 0 0 1 1.01.614a8.186 8.186 0 0 1 .8.64l.05.046l.016.016l.005.005l.002.002h.001l.001.002l1.374 1.374l-1.904.317h-.003a6.255 6.255 0 0 0-.883.33c-.677.311-1.74.898-3.191 1.986c-.15.112-.325.25-.523.404c-1.004.786-2.576 2.017-4.257 2.687c-1.029.41-2.196.656-3.381.423c-1.173-.23-2.247-.905-3.154-2.1c-1.194-.906-1.869-1.98-2.1-3.153c-.232-1.186.013-2.352.424-3.381c.67-1.68 1.9-3.254 2.686-4.257c.155-.198.293-.373.405-.523c1.088-1.45 1.674-2.515 1.985-3.192c.155-.338.24-.58.286-.725a2.283 2.283 0 0 0 .045-.16l.317-1.904l1.374 1.374l.002.001l.002.002l.005.006l.015.015a3.773 3.773 0 0 1 .2.221a9.073 9.073 0 0 1 1.091 1.622l4.356-3.443c.825-.66 2.026-1.523 3.32-1.956c1.328-.445 2.933-.48 4.23.825c1.292 1.3 1.255 2.9.81 4.225c-.435 1.291-1.297 2.489-1.956 3.313h-.002l-.002.005l-.957 1.202l-1.688 2.12l-.811 1.017Zm-2.4-8.632l-1.757 1.387l1.35 1.352l1.574-1.572l-1.167-1.167ZM13.1 9.489l-1.515-1.517l-.816.646c.227.917.323 1.925.268 2.932L13.1 9.489Zm-3.474 6.298L5.36 20.053c.495.476.99.706 1.463.798c.677.133 1.435.01 2.256-.318c1.382-.55 2.667-1.552 3.685-2.345c.226-.175.438-.34.635-.488c1.242-.932 2.251-1.543 3.026-1.943a6.82 6.82 0 0 0-1.02-.44c-1.822-.61-4.228-.477-5.779.47Zm-5.68 2.852l4.266-4.266c.95-1.557 1.081-3.975.462-5.8a6.83 6.83 0 0 0-.432-1c-.4.776-1.011 1.784-1.943 3.027c-.148.197-.313.41-.489.635c-.793 1.018-1.793 2.302-2.345 3.685c-.327.82-.45 1.58-.318 2.256c.093.472.323.968.799 1.463Z" />
                        </svg>
                    </div><a href="/subsidiPakan">Pengajuan Pakan Subsidi</a>
                </div>
                <div role="button" tabindex="0"
                    class="flex items-center w-full p-3 rounded-lg text-start leading-tight transition-all hover:bg-[#F5682A]  focus:bg-[#F5682A]  active:bg-[#F5682A]  hover:text-white focus:text-white active:text-white outline-none">
                    <div class="grid place-items-center mr-4">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" aria-hidden="true" class="h-5 w-5">
                            <g fill="currentColor">
                                <path
                                    d="M18.779 21a8 8 0 1 0 0-16a8 8 0 0 0 0 16Zm4.27-9.786c-.717.414-1.747-.025-2.299-.982c-.552-.957-.418-2.068.299-2.482c.718-.414 1.747.025 2.3.982c.551.957.418 2.068-.3 2.482Z" />
                                <path
                                    d="M18.779 24c6.075 0 11-4.925 11-11s-4.925-11-11-11s-11 4.925-11 11c0 2.327.722 4.485 1.955 6.263a3.747 3.747 0 0 0-3.454 1.012l-3.182 3.182a3.75 3.75 0 1 0 5.304 5.303l3.182-3.182a3.747 3.747 0 0 0 1.005-3.483A10.949 10.949 0 0 0 18.78 24Zm0-2a9 9 0 1 1 0-18a9 9 0 0 1 0 18Z" />
                            </g>
                        </svg>
                    </div><a href="/penyuluhanTernak">Pengajuan Penyuluhan</a>
                </div>
                <div role="button" tabindex="0"
                    class="flex items-center w-full p-3 rounded-lg text-start leading-tight transition-all hover:bg-[#F5682A]  focus:bg-[#F5682A]  active:bg-[#F5682A]  hover:text-white focus:text-white active:text-white outline-none">
                    <div class="grid place-items-center mr-4">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" aria-hidden="true" class="h-5 w-5">
                            <path fill="currentColor"
                                d="M17.212 2.237a.75.75 0 0 0-1.423-.474l-.75 2.249a.75.75 0 0 0 1.423.474l.75-2.249Zm4.568-.017a.75.75 0 0 1 0 1.06l-2.5 2.5a.75.75 0 1 1-1.06-1.06l2.5-2.5a.75.75 0 0 1 1.06 0Zm-8.91 1.52a2.325 2.325 0 0 0-3.794.577L3.178 16.56a1.8 1.8 0 0 0 .387 2.09l1.439 1.358a1.8 1.8 0 0 0 1.964.336l1.417-.628a4 4 0 0 0 7.314-3.24l3.42-1.516a2.325 2.325 0 0 0 .758-3.712L12.87 3.741Zm1.457 13.342a2.5 2.5 0 0 1-4.569 2.024l4.569-2.024ZM19 8.249a.75.75 0 0 1 .75-.75h2a.75.75 0 0 1 0 1.5h-2a.75.75 0 0 1-.75-.75Z" />
                        </svg>
                    </div><a href="/broadcastBerita">Broadcast Informasi</a>
                    <div class="grid place-items-center ml-auto justify-self-end">
                    </div>
                </div>
                <div role="button" tabindex="0"
                    class="flex items-center w-full p-3 rounded-lg text-start leading-tight transition-all hover:bg-[#F5682A]  focus:bg-[#F5682A]  active:bg-[#F5682A]  hover:text-white focus:text-white active:text-white outline-none">
                    <div class="grid place-items-center mr-4">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                            aria-hidden="true" class="h-5 w-5">
                            <path fill-rule="evenodd"
                                d="M18.685 19.097A9.723 9.723 0 0021.75 12c0-5.385-4.365-9.75-9.75-9.75S2.25 6.615 2.25 12a9.723 9.723 0 003.065 7.097A9.716 9.716 0 0012 21.75a9.716 9.716 0 006.685-2.653zm-12.54-1.285A7.486 7.486 0 0112 15a7.486 7.486 0 015.855 2.812A8.224 8.224 0 0112 20.25a8.224 8.224 0 01-5.855-2.438zM15.75 9a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </div><a href="/profilUser">Profil</a>
                </div>
                <div role="button" tabindex="0"
                    class="flex items-center w-full p-3 rounded-lg text-start leading-tight transition-all hover:bg-[#F5682A]  focus:bg-[#F5682A]  active:bg-[#F5682A]  hover:text-white focus:text-white active:text-white outline-none">
                    <div class="grid place-items-center mr-4">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" aria-hidden="true" class="h-5 w-5">
                            <path fill="currentColor"
                                d="M12 1.75A10.25 10.25 0 1 0 22.25 12A10.26 10.26 0 0 0 12 1.75m-.75 4.62a.75.75 0 0 1 1.5 0v4.51a.75.75 0 0 1-1.5 0zm6.42 6.93a5.82 5.82 0 1 1-8.26-6.55a.751.751 0 0 1 .66 1.35a4.3 4.3 0 0 0-2.28 4.86a4.3 4.3 0 0 0 1.52 2.4a4.44 4.44 0 0 0 5.38 0a4.33 4.33 0 0 0-.77-7.26a.753.753 0 1 1 .67-1.35a5.88 5.88 0 0 1 2.68 2.74a5.82 5.82 0 0 1 .36 3.81z" />
                        </svg>
                    </div><a href="/logout">Logout</a>
                </div>
            </nav>
        </div>
        @yield('content')
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
</body>

</html>
