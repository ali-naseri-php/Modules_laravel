<!doctype html>
<html >
<head>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <!-- ... -->
    @livewireStyles
    @stack('styles')
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.css'>
    <link rel="stylesheet" href="{{asset('css/homepage/style.css')}}">
</head>
<body>
{{-- navbar --}}
<nav class="navbar navbar-expand-custom navbar-mainbg">
    <a class="navbar-brand navbar-logo" href="https://github.com/ali-naseri-php/Modules_laravel">ali naseri</a>
    <button class="navbar-toggler" type="button" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
        <i class="fas fa-bars text-white"></i>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
            <div class="hori-selector">
                <div class="left"></div>
                <div class="right"></div>
            </div>
            <li class="nav-item @if(request()->is('/')) active @endif">
                <a class="nav-link" href="{{route('home')}}"><i class="fas fa-home"></i>اصلی</a>
            </li>
            <li class="nav-item @if(request()->is('login')) active @endif">
                <a class="nav-link" href="{{route('login.form')}}"><i class="fas fa-sign-in-alt"></i>ورود و ثبت نام</a>
            </li>
            <li class="nav-item @if(request()->is('articles')) active @endif">
                <a class="nav-link" href="{{route('articles.index')}}"><i class="fas fa-newspaper"></i> مفاله ها</a>
            </li>
            <li class="nav-item @if(request()->is('kala')) active @endif">
                <a class="nav-link" href="{{route('kala')}}"><i class="fas fa-shopping-cart"></i> کالا ها </a>
            </li>
            <li class="nav-item @if(request()->is('category')) active @endif">
                <a class="nav-link" href="{{route('category')}}"><i class="fas fa-grip-vertical"></i>دسته بندی ها</a>
            </li>
            <li class="nav-item @if(request()->is('search')) active @endif">
                <a class="nav-link" href="{{route('search')}}"><i class="fas fa-search"></i></a>
            </li>
        </ul>
    </div>
</nav>

{{ $slot }}

@livewireScripts
@livewireScriptConfig
<script src='https://code.jquery.com/jquery-3.4.1.min.js'></script>
<script src="{{ asset('/js/homepage/javaScript.js')}}"></script>
<script src='https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js'></script>
<script src='https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js'></script>
@stack('scripts')

</body>
</html>
