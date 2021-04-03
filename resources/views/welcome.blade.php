@extends('master')

  <!-- ======= Header ======= -->

@section('content')

@include('header1')
  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container" data-aos="zoom-in" data-aos-delay="100">
      <h1>Welcome to Celebration</h1>
      <h2>Celebrate events efficiently</h2>
      <a href="{{route('login')}}" class="btn-get-started">Sign in</a>
      <a href="{{route('register')}}" class="btn-get-started">Register</a>
      
    </div>
  </section>
  @endsection
  <!-- End Hero Section -->

  <!-- ======= Footer ======= -->
  