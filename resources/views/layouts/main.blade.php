<!doctype html>
<html class="no-js" lang="en">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Cindy_&_Nabil's BLOG</title>
<!-- Auth style -->
<link href="{{ asset('css/app.css') }}" rel="stylesheet">

<link rel="stylesheet" href="https://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.min.css">

</head>
<body>

<div class="top-bar">
<div class="top-bar-left">
<ul class="menu">
<li class="menu-text">Blog</li>
<li><a href="/">Home</a></li>
<li><a href="/articles">Articles</a></li>
<li><a href="/articles/vip">Articles VIP</a></li>
<li><a href="/contact/new">Contact</a></li>
@if (Auth::user())
<li><a href="/profil">Mon Profil</a></li>
@endif


<!-- Auth menu  -->
<li>
                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
</li>

</ul>
</div>
</div>

<div class="callout large primary">
<div class="row column text-center">
<h1>C'est notre blog!</h1>
<h2 class="subheader">mon petit blog</h2>
</div>
</div>
@yield('AuthApp')

@yield('MainContent')

<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
<script src="https://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.js"></script>
<script>
      $(document).foundation();
    </script>
   <!-- Auth Scripts -->
   <script src="{{ asset('js/app.js') }}"></script>   
</body>
</html>
