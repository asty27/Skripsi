<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('assets/img/logo.png') }}"/>
    <link rel="icon" type="image/png" href="{{ asset('assets/img/POS.png') }}"/>
    <title>Login</title>

    <!-- Fonts and icons -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet"/>
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>

    <!-- Nucleo Icons -->
    <link href="{{ asset('assets/css/nucleo-icons.css') }}" rel="stylesheet"/>
    <link href="{{ asset('assets/css/nucleo-svg.css') }}" rel="stylesheet"/>


    <!-- Main Styling -->
    <link href="{{ asset('assets/css/argon-dashboard-tailwind.css?v=1.0.1') }}" rel="stylesheet"/>
</head>

<body class="m-0 font-sans antialiased font-normal bg-white text-start text-base leading-default text-slate-500">
<div class="container sticky top-0 z-sticky">
    <div class="flex flex-wrap -mx-3">
        <div class="w-full max-w-full px-3 flex-0">
            <!-- Navbar -->
            <nav
                class="absolute top-0 left-0 right-0 z-30 flex flex-wrap items-center px-4 py-2 m-6 mb-0 shadow-sm rounded-xl bg-white/80 backdrop-blur-2xl backdrop-saturate-200 lg:flex-nowrap lg:justify-start">
                <div class="flex items-center justify-between w-full p-0 px-6 mx-auto flex-wrap-inherit">
                    <a class="py-1.75 text-sm mr-4 ml-4 whitespace-nowrap font-bold text-slate-700 lg:ml-0"
                       href="https://demos.creative-tim.com/argon-dashboard-tailwind/pages/dashboard.html"
                       target="_blank">
                        Web Server
                    </a>
                    <button navbar-trigger
                            class="px-3 py-1 ml-2 leading-none transition-all ease-in-out bg-transparent border border-transparent border-solid rounded-lg shadow-none cursor-pointer text-lg lg:hidden"
                            type="button" aria-controls="navigation" aria-expanded="false"
                            aria-label="Toggle navigation">
              <span class="inline-block mt-2 align-middle bg-center bg-no-repeat bg-cover w-6 h-6 bg-none">
                <span bar1
                      class="w-5.5 rounded-xs relative my-0 mx-auto block h-px bg-gray-600 transition-all duration-300"></span>
                <span bar2
                      class="w-5.5 rounded-xs mt-1.75 relative my-0 mx-auto block h-px bg-gray-600 transition-all duration-300"></span>
                <span bar3
                      class="w-5.5 rounded-xs mt-1.75 relative my-0 mx-auto block h-px bg-gray-600 transition-all duration-300"></span>
              </span>
                    </button>
                    <div navbar-menu
                         class="items-center flex-grow transition-all duration-500 lg-max:overflow-hidden ease lg-max:max-h-0 basis-full lg:flex lg:basis-auto">
                        <ul class="flex flex-col pl-0 mx-auto mb-0 list-none lg:flex-row xl:ml-auto">

                            <li>
                                <a class="block px-4 py-2 mr-2 font-normal transition-all ease-in-out lg-max:opacity-0 duration-250 text-sm text-slate-700 lg:px-2"
                                   href="{{route('about')}}">
                                    <i class="mr-1 fa fa-user opacity-60"></i>
                                    About Us
                                </a>
                            </li>
                            <li>
                                <a class="block px-4 py-2 mr-2 font-normal transition-all ease-in-out lg-max:opacity-0 duration-250 text-sm text-slate-700 lg:px-2"
                                   href="{{route('login')}}">
                                    <i class="mr-1 fas fa-key opacity-60"></i>
                                    Login
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</div>

