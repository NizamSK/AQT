<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>AQT - Home</title>
    <link rel="shortcut icon" href="{{asset('website/assets/images/favicon.png')}}" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css" integrity="sha512-b2QcS5SsA8tZodcDtGRELiGv5SaKSk1vDHDaQRda0htPYWZ6046lr3kJ5bAAQdpV2mmA/4v0wQF9MyU6/pDIAg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css" integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css" integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{asset('website/assets/css/style.css')}}">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400..700&family=Koulen:wght@400&display=swap" rel="stylesheet">
</head>
<body>
  @if(Route::currentRouteName() !== 'website.apply')
    <header class="bg-black header-main">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-dark">
                <div class="container-fluid">
                  <a class="navbar-brand py-0" href="{{route('website.home')}}"><img src="{{ asset('website/assets/images/logo.png') }}" alt="Logo" class="img-fluid"></a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                      <li class="nav-item">
                        <a class="nav-link" href="{{route('website.home')}}">Home</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="{{route('website.movies')}}">Movies</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="{{route('website.series')}}">Series</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="{{route('website.about')}}">About Us</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="{{route('website.contact')}}">Contact</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="javascript:;">Careers</a>
                      </li>
                    </ul>
                    <a href="javascript:;" class="primary-btn">Sign In</a>
                  </div>
                </div>
            </nav>
        </div>
    </header>
  @endif