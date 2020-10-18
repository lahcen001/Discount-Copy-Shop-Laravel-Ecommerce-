{{-- <!-- Authentication Links -->
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
        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
            {{ Auth::user()->name }} <span class="caret"></span>
        </a>

        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="{{ route('home') }}">Mes commandes</a>

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
@endguest --}}



<div class="widget-header icontext">
    <a href="#" class="icon icon-sm rounded-circle border"><i class="fa fa-user"></i></a>
    @guest
    <div class="text">
        <span class="text-muted">Welcome!</span>
        <div>

            <a href="{{ route('login') }}">{{ __('Login') }}</a> |
            @if (Route::has('register'))
            <a href="{{ route('register') }}">{{ __('Register') }}</a>
            @endif

        </div>

    </div>
            @else
            <div class="text">
                <span class="text-muted">Welcome  {{ Auth::user()->name }} !</span>
                <div>


            <a href="{{ route('home') }}"> Mes commandes</a> |
            <a href="{{ route('logout') }} " onclick="event.preventDefault();
            document.getElementById('logout-form').submit();" >  {{ __('Logout') }}</a>
             <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </div>

    </div>

    @endguest
</div>
