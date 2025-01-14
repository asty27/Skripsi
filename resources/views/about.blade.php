<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/POS.png">
    <link rel="icon" type="image/png" href="../assets/img/POS.png">
    <meta name="description" content="Learn more about our collaborative tools to enhance user experience and design.">
    <meta name="keywords" content="collaborative tools, user experience, design">
    <title>About Us</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link href="../assets/css/nucleo-icons.css" rel="stylesheet">
    <link href="../assets/css/nucleo-svg.css" rel="stylesheet">
    <link href="../assets/css/argon-dashboard-tailwind.css?v=1.0.1" rel="stylesheet">
    <style>
        .custom-ml {
            margin-left: -13cm; /* Ganti dengan ukuran yang diinginkan */
        }
    </style>
</head>
<body class="font-sans antialiased bg-white text-base leading-default text-slate-500">

<!-- Navbar -->
<nav
    class="absolute top-0 z-30 flex flex-wrap items-center justify-between w-full px-4 py-2 mt-6 mb-4 shadow-none lg:flex-nowrap lg:justify-start">
    <div class="container flex items-center justify-between py-0 flex-wrap-inherit">
        <a class="py-1.75 ml-4 mr-4 font-bold text-white text-sm whitespace-nowrap lg:ml-0"
           href="https://demos.creative-tim.com/argon-dashboard-tailwind/pages/dashboard.html" target="_blank"> Web
            Server </a>
        <button navbar-trigger
                class="px-3 py-1 ml-2 leading-none transition-all ease-in-out bg-transparent border border-transparent rounded-lg shadow-none cursor-pointer text-lg lg:hidden"
                type="button" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
                <span class="inline-block mt-2 align-middle bg-center bg-no-repeat bg-cover w-6 h-6 bg-none">
                    <span bar1
                          class="w-5.5 rounded-xs duration-350 relative my-0 mx-auto block h-px bg-white transition-all"></span>
                    <span bar2
                          class="w-5.5 rounded-xs mt-1.75 duration-350 relative my-0 mx-auto block h-px bg-white transition-all"></span>
                    <span bar3
                          class="w-5.5 rounded-xs mt-1.75 duration-350 relative my-0 mx-auto block h-px bg-white transition-all"></span>
                </span>
        </button>
        <div navbar-menu
             class="items-center flex-grow transition-all ease duration-350 lg-max:bg-white lg-max:max-h-0 lg-max:overflow-hidden basis-full rounded-2xl lg:flex lg:basis-auto">
            <ul class="flex flex-col pl-0 mx-auto mb-0 list-none lg-max:py-2 lg:flex-row xl:ml-auto">
                <li>
                    <a class="block px-4 py-2 mr-2 font-normal text-white transition-all ease-in-out duration-250 lg-max:opacity-0 lg-max:text-slate-700 text-sm lg:px-2 lg:hover:text-white/75"
                       href="{{route('about')}}">About Us</a></li>
                <!-- <li>
                    <a class="block px-4 py-2 mr-2 font-normal text-white transition-all ease-in-out duration-250 lg-max:opacity-0 lg-max:text-slate-700 text-sm lg:px-2 lg:hover:text-white/75"
                       href="{{route('register')}}">Register</a></li>-->
                <li>
                    <a class="block px-4 py-2 mr-2 font-normal text-white transition-all ease-in-out duration-250 lg-max:opacity-0 lg-max:text-slate-700 text-sm lg:px-2 lg:hover:text-white/75"
                       href="{{route('login')}}">Login</a></li>
            </ul>

        </div>
    </div>
</nav>

<!-- Hero Section -->
<div class="relative flex items-center justify-center pt-6 pb-6 m-4 overflow-hidden bg-cover rounded-xl"
     style="background-image: url('assets/img/2.jpeg');">
    <span
        class="absolute top-0 left-0 w-full h-full bg-center bg-cover bg-gradient-to-tl from-zinc-800 to-zinc-700 opacity-60"></span>
    <div class="container z-10 flex flex-col justify-center items-center text-center">
        
        <div class="w-full max-w-full px-3 mx-auto text-center lg:flex-0 shrink-0 lg:w-5/12 mt-10">
            <h1 class="mb-1 text-white text-3xl font-bold">Selamat Datang</h1>
            <p class="text-white text-lg">Di Web Server Pemantauan Pos Jaga Militer</p>
        </div>
    </div>
