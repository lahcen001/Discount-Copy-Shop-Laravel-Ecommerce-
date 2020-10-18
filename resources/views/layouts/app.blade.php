<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Application E-Commerce développée avec le Framework Laravel 6 par Ludovic Guénet">
    <meta name="author" content="Ludovic Guénet">
    @yield('extra-meta')

    <title>Laravel 6 E-Commerce</title>



    {{-- <script src="{{ asset('js/app.js') }}" defer></script> --}}




    <link rel="stylesheet" href="{{ asset('css/ecommerce.css') }}">

    <link href="{{ asset('images/favicon.ico') }}" rel="shortcut icon" type="image/x-icon">


    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet" type="text/css" />


    <link href="{{ asset('fonts/fontawesome/css/all.min.css') }}" type="text/css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css') }}" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <link href="{{ asset('css/ui.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/responsive.css') }}" rel="stylesheet" media="only screen and (max-width: 1200px)" />


    {{-- <script type="text/javascript">

        $(document).ready(function() {

        });

    </script> --}}






  </head>

  <body>





{{-- <div>
  <div class="container">
    <header class="blog-header pt-3">
      <div class="row flex-nowrap justify-content-between align-items-center">
        <div class="col-4 pt-1">
          <a class="text-muted" href="{{ route('cart.index') }}">Panier <span class="badge badge-pill badge-info text-white">{{ Cart::count() }}</span></a>
        </div>
        <div class="col-4 text-center">
          <a class="blog-header-logo" style="color: #17a2b8 !important;" href="{{ route('products.index') }}"><img src="{{ asset('img/logo.png') }}" width="200" alt=""></a>
        </div>
        <div class="col-4 d-flex justify-content-end align-items-center">
          @include('partials.search')
          @include('partials.auth')
        </div>
      </div>
    </header>

  <div class="nav-scroller py-1 mb-2">
    <nav class="nav d-flex justify-content-between">
      @foreach (App\Category::all() as $category)
      <a class="p-2 text-muted" href="{{ route('products.index', ['categorie' => $category->slug]) }}">{{ $category->name }}</a>
      @endforeach
    </nav>
  </div>

  @if (session('success'))
      <div class="alert alert-success">
          {{ session('success') }}
      </div>
  @endif

  @if (session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
  @endif

  @if (count($errors) > 0)
      <div class="alert alert-danger">
        <ul class="mb-0 mt-0">
          @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
  @endif


  @if (request()->input('q'))
    <h6>{{ $products->total() }} résultat(s) pour la recherche "{{ request()->q }}"</h6>
  @endif
  <div class="row mb-2">
  @yield('content')
  </div>
</div>



<footer class="blog-footer">
  <p>
    <a href="https://github.com/ludoguenet/ecommerce-app-laravel-6">Nord Coders</a> - 🛒 Application E-Commerce avec Laravel 6
  </p>
  <p>
    <a href="#">Revenir en haut</a>
  </p>
</footer>
</div>
--}}




<header class="section-header">

    <nav class="navbar navbar-dark navbar-expand p-0 bg-primary">
        <div class="container">
            <ul class="navbar-nav d-none d-md-flex mr-auto">
                <li class="nav-item"><a class="nav-link" href="/">Home</a></li>
                {{-- <li class="nav-item"><a class="nav-link" href="#">Delivery</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Payment</a></li> --}}
            </ul>
            <ul class="navbar-nav">
                <li class="nav-item"><a href="#" class="nav-link"> Call: +212812345678 </a></li>
                {{-- <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown"> English </a>
                    <ul class="dropdown-menu dropdown-menu-right" style="max-width: 100px;">
                        <li><a class="dropdown-item" href="#">Arabic</a></li>
                        <li><a class="dropdown-item" href="#">Russian </a></li>
                    </ul>
                </li> --}}
            </ul>
            <!-- list-inline //  -->
        </div>
        <!-- navbar-collapse .// -->
        </div>
        <!-- container //  -->
    </nav>
    <!-- header-top-light.// -->

    <section class="header-main border-bottom">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-2 col-6">
                    <a href="{{ route('products.index') }}" class="brand-wrap">
                        <img class="logo" src="{{ asset('images/logo1.png')}}">
                    </a>
                    <!-- brand-wrap.// -->
                </div>
                <div class="col-lg-6 col-12 col-sm-12">
                    @include('partials.search')

                    <!-- search-wrap .end// -->
                </div>
                <!-- col.// -->
                <div class="col-lg-4 col-sm-6 col-12">
                    <div class="widgets-wrap float-md-right">
                        <div class="widget-header  mr-3">
                            <a href="{{ route('cart.index') }}" class="icon icon-sm rounded-circle border"><i class="fa fa-shopping-cart"></i></a>
                            <span class="badge badge-pill badge-danger notify">{{ Cart::count() }}</span>
                        </div>
                        {{-- <div class="widget-header icontext">
                            <a href="#" class="icon icon-sm rounded-circle border"><i class="fa fa-user"></i></a>
                            <div class="text">
                                <span class="text-muted">Welcome!</span>
                                <div>
                                    <a href="#">Sign in</a> |
                                    <a href="#"> Register</a>
                                   )
                                </div>
                            </div>
                        </div> --}}
                        @include('partials.auth')
                    </div>
                    <!-- widgets-wrap.// -->
                </div>
                <!-- col.// -->
            </div>
            <!-- row.// -->
        </div>
        <!-- container.// -->
    </section>
    <!-- header-main .// -->
