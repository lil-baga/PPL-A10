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
                <a href="#" class="block px-6 py-2 text-[#F5682A] rounded-lg hover:bg-[#F5682A] hover:text-white">Subsidi</a>
                </li>
                <li>
                <a href="#" class="block px-6 py-2 text-[#F5682A] rounded-lg hover:bg-[#F5682A] hover:text-white">Penyuluhan</a>
                </li>
                <li>
                <a href="#" class="block px-6 py-2 text-[#F5682A] rounded-lg hover:bg-[#F5682A] hover:text-white">Broadcast</a>
                </li>
            </ul>
            </div>
        </div>
    </nav>

    <section class="bg-cover bg-center bg-no-repeat bg-[url('fotopakan.png')] bg-[#2B2B2B] bg-blend-multiply bg-opacity-80">
        <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
            <div class="w-full bg-white rounded-lg shadow md:mt-0 sm:max-w-lg xl:p-0">
                <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                    <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl text-center">
                        Masuk Sebagai
                    </h1>
                    <form class="space-y-4 md:space-y-6" action="">
                        <div class="flex md:order-2 space-x-3 md:space-x-0 gap-6 items-center justify-center">
                            <a href="/loginPeternak" class="text-white bg-[#F5682A] hover:bg-[#F54C2A] focus:bg-transparent focus:text-[#F5682A] focus:ring-2 focus:ring-[#F5682A] font-medium rounded-lg text-sm px-4 py-2 text-center">Peternak</a>
                            <a href="/loginDinas" class="text-white bg-[#F5682A] hover:bg-[#F54C2A] focus:bg-transparent focus:text-[#F5682A] focus:ring-2 focus:ring-[#F5682A] font-medium rounded-lg text-sm px-4 py-2 text-center">Dinas</a>
                            <a href="/loginAdmin" class="text-white bg-[#F5682A] hover:bg-[#F54C2A] focus:bg-transparent focus:text-[#F5682A] focus:ring-2 focus:ring-[#F5682A] font-medium rounded-lg text-sm px-4 py-2 text-center">Admin</a>
                        </div>
                        <p class="text-sm font-light text-gray-500 ">
                            Belum memiliki akun? <a href="/signup" class="font-medium text-[#F5682A] hover:text-[#F54C2A] hover:underline">Sign Up</a>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
</body>
</html>