</div>

<!-- Features -->
<div class="max-w-screen-lg px-4 py-6 sm:px-6 lg:px-8 lg:py-8 mx-auto">
    <!-- Grid -->
    <div class="lg:grid lg:grid-cols-12 lg:gap-16 lg:items-center">
        <div class="lg:col-span-7">
            <!-- Grid -->
            <div class="grid grid-cols-12 gap-2 sm:gap-6 items-center lg:-translate-x-10">
                <div class="col-span-4">
                    <img class="rounded-xl w-full h-auto" src="../assets/img/samping.jpeg">
                </div>
                <div class="col-span-4">
                    <img class="rounded-xl w-full h-auto" src="../assets/img/depansetengah.jpeg">
                </div>
                <div class="col-span-4">
                    <img class="rounded-xl w-full h-auto" src="../assets/img/depan.jpeg">
                </div>
            </div>
        </div>
        <div class="mt-5 sm:mt-6 lg:mt-0 lg:col-span-5">
            <div class="space-y-4 sm:space-y-6">
                <!-- Title -->
                <div class="space-y-1 md:space-y-2">
                    <h2 class="font-bold text-2xl lg:text-3xl text-gray-800 dark:text-neutral-200">
                        Implementasi Web Server Berbasis Base64 Sebagai Pemantauan Area Pos Jaga Militer
                    </h2>
                    <p class="text-gray-500 dark:text-neutral-500">
                        Web Server ini memiliki beberapa manfaat antara lain:
                    </p>
                </div>
                <!-- End Title -->

                <!-- List -->
                <ul class="space-y-1 sm:space-y-3">
                    <li class="flex gap-x-3">
                        <span class="mt-0.5 flex justify-center items-center rounded-full bg-blue-50 text-blue-600 dark:bg-blue-800/30 dark:text-blue-500">
                            <svg class="shrink-0 w-6 h-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <polyline points="20 6 9 17 4 12"/>
                            </svg>
                        </span>
                        <div class="grow">
                            <span class="text-sm sm:text-base text-gray-500 dark:text-neutral-500">
                                Memberikan informasi mengenai kondisi pos jaga militer dan aktivitas di sekitarnya
                            </span>
                        </div>
                    </li>
                    <li class="flex gap-x-3">
                        <span class="mt-0.5 flex justify-center items-center rounded-full bg-blue-50 text-blue-600 dark:bg-blue-800/30 dark:text-blue-500">
                            <svg class="shrink-0 w-6 h-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <polyline points="20 6 9 17 4 12"/>
                            </svg>
                        </span>
                        <div class="grow">
                            <span class="text-sm sm:text-base text-gray-500 dark:text-neutral-500">
                                Menampilkan foto beserta informasi waktu yang teridentifikasi sebagai musuh saat berada di sekitar pos.
                            </span>
                        </div>
                    </li>
                    <li class="flex gap-x-3">
                        <span class="mt-0.5 flex justify-center items-center rounded-full bg-blue-50 text-blue-600 dark:bg-blue-800/30 dark:text-blue-500">
                            <svg class="shrink-0 w-6 h-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <polyline points="20 6 9 17 4 12"/>
                            </svg>
                        </span>
                        <div class="grow">
                            <span class="text-sm sm:text-base text-gray-500 dark:text-neutral-500">
                                Menampilkan rekap informasi terkait identifikasi musuh.
                            </span>
                        </div>
                    </li>
                </ul>
                <!-- End List -->
            </div>
        </div>
    </div>
</div>


<script src="{{asset('assets/js/plugins/perfect-scrollbar.min.js')}}" async></script>
<script src="{{asset('assets/js/argon-dashboard-tailwind.js?v=1.0.1')}}" async></script>
</body>
</html>
