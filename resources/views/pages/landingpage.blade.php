@extends('layouts.landing')
@section('content')
<!DOCTYPE html>
<html>
  <head>
    <title>Fare Processing System</title>
    
    <style>
      /* Inline CSS styling */
      body {
        font-family: Arial, sans-serif;
        background-color: #f0f0f0;
      }
      header {
        background-color: #0077c2;
        color: #fff;
        padding: 20px;
        text-align: center;
      }
      h1 {
        margin-top: 0;
        font-size: 36px;
      }
      p {
        font-size: 24px;
      }
      .btn {
        display: inline-block;
        background-color: #0077c2;
        color: #fff;
        border-radius: 4px;
        padding: 12px 20px;
        text-align: center;
        text-decoration: none;
        font-size: 18px;
        margin-top: 20px;
      }
      .btn:hover {
        background-color: #005fa3;
        cursor: pointer;
      }
    </style>
  </head>
  <body>
    <header>
           <nav>
            <ul class="nav navbar justify-content-end">
                  <li class="nav-item">
                  <a class="nav-link" href="{{Route('login')}}"> Login </a>
                  </li>
            </ul>
           </nav>
      <h1>Fare Processing System</h1>
    </header>
    <main>
     
    <p>Welcome to the future of payment for travel services! Our revolutionary system is designed to make fare processing simpler, faster, and more secure than ever before.</p>
      @auth
    <a href="{{Route('home')}}" class="btn"> Get Started </a>
      @endauth
      @guest
    <a href="{{Route('login')}}" class="btn"> Get Started </a>
      @endguest
    </main>
  </body>
</html>
@endsection