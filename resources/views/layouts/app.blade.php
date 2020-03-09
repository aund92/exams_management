<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-dark bg-secondary shadow-lg">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('subject') }}">{{ __('Danh Sách Môn Học') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('questions') }}">{{ __('Danh Sách Câu Hỏi') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('exams') }}">{{ __('Danh Sách Đề Thi') }}</a>
                        </li>
{{--                        <li class="nav-item dropdown">--}}
{{--                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
{{--                                Subject--}}
{{--                            </a>--}}
{{--                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">--}}
{{--                                <a class="dropdown-item" href="#">Action</a>--}}
{{--                                <a class="dropdown-item" href="#">Another action</a>--}}
{{--                                <a class="dropdown-item" href="#">Something else here</a>--}}
{{--                            </div>--}}
{{--                        </li>--}}
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Thông tin cá nhân') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
        <!-- Footer -->

{{--        <footer>--}}
{{--            <div class="footer-top">--}}
{{--                <div class="container">--}}
{{--                    <div class="row">--}}
{{--                        <div class="col-md-3 footer-about wow fadeInUp">--}}
{{--                            <h3>About us</h3>--}}
{{--                            <p>--}}
{{--                                We are a young company always looking for new and creative ideas to help you with our products in your everyday work.--}}
{{--                            </p>--}}
{{--                            <p>&copy; Company Inc.</p>--}}
{{--                        </div>--}}
{{--                        <div class="col-md-4 offset-md-1 footer-contact wow fadeInDown">--}}
{{--                            <h3>Contact</h3>--}}
{{--                            <p><i class="fas fa-map-marker-alt"></i> Via Rossini 10, 10136 Turin Italy</p>--}}
{{--                            <p><i class="fas fa-phone"></i> Phone: (0039) 333 12 68 347</p>--}}
{{--                            <p><i class="fas fa-envelope"></i> Email: <a href="mailto:hello@domain.com">hello@domain.com</a></p>--}}
{{--                            <p><i class="fab fa-skype"></i> Skype: you_online</p>--}}
{{--                        </div>--}}
{{--                        <div class="col-md-4 footer-links wow fadeInUp">--}}
{{--                            <div class="row">--}}
{{--                                <div class="col">--}}
{{--                                    <h3>Links</h3>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="row">--}}
{{--                                <div class="col-md-6">--}}
{{--                                    <p><a class="scroll-link" href="#top-content">Home</a></p>--}}
{{--                                    <p><a href="#">Features</a></p>--}}
{{--                                    <p><a href="#">How it works</a></p>--}}
{{--                                    <p><a href="#">Our clients</a></p>--}}
{{--                                </div>--}}
{{--                                <div class="col-md-6">--}}
{{--                                    <p><a href="#">Plans &amp; pricing</a></p>--}}
{{--                                    <p><a href="#">Affiliates</a></p>--}}
{{--                                    <p><a href="#">Terms</a></p>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="footer-bottom">--}}
{{--                <div class="container">--}}
{{--                    <div class="row">--}}
{{--                        CopyRight Hoa Bùi Khoa Công Nghệ Thông Tin--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </footer>--}}
        <footer id="sticky-footer" class="navbar-dark bg-secondary text-white"  style="width: 100%; height: 80px">
            <div class="row">
                <div class="container text-center">
                    <big>Copyright &copy; Hoa Bùi</big>
                </div>
            </div>
        </footer>
    </div>

</body>

</html>
