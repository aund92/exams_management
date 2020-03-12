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
    <header class="masthead">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12 text-center">
                    {{--                        <h1 class="font-weight-light">Vertically Centered Masthead Content</h1>--}}
                    {{--                        <p class="lead">A great starter layout for a landing page</p>--}}
                </div>
            </div>
        </div>
    </header>
    <nav class="navbar navbar-expand-md navbar-dark bg-secondary shadow-lg"
         style="background-color: #f58635 !important;">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                {{ config('app.name', 'Laravel') }}
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto ">
                    <li class="nav-item">
                        <a class="nav-link font-weight-bold text-white"
                           href="{{ route('subject') }}">{{ __('Danh Sách Môn Học') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link font-weight-bold text-white"
                           href="{{ route('questions') }}">{{ __('Danh Sách Câu Hỏi') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link font-weight-bold text-white"
                           href="{{ route('exams') }}">{{ __('Danh Sách Đề Thi') }}</a>
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
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
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
                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                      style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>

    <main class="py-lg-5" style="width: auto; height: auto">
        @yield('content')
    </main>
    <footer id="sticky-footer" class="navbar-dark bg-secondary text-white"
            style="width: 100%; background-color: #f58635 !important;">
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col col-lg-3">
                    <div class="card" style="background-color: #f58635 ">
                        <div class="card-header font-weight-bold">
                            ĐẠI HỌC CÔNG NGHỆ GTVT
                        </div>
                        <div class="card-body">
                            Số 278 Lam Sơn, Đồng Tâm, TP. Vĩnh Yên, Vĩnh Phúc
                            Điện thoại: 0211.386.7405
                            Fax: 0211.386.7391
                            Fanpage | Chỉ đường
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card" style="background-color: #f58635 ">
                        <div class="card-header font-weight-bold">
                            CƠ SỞ THÁI NGUYÊN
                        </div>
                        <div class="card-body">
                            Phường Tân Thịnh, TP.Thái Nguyên, Thái Nguyên
                            Điện thoại: 0208.385.6545
                            Fax: 0208.374.6975
                            Fanpage | Chỉ đường
                        </div>
                    </div>
                </div>
                <div class="col col-lg-3">
                    <div class="card" style="background-color: #f58635 ">
                        <div class="card-header font-weight-bold">
                            CƠ SỞ VĨNH PHÚC
                        </div>
                        <div class="card-body">
                            Số 54 Triều Khúc, Thanh Xuân, Hà Nội
                            Điện thoại: 0243.854 4264
                            Fax: 0243.854 7695
                            Kết nối với UTT
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </footer>
</div>

</body>

</html>
