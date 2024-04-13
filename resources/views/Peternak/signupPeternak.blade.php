<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
    <link rel="icon" type="image" href="logoicon.png">
    <title>Chick & Check | Sign Up</title>
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

    <section class="bg-cover bg-center bg-no-repeat bg-[url('fotopenyuluhan.png')] bg-[#2B2B2B] bg-blend-multiply bg-opacity-80">
        <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
            <div class="w-full bg-white rounded-lg shadow md:mt-0 sm:max-w-2xl xl:p-0">
                <div class="space-y-4 md:space-y-6 sm:p-8">
                    <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl text-center">
                        Sign Up Peternak
                    </h1>
                    <form class="space-y-4 md:space-y-6" action="/signupPeternak" method="POST">
                        @csrf
                        <div>
                            <label for="name" class="block mb-2 text-sm font-medium text-gray-900 ">Nama</label>
                            <input type="text" name="name" id="name" placeholder="Nama Lengkap" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-[#F5682A] focus:border-[#F5682A] block w-full p-2.5" required="">
                        </div>
                        <div>
                            <label for="address" class="block mb-2 text-sm font-medium text-gray-900 ">Alamat</label>
                            <input type="text" name="address" id="address" placeholder="Jalan Alamat Anda" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-[#F5682A] focus:border-[#F5682A] block w-full p-2.5" required="">
                        </div>
                        <div>
                            <label for="email" class="block mb-2 text-sm font-medium text-gray-900 ">Email</label>
                            <input type="email" name="email" id="email" placeholder="namaemail@gmail.com" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-[#F5682A] focus:border-[#F5682A] block w-full p-2.5" required="">
                        </div>
                        <div>
                            <label for="phone_number" class="block mb-2 text-sm font-medium text-gray-900 ">Nomor Telepon</label>
                            <input type="text" name="phone_number" id="phone_number" placeholder="081xxxxxxxxx" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-[#F5682A] focus:border-[#F5682A] block w-full p-2.5" required="">
                        </div>
                        <div>
                            <label for="password" class="block mb-2 text-sm font-medium text-gray-900">Password</label>
                            <input type="password" name="password" id="password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-[#F5682A] focus:border-[#F5682A] block w-full p-2.5" required="">
                        </div>
                        {{-- <div>
                            <label for="confirm_password" class="block mb-2 text-sm font-medium text-gray-900">Confirm Password</label>
                            <input type="password" name="confirm_password" id="confirm_password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-[#F5682A] focus:border-[#F5682A] block w-full p-2.5" required="">
                        </div> --}}
                        <button type="submit" class="w-full text-white bg-[#F5682A] hover:bg-[#F54C2A] focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Sign Up</button>
                        <p class="text-sm font-light text-gray-500 ">
                            Sudah memiliki akun? <a href="/login" class="font-medium text-[#F5682A] hover:text-[#F54C2A] hover:underline">Login</a>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
</body>
</html>