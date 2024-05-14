@extends('Layout.navbarLanding')
@section('title', '| Login')
@section('content')
    <section class="bg-cover bg-center bg-no-repeat bg-[url('fotopakan.png')] bg-[#2B2B2B] bg-blend-multiply bg-opacity-80">
        <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
            <div class="w-full bg-white rounded-lg shadow md:mt-0 sm:max-w-lg xl:p-0">
                <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                    @if (Session::has('failed'))
                    <div class=" bg-red-50 p-4">
                        <p class="flex items-center text-sm font-medium text-red-600">
                           <span class="pr-3">
                             <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" viewBox="0 0 16 16">
                               <path d="M5.338 1.59a61.44 61.44 0 0 0-2.837.856.481.481 0 0 0-.328.39c-.554 4.157.726 7.19 2.253 9.188a10.725 10.725 0 0 0 2.287 2.233c.346.244.652.42.893.533.12.057.218.095.293.118a.55.55 0 0 0 .101.025.615.615 0 0 0 .1-.025c.076-.023.174-.061.294-.118.24-.113.547-.29.893-.533a10.726 10.726 0 0 0 2.287-2.233c1.527-1.997 2.807-5.031 2.253-9.188a.48.48 0 0 0-.328-.39c-.651-.213-1.75-.56-2.837-.855C9.552 1.29 8.531 1.067 8 1.067c-.53 0-1.552.223-2.662.524zM5.072.56C6.157.265 7.31 0 8 0s1.843.265 2.928.56c1.11.3 2.229.655 2.887.87a1.54 1.54 0 0 1 1.044 1.262c.596 4.477-.787 7.795-2.465 9.99a11.775 11.775 0 0 1-2.517 2.453 7.159 7.159 0 0 1-1.048.625c-.28.132-.581.24-.829.24s-.548-.108-.829-.24a7.158 7.158 0 0 1-1.048-.625 11.777 11.777 0 0 1-2.517-2.453C1.928 10.487.545 7.169 1.141 2.692A1.54 1.54 0 0 1 2.185 1.43 62.456 62.456 0 0 1 5.072.56z"/>
                               <path d="M6.146 5.146a.5.5 0 0 1 .708 0L8 6.293l1.146-1.147a.5.5 0 1 1 .708.708L8.707 7l1.147 1.146a.5.5 0 0 1-.708.708L8 7.707 6.854 8.854a.5.5 0 1 1-.708-.708L7.293 7 6.146 5.854a.5.5 0 0 1 0-.708z"/>
                             </svg>
                           </span>
                           {{ Session::get('failed') }}
                        </p>
                     </div>
                    @endif
                    <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl text-center">
                        Login Sebagai
                    </h1>
                    <div class="space-y-4 md:space-y-6">
                        <div class="flex md:order-2 space-x-3 md:space-x-0 gap-6 items-center justify-center">
                            <form action="/loginPeternak" method="GET">
                                <button
                                    class="text-white bg-[#F5682A] hover:bg-[#F54C2A] focus:bg-transparent focus:text-[#F5682A] focus:ring-2 focus:ring-[#F5682A] font-medium rounded-lg text-sm px-4 py-2 text-center">Peternak</button>
                            </form>
                            <form action="/loginDinas" method="GET">
                                <button
                                    class="text-white bg-[#F5682A] hover:bg-[#F54C2A] focus:bg-transparent focus:text-[#F5682A] focus:ring-2 focus:ring-[#F5682A] font-medium rounded-lg text-sm px-4 py-2 text-center">Dinas</button>
                            </form>
                            <form action="/loginAdmin" method="GET">
                                <button
                                    class="text-white bg-[#F5682A] hover:bg-[#F54C2A] focus:bg-transparent focus:text-[#F5682A] focus:ring-2 focus:ring-[#F5682A] font-medium rounded-lg text-sm px-4 py-2 text-center">Admin</button>
                            </form>
                        </div>
                        <p class="text-sm font-light text-gray-500 ">
                            Belum memiliki akun? <a href="/signupRole"
                                class="font-medium text-[#F5682A] hover:text-[#F54C2A] hover:underline">Sign Up</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
