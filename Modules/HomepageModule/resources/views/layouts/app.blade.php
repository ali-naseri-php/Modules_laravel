<!doctype html>
<html >
<head>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <!-- ... -->
    @livewireStyles
    @stack('styles')
    <style>
        .footer {
            background-color: #404cbf;
            color: #fff;
        }

        .footer a {
            color: #fff;
            text-decoration: none;
        }

        .footer a:hover {
            text-decoration: underline;
        }

        .footer h5 {
            font-weight: bold;
        }

        .footer .social-links {
            display: flex;
            gap: 10px;
        }

        .footer .social-links i {
            font-size: 24px;
        }

        @media (max-width: 768px) {
            .footer .row {
                text-align: center;
            }
        }

    </style>
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
            <li class="nav-item @if(request()->is('login') or request()->is('register')  ) active @endif">
                <a class="nav-link" href="{{route('login.form')}}"><i class="fas fa-sign-in-alt"></i>ورود و ثبت نام</a>
            </li>
            <li class="nav-item @if(request()->is('articles')) active @endif">
                <a class="nav-link" href="{{route('articles.index')}}"><i class="fas fa-newspaper"></i> مفاله ها</a>
            </li>
            <li class="nav-item @if(request()->is('kala')or request()->is('kala/*') ) active @endif">
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
<br>
{{ $slot }}
<br>
<br>
<br>
<!-- Footer -->
<footer class="footer  text-white pt-5 pb-3">
    <div class="container">
        <div class="row">
            <!-- Contact Info -->
            <div class="col-md-4 mb-4">
                <h5>تماس با ما</h5>
                <ul class="list-unstyled">
                    <li>تلفن: <a href="tel:+989361819903" class="text-white">09361819903</a></li>
                    <li>آدرس: تهران، ایران</li>
                </ul>
            </div>

            <!-- Social Links -->
            <div class="col-md-4 mb-4">
                <h5>شبکه‌های اجتماعی</h5>
                <ul class="list-unstyled d-flex">
                    <li class="mr-3">
                        <a href="https://github.com/ali-naseri-php/Modules_laravel" class="text-white" target="_blank">
                            <i class="fab fa-github fa-2x"></i>
                        </a>
                    </li>
                    <li class="mr-3">
                        <a href="https://t.me/ali_naseri" class="text-white" target="_blank">
                            <i class="fab fa-telegram fa-2x"></i>
                        </a>
                    </li>
                    <li class="mr-3">
                        <a href="https://www.instagram.com/ali_naseri_php" class="text-white" target="_blank">
                            <i class="fab fa-instagram fa-2x"></i>
                        </a>
                    </li>
                    <li>
                        <a href="https://linkedin.com/in/ali-naseri-php" class="text-white" target="_blank">
                            <i class="fab fa-linkedin fa-2x"></i>
                        </a>
                    </li>
                </ul>
            </div>

            <!-- Footer Navigation -->
            <div class="col-md-4 mb-4">
                <h5>لینک‌های مفید</h5>
                <ul class="list-unstyled">
                    <li><a href="{{route('home')}}" class="text-white">صفحه اصلی</a></li>
                    <li><a href="{{route('articles.index')}}" class="text-white">مقالات</a></li>
                    <li><a href="{{route('kala')}}" class="text-white">کالاها</a></li>
                    <li><a href="{{route('category')}}" class="text-white">دسته‌بندی‌ها</a></li>
                </ul>
            </div>
        </div>

        <div class="text-center pt-3">
            <p>&copy; 2024 تمامی حقوق محفوظ است</p>
        </div>
    </div>
</footer>

<!-- Font Awesome CDN -->
<script src="https://kit.fontawesome.com/a076d05399.js"></script>

@livewireScripts
@livewireScriptConfig
<script src='https://code.jquery.com/jquery-3.4.1.min.js'></script>
<script src="{{ asset('/js/homepage/javaScript.js')}}"></script>
<script src='https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js'></script>
<script src='https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js'></script>
@stack('scripts')

</body>
</html>
