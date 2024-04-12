<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
    <link rel="icon" type="image" href="logoicon.png">
    <title>Chick & Check</title>
</head>
<body class="overflow-clip">
    <nav class="flex flex-row items-center bg-white p-1">
        <div class="w-full flex flex-wrap items-center justify-between p-2">
            <a href="/" class="flex items-center space-x-3 ">
                <img src="logobrand.png" class="h-8" alt="Chick & Check Logo" />
            </a>
            <div class="flex md:order-2 space-x-3 md:space-x-0 gap-6">
                <a href="/login" class="text-white bg-[#F5682A] hover:bg-[#F54C2A] focus:bg-transparent focus:text-[#F5682A] focus:ring-2 focus:ring-[#F5682A] font-medium rounded-lg text-sm px-4 py-2 text-center">Login</a>
            </div>
            <div class="items-center justify-evenly hidden w-full md:flex md:w-auto md:order-1" id="navbar-cta">
            <ul class="text-sm flex flex-row font-medium rounded-lg bg-transparent gap-24">
                <li>
                <a href="/subsidipakan" class="block px-6 py-2 transition-all text-[#F5682A] rounded-lg hover:bg-[#F5682A] hover:text-white">Subsidi</a>
                </li>
                <li>
                <a href="/penyuluhan" class="block px-6 py-2 transition-all text-[#F5682A] rounded-lg hover:bg-[#F5682A] hover:text-white">Penyuluhan</a>
                </li>
                <li>
                <a href="/broadcast" class="block px-6 py-2 transition-all text-[#F5682A] rounded-lg hover:bg-[#F5682A] hover:text-white">Broadcast</a>
                </li>
            </ul>
            </div>
        </div>
    </nav>

    <div class="flex flex-row h-full w-full">
        <section class="bg-cover bg-center bg-no-repeat bg-[url('fotopakan.png')] bg-gray-700 bg-blend-multiply w-1/2">
            <div class="px-4 mx-auto max-w-screen-xl text-center items-center justify-center py-96">
                <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-white md:text-5xl lg:text-6xl">Subsidi Pakan</h1>
                <p class="mb-8 text-lg font-normal text-gray-300 lg:text-xl px-36">Dapatkan pakan ternak ayam petelur bersubsidi dengan melakukan pengajuan pada fitur <b>Subsidi Pakan.</b></p>
                <a href="#" class="inline-flex justify-center hover:text-gray-900 items-center py-3 px-5 sm:ms-4 text-base font-medium text-center text-white rounded-lg border border-white hover:bg-white focus:ring-2 focus:ring-white">
                    Learn more
                </a>  
            </div>
        </section>

        <section class="bg-cover bg-center bg-no-repeat bg-[url('fotopenyuluhan.png')] bg-gray-700 bg-blend-multiply w-1/2">
            <div class="px-4 mx-auto max-w-screen-xl text-center items-center justify-center py-96">
                <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-white md:text-5xl lg:text-6xl">Penyuluhan Ternak</h1>
                <p class="mb-8 text-lg font-normal text-gray-300 lg:text-xl px-36">Jadwalkan penyuluhan peternakan ayam petelur anda dengan melakukan pengajuan pada fitur <b>Penyuluhan Ternak.</p>
                <a href="#" class="inline-flex justify-center hover:text-gray-900 items-center py-3 px-5 sm:ms-4 text-base font-medium text-center text-white rounded-lg border border-white hover:bg-white focus:ring-2 focus:ring-white">
                    Learn more
                </a>  
            </div>
        </section>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
</body>
</html>