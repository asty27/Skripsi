<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset('assets/img/apple-icon.png')}}"/>
    <link rel="icon" type="image/png" href="{{asset('assets/img/logo.png')}}">
    <title>Register</title>
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet"/>
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <!-- Nucleo Icons -->
    <link href="{{asset('assets/css/nucleo-icons.css')}}" rel="stylesheet"/>
    <link href="{{asset('assets/css/nucleo-svg.css')}}" rel="stylesheet"/>
    <!-- Main Styling -->
    <link href="{{asset('assets/css/argon-dashboard-tailwind.css?v=1.0.1')}}" rel="stylesheet"/>
</head>

<body class="m-0 font-sans antialiased font-normal bg-white text-start text-base leading-default text-slate-500">
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
                <li>
                    <a class="block px-4 py-2 mr-2 font-normal text-white transition-all ease-in-out duration-250 lg-max:opacity-0 lg-max:text-slate-700 text-sm lg:px-2 lg:hover:text-white/75"
                       href="{{route('register')}}">Register</a></li>
                <li>
                    <a class="block px-4 py-2 mr-2 font-normal text-white transition-all ease-in-out duration-250 lg-max:opacity-0 lg-max:text-slate-700 text-sm lg:px-2 lg:hover:text-white/75"
                       href="{{route('login')}}">Login</a></li>
            </ul>

        </div>
    </div>
</nav>

<main class="mt-0 transition-all duration-200 ease-in-out">
    <section class="min-h-screen">
        <div class="relative flex items-start pt-12 pb-56 m-4 overflow-hidden bg-cover min-h-[50vh] rounded-xl"
             style="background-image: url('{{asset('assets/img/2.jpeg')}}');">
            <span
                class="absolute top-0 left-0 w-full h-full bg-center bg-cover bg-gradient-to-tl from-zinc-800 to-zinc-700 opacity-60"></span>
            <div class="container z-10">
                <div class="flex flex-wrap justify-center -mx-3">
                    <div class="w-full max-w-full px-3 mx-auto mt-0 text-center lg:flex-0 shrink-0 lg:w-5/12">
                        <a href="{{asset('assets/img/logo.png')}}">
                            <img src="{{asset('assets/img/logo.png')}}" alt="Logo" class="mx-auto mb-4"
                                 style="width: 200px; height: 150px; margin-top: 20px;  margin-bottom: 5px;">
                        </a>
                        <h1 class="mt-12 mb-2 text-white" style="font-size: 23px;">SELAMAT DATANG</h1>
                        <p class="text-white">Silahkan Daftarkan Diri Anda</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="flex flex-wrap -mx-3 -mt-48 md:-mt-56 lg:-mt-48">
                <div class="w-full max-w-full px-3 mx-auto mt-0 md:flex-0 shrink-0 md:w-7/12 lg:w-5/12 xl:w-4/12">
                    <div
                        class="relative z-0 flex flex-col min-w-0 break-words bg-white border-0 shadow-xl rounded-2xl bg-clip-border">
                        <div class="p-6 mb-0 text-center bg-white border-b-0 rounded-t-2xl">
                            <h5>Register</h5>
                        </div>
                        <div class="flex-auto p-6">
                            <form method="POST" action="{{ route('register') }}" role="form text-left">
                                @csrf
                                <div class="mb-4">
                                    <input id="name" type="text" name="name" :value="old('name')" required autofocus
                                           autocomplete="name"
                                           class="placeholder:text-gray-500 text-sm focus:shadow-primary-outline leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-blue-500 focus:bg-white focus:text-gray-700 focus:outline-none"
                                           placeholder="Name" aria-label="Name">
                                </div>
                                <div class="mb-4">
                                    <input id="email" type="email" name="email" :value="old('email')" required
                                           autocomplete="username"
                                           class="placeholder:text-gray-500 text-sm focus:shadow-primary-outline leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-blue-500 focus:bg-white focus:text-gray-700 focus:outline-none"
                                           placeholder="Email" aria-label="Email">
                                </div>
                                <div class="mb-4">
                                    <input id="password" type="password" name="password" required
                                           autocomplete="new-password"
                                           class="placeholder:text-gray-500 text-sm focus:shadow-primary-outline leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-blue-500 focus:bg-white focus:text-gray-700 focus:outline-none"
                                           placeholder="Password" aria-label="Password">
                                </div>
                                <div class="mb-4">
                                    <input id="password_confirmation" type="password" name="password_confirmation"
                                           required autocomplete="new-password"
                                           class="placeholder:text-gray-500 text-sm focus:shadow-primary-outline leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-blue-500 focus:bg-white focus:text-gray-700 focus:outline-none"
                                           placeholder="Confirm Password" aria-label="Confirm Password">
                                </div>

                                <div class="text-center">
                                    <button type="submit"
                                            class="inline-block w-full px-5 py-2.5 mt-6 mb-2 font-bold text-center text-white align-middle transition-all bg-gradient-to-tl from-zinc-800 to-zinc-700 rounded-lg cursor-pointer hover:bg-slate-700 hover:text-white">
                                        Register
                                    </button>
                                </div>
                                <p class="mt-4 mb-0 leading-normal text-sm text-center">
                                    Already have an account? <a href="{{ route('login') }}"
                                                                class="font-bold text-slate-700">Sign in</a>
                                </p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<script src="{{asset('assets/js/plugins/perfect-scrollbar.min.js')}}" async></script>
<script src="{{asset('assets/js/argon-dashboard-tailwind.js?v=1.0.1')}}" async></script>
</body>
</html>
