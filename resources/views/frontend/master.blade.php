<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title')</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('frontend/css/style.css')}}">

</head>

<body>

    <div class="container">
    <div class="row">
      <div class="col-md-12">
        <nav class="navbar navbar-expand-lg navbar-light">
          <div class="container-fluid">
            <h4> <span style="color: #1A8FE3;">Do</span>na<span style="color: #1A8FE3;">tioN</span></h4>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mx-auto mb-2 mb-lg-0 ">
                <li class="nav-item">
                  <a class="nav-link active nav-text" aria-current="page" href="{{route('home')}}">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active nav-text" aria-current="page" href="{{route('about')}}">About</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active nav-text" aria-current="page" href="{{route('donation.page')}}">Donation</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active nav-text" aria-current="page" href="{{route('blog')}}">Blog</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active nav-text" aria-current="page" href="{{route('contact')}}">Contact</a>
                </li>
              </ul>
              <img src="" alt="">
            </div>
          </div>
        </nav>
      </div>
    </div>
  </div>
@yield('contant')

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