</header>
<!-- section-header.// -->

@yield('content')



<!-- ========================= FOOTER ========================= -->
<footer class="section-footer border-top bg">
    <div class="container">
        <section class="footer-top  padding-y">
            <div class="row">
                <aside class="col-md col-6">
                    <h6 class="title">Brands</h6>
                    <ul class="list-unstyled">
                        <li> <a href="#">Adidas</a></li>
                        <li> <a href="#">Puma</a></li>
                        <li> <a href="#">Reebok</a></li>
                        <li> <a href="#">Nike</a></li>
                    </ul>
                </aside>
                <aside class="col-md col-6">
                    <h6 class="title">Company</h6>
                    <ul class="list-unstyled">
                        <li> <a href="#">About us</a></li>
                        <li> <a href="#">Career</a></li>
                        <li> <a href="#">Find a store</a></li>
                        <li> <a href="#">Rules and terms</a></li>
                        <li> <a href="#">Sitemap</a></li>
                    </ul>
                </aside>
                <aside class="col-md col-6">
                    <h6 class="title">Help</h6>
                    <ul class="list-unstyled">
                        <li> <a href="#">Contact us</a></li>
                        <li> <a href="#">Money refund</a></li>
                        <li> <a href="#">Order status</a></li>
                        <li> <a href="#">Shipping info</a></li>
                        <li> <a href="#">Open dispute</a></li>
                    </ul>
                </aside>
                <aside class="col-md col-6">
                    <h6 class="title">Account</h6>
                    <ul class="list-unstyled">
                        <li> <a href="#"> User Login </a></li>
                        <li> <a href="#"> User register </a></li>
                        <li> <a href="#"> Account Setting </a></li>
                        <li> <a href="#"> My Orders </a></li>
                    </ul>
                </aside>
                <aside class="col-md">
                    <h6 class="title">Social</h6>
                    <ul class="list-unstyled">
                        <li>
                            <a href="#"> <i class="fab fa-facebook"></i> Facebook </a>
                        </li>
                        <li>
                            <a href="#"> <i class="fab fa-twitter"></i> Twitter </a>
                        </li>
                        <li>
                            <a href="#"> <i class="fab fa-instagram"></i> Instagram </a>
                        </li>
                        <li>
                            <a href="#"> <i class="fab fa-youtube"></i> Youtube </a>
                        </li>
                    </ul>
                </aside>
            </div>
            <!-- row.// -->
        </section>
        <!-- footer-top.// -->

        <section class="footer-bottom row">
            <div class="col-md-2">
                <p class="text-muted"> &copy 2019 Company name </p>
            </div>
            <div class="col-md-8 text-md-center">
                <span class="px-2">info@pixsellz.io</span>
                <span class="px-2">+879-332-9375</span>
                <span class="px-2">Street name 123, Avanue abc</span>
            </div>
            <div class="col-md-2 text-md-right text-muted">
                <i class="fab fa-lg fa-cc-visa"></i>
                <i class="fab fa-lg fa-cc-paypal"></i>
                <i class="fab fa-lg fa-cc-mastercard"></i>
            </div>
        </section>
    </div>
    <!-- //container -->
</footer>






@yield('extra-js')




</body>
</html>