<!-- Main -->
<main class="mt-0 transition-all duration-200 ease-in-out">
    <section>
        <div class="relative flex items-center min-h-screen p-0 overflow-hidden bg-center bg-cover">
            <div class="container z-1">
                <div class="flex flex-wrap -mx-3">
                    <div
                        class="flex flex-col w-full max-w-full px-3 mx-auto lg:mx-0 shrink-0 md:flex-0 md:w-7/12 lg:w-5/12 xl:w-4/12">
                        <div
                            class="relative flex flex-col min-w-0 break-words bg-transparent border-0 shadow-none lg:py-4 dark:bg-gray-950 rounded-2xl bg-clip-border">
                            <div class="p-6 pb-0 mb-0">
                                <h4 class="font-bold">LOGIN</h4>
                                <p class="mb-0">Masukkan email dan password untuk Login</p>
                            </div>
                            <div class="flex-auto p-6">
                                <form method="POST" action="{{route('login')}}">
                                    <!-- CSRF Token (for Laravel) -->
                                    @csrf
                                    <div class="mb-4">
                                        <h4 class="text-sm font-medium text-primary">Email</h4>
                                        <input type="email" name="email" placeholder="Email"
                                               class="focus:shadow-primary-outline dark:bg-gray-950 dark:placeholder:text-white/80 dark:text-white/80 text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding p-3 text-gray-700 placeholder-gray-500 shadow-none outline-none transition-all duration-200 focus:border-primary focus:outline-none focus:transition-shadow"
                                               required/>
                                    </div>
                                    <div class="mb-4">
                                        <h4 class="text-sm font-medium text-primary">Password</h4>
                                        <input type="password" name="password" placeholder="Password"
                                               class="focus:shadow-primary-outline dark:bg-gray-950 dark:placeholder:text-white/80 dark:text-white/80 text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding p-3 text-gray-700 placeholder-gray-500 shadow-none outline-none transition-all duration-200 focus:border-primary focus:outline-none focus:transition-shadow"
                                               required/>
                                    </div>
                                    <div class="flex items-center justify-between mb-6">
                                        <div class="text-sm">
                                            <input type="checkbox" id="remember-me" name="remember"
                                                   class="inline-block mr-2">
                                            <label for="remember-me">Remember me</label>
                                        </div>
                                        <!--<a href="/forgot-password" class="text-sm font-medium text-primary">Lupa
                                            Password?</a> -->
                                    </div>
                                    <div class="text-center">
                                        <button type="submit"
                                                class="inline-block px-8 py-2 mb-0 mr-1 font-bold leading-normal text-center text-white align-middle transition-all ease-in bg-blue-500 border-0 rounded-lg shadow-md cursor-pointer hover:-translate-y-px hover:shadow-xs active:opacity-85 text-xs tracking-tight-rem">
                                            Login
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div
                        class="flex w-full max-w-full px-3 mx-auto lg:mx-0 shrink-0 md:flex-0 md:w-5/12 lg:w-7/12 xl:w-8/12">
                        <div
                            class="relative flex flex-col min-w-0 break-words bg-transparent border-0 shadow-none rounded-2xl bg-clip-border">
                        </div>
                    </div>
                    <div
                        class="absolute top-0 right-0 flex-col justify-center hidden w-6/12 h-full max-w-full px-3 pr-0 my-auto text-center flex-0 lg:flex">
                        <div
                            class="relative flex flex-col justify-center h-full bg-cover px-24 m-4 overflow-hidden rounded-xl"
                            style="background-image: url('assets/img/2.jpeg'); background-size: cover; background-position: center;">
                            <span
                                class="absolute top-0 left-0 w-full h-full bg-center bg-cover bg-gradient-to-tl from-blue-500 to-violet-500 opacity-60"></span>
                            <!-- Menambahkan logo -->
                            <img src="assets/img/LOGO.png" class="z-20 mx-auto mb-4"
                                 style="width: 250px; height: auto;">

                            <p class="z-30 text-white" style="font-size: 2.8ch;">IMPLEMENTASI WEB SERVER BERBASIS BASE64
                                SEBAGAI PEMANTAUAN AREA POS JAGA MILITER</p>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </section>
</main>

<!-- Scripts -->
<script src="{{ asset('assets/js/argon-dashboard-tailwind.js?v=1.0.1') }}"></script>
</body>

</html>
