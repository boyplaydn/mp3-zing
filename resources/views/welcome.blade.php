<!DOCTYPE html>
<html lang="vi">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

     <title>Music Online</title>

    <!-- Styles -->
    <link href="/css/app.css" rel="stylesheet">
    <style type="text/css">
        body {
            background: linear-gradient(141deg, #9fb8ad 0%, #1fc8db 51%, #2cb5e8 75%);
        }
    </style>

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script type="text/javascript" src ="js/css3-mediaqueries.js"></script>
    <script type="text/javascript" href ="js/Search.js"></script>
    <link rel="stylesheet" href="{{ asset('css/style_menu.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/slider.css') }}" type="text/css">
    
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  </head>
  <body>
        <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('', 'Music Mp3') }}
                </a>
                <ul class="navbar-nav mr-auto">
                  <li class="nav-item">
                    <a class="nav-link" href="{{ URL::to('singer/index') }}">Singers</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{ URL::to('composer/index') }}">Composers</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{ URL::to('song/index') }}">Songs</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{ URL::to('playlist/index') }}">Playlists</a>
                  </li>
                </ul>                              
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            <li class="nav-item">
                                @if (Route::has('register'))
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                @endif
                            </li>
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
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="example">
                    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                        <!-- Indicators -->
                          <ol class="carousel-indicators">
                            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="3"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="4"></li>
                          </ol>

                          <!-- Wrapper for slides -->
                          <div class="carousel-inner" role="listbox">
                            <div class="item active">
                              <img src="{{ asset('img/pic1.jpg') }}" alt="city" >
                            </div>
                            <div class="item">
                              <img src="{{ asset('img/pic2.jpg') }}" alt="city2" >
                            </div>
                            <div class="item">
                              <img src="{{ asset('img/pic3.jpg') }}" alt="city3">
                            </div>
                            <div class="item">
                              <img src="{{ asset('img/pic4.jpg') }}" alt="city4"  >
                            </div>
                            <div class="item">
                              <img src="{{ asset('img/pic5.jpg') }}" alt="city5" >
                            </div>
                            ...
                          </div>

                          <!-- Controls -->
                          <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                          </a>
                          <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                          </a>
                    </div>  
                </div> <!-- /SLIDE -->
            </div>
            <div class="col-md-3" id="bxh" style="margin-top: 2px;">
                <div class="thumbnail" style="border-color: blue;">
                    <a href="#"> <h3 style="text-align: center;color: blue;">BẢNG XẾP HẠNG</h3></a> <hr>
                        <div class="caption">
                            <h5><a href="" target="_blank" style="color: black;"><strong style="color: red;">01.</strong> Lập trình tình yêu</a></h5>
                        </div>
                        <div class="caption">
                            <h5><a href="" target="_blank" style="color: black;"><strong style="color: green;">02.</strong> Em ơi</a></h5>
                        </div>
                        <div class="caption">
                            <h5 ><a href="" target="_blank" style="color: black;"><strong style="color: yellow;">03.</strong> Nơi này có anh</a></h5>
                        </div>
                        <div class="caption">
                            <h5><a href="" target="_blank" style="color: black;">04. Lá vàng rơi gió</a></h5>
                        </div>
                        <div class="caption">
                            <h5><a href="" target="_blank" style="color: black;">05. Ta là cho nhau</a></h5>
                        </div>
                </div>
            </div>
        </div>
        @yield('content')
        <div class="row">
            <div class="col-md-9">
                <hr style="border-color: white;"> <a href="#"><h3 style="color: blue;"> ALBUM HOT</h3> </a>
                <hr style="border-color: white;">
                <div class="row">
                    <div class="col-md-4">
                        <div class="thumbnail">
                            <a href="">
                                <img src="{{ asset('img/al1.jpg') }}" alt="album1">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="thumbnail">
                            <a href="">
                                <img src="{{ asset('img/al2.jpg') }}" alt="album2">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="thumbnail">
                            <a href="">
                                <img src="{{ asset('img/al3.jpg') }}" alt="album3">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="thumbnail" style="margin-top: 20px;border-color: green;">
                    <h3 align="center"><a href="">CHỦ ĐỀ HOT</a></h3>
                    <hr>
                    <div class="row" style="margin-bottom: 7px;">
                        <a href="">
                            <img src="{{ asset('img/cd1.jpg') }}" alt="" width="90%;" >
                        </a>
                    </div>
                    <div class="row" style="margin-bottom: 7px;">
                        <a href="">
                            <img src="{{ asset('img/cd2.jpg') }}" alt="" width="90%">
                        </a>
                    </div>
                    <div class="row" style="margin-bottom: 7px;">
                        <a href="">
                            <img src="{{ asset('img/cd3.jpg') }}" alt="" width="90%">
                        </a>
                    </div>
                    <div class="row" style="margin-bottom: 7px;">
                        <a href="">
                            <img src="{{ asset('img/cd4.jpg') }}" alt="" width="90%">
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-9">
                <hr><a href="#"> <h3 style="color: blue;"> MV HOT</h3></a> <hr>
                <div class="row">
                    <div class="col-md-4">
                        <div class="thumbnail">
                            <a href="">
                                <img src="{{ asset('img/mv1.jpg') }}" alt="mv1">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="thumbnail">
                            <a href="">
                                <img src="{{ asset('img/mv2.jpg') }}" alt="mv2">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="thumbnail">
                            <a href="">
                                <img src="{{ asset('img/mv3.jpg') }}" alt="mv3">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="thumbnail">
                            <a href="">
                                <img src="{{ asset('img/mv4.jpg') }}" alt="mv4">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="thumbnail">
                            <a href="">
                                <img src="{{ asset('img/mv5.jpg') }}" alt="mv5">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="thumbnail">
                            <a href="">
                                <img src="{{ asset('img/mv6.jpg') }}" alt="mv6">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3" style="margin-top: 20px;">
                <div class="thumbnail" style="border-color: #001100;">
                    <a href="#"> <h3 style="text-align: center;color: blue;">BÁO ĐIỆN TỬ</h3></a> <hr>
                        <div class="caption">
                            <h5><a href="" target="_blank" style="color: black;"><strong style="color: red;">Tin tức 24h</strong> </a></h5>
                        </div>
                        <div class="caption">
                            <h5><a href="" target="_blank" style="color: black;"><strong style="color: green;">Tin nhanh VnExpress</strong> </a></h5>
                        </div>
                        <div class="caption">
                            <h5 ><a href="" target="_blank" style="color: black;"><strong style="color: #FFCC33;">Báo dân trí</strong> </a></h5>
                        </div>
                        <div class="caption">
                            <h5 ><a href="" target="_blank" style="color: black;"><strong style="color: #66CC00;">Báo VietNamNet</strong> </a></h5>
                        </div>
                </div>
                <hr>
            </div>
        </div>
    </div>

    <script src="/js/app.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="http://vodkabears.github.io/vide/js/jquery.vide.min.js"></script>
  </body>
</html>