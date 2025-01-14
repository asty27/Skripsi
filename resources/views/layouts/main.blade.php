<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title', 'web')</title>

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('assets/img/POS.png') }}"/>
    <link rel="icon" type="image/png" href="{{ asset('assets/img/POS.png') }}"/>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @stack('css')
    <link href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="{{asset('assets/css/admin-template/backend-plugin.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/admin-template/backend.css?v=1.0.0')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
</head>
<body class="  color-light  ">
<x-toast></x-toast>
<div class="wrapper">
    @include('layouts.side-bar')
    @include('layouts.top-bar')
    <div class="content-page">
        @yield('content')
    </div>
    @include('layouts.top-bar')
</div>

<script src="{{asset('assets/js/admin-template/backend-bundle.min.js')}}"></script>
<!-- Chart Custom JavaScript -->
<script src="{{asset('assets/js/admin-template/customizer.js')}}"></script>

<script src="{{asset('assets/js/admin-template/sidebar.js')}}"></script>

<!-- Flextree Javascript-->
<script src="{{asset('assets/js/admin-template/flex-tree.min.js')}}"></script>
<script src="{{asset('assets/js/admin-template/tree.js')}}"></script>

<!-- Table Treeview JavaScript -->
<script src="{{asset('assets/js/admin-template/table-treeview.js')}}"></script>

<!-- SweetAlert JavaScript -->
<script src="{{asset('assets/js/admin-template/sweetalert.js')}}"></script>

<!-- Vectoe Map JavaScript -->
<script src="{{asset('assets/js/admin-template/vector-map-custom.js')}}"></script>

<!-- Chart Custom JavaScript -->
<script src="{{asset('assets/js/admin-template/chart-custom.js')}}"></script>
<script src="{{asset('assets/js/admin-template/charts/01.js')}}"></script>
<script src="{{asset('assets/js/admin-template/charts/02.js')}}"></script>

<!-- slider JavaScript -->
<script src="{{asset('assets/js/admin-template/slider.js')}}"></script>

<!-- Emoji picker -->
<script src="{{asset('assets/js/admin-template/vendor/emoji-picker-element/index.js')}}" type="module"></script>


<!-- app JavaScript -->
<script src="{{asset('assets/js/admin-template/app.js')}}"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Include Select2 JS -->
<script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<script>
    function handleInputChangeQueryParams(inputElement) {
        const inputValue = inputElement.value;
        const selectName = inputElement.name;

        const currentUrl = new URL(window.location.href);

        if (inputValue) {
            currentUrl.searchParams.set(selectName, inputValue);
        } else {
            currentUrl.searchParams.delete(selectName);
        }

        window.location.href = currentUrl.toString();
    }
</script>
@stack('scripts')
</body>
