<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <link rel="icon" href="{{url('images/fevicon.png') }}" type="image/gif" />
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

  <!-- Bootstrap CSS -->
  <link  href="{{url('https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css') }}" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


  <title>ConnectWiseNet</title>


  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="{{ asset('public/frontend/css/bootstrap.css') }}"  />

  <!-- fonts style -->
  <link href="{{url('https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap') }}"
   rel="stylesheet">

  <!-- font awesome style -->
  <link href="{{ asset('public/frontend/css/font-awesome.min.css') }}" rel="stylesheet" />

  <!-- Custom styles for this template -->
  <link href="{{asset('public/frontend/css/style.css') }}" rel="stylesheet" />
  <!-- responsive style -->
  <link href="{{asset('public/frontend/css/responsive.css') }}" rel="stylesheet" />

</head>

<body>

  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="{{ url('/') }}">
            <span>ConnectWiseNet</span>
          </a>

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class=""> </span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav  ml-auto">
              <li class="nav-item active">
                <a class="nav-link" href="{{ url('/') }}">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ url('/about') }}" target="_blank"> About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ url('/service') }}" target="_blank">Services</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ url('/price') }}" target="_blank">Pricing</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ url('/contact') }}" target="_blank">Contact Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ url('/login') }}" target="_blank">Login </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ url('/complaint') }}" target="_blank">Complain </a>
              </li>
            </ul>

          </div>
        </nav>
      </div>
    </header>
    <!-- end header section -->
