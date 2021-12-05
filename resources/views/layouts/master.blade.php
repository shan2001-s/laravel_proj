<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <meta name="copyright" content="MACode ID, https://macodeid.com/">

  <title>One Health - Medical Center HTML5 Template</title>

  <link rel="stylesheet" href="{{asset('css/maicons.css')}}">

  <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">

  <link rel="stylesheet" href="{{asset('vendor/owl-carousel/css/owl.carousel.css')}}">

  <link rel="stylesheet" href="{{asset('vendor/animate/animate.css')}}">

  <link rel="stylesheet" href="{{asset('css/theme.css')}}">
</head>
<body>

  <!-- Back to top button -->
  <div class="back-to-top"></div>


  @include('layouts.header')
  @yield('content')

  @include('layouts.footer')