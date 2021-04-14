@section('header')

<nav class="navbar navbar-expand-md navbar-light shadow-sm pb-2">

    <a class="navbar-brand" href="{{ url('/') }}">
        <h1>文字のない世界</h1>
    </a>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mr-auto ml-auto align-middle mb-2 mb-lg-0">
            <li class="nav-icon">
                <a class="nav-link " href="#">ホーム</a>
            </li>
            <li class="nav-icon">
                <a class="nav-link" href="#">チャットルーム</a>
            </li>
            <li class="nav-icon">
                <a class="nav-link" href="#">スタンプランキング</a>
            </li>
            <li class="nav-icon">
                <a class="nav-link" href="#">スタンプ追加</a>
            </li>
        </ul>
        <!-- Right Side Of Navbar -->
        <ul class="navbar-nav">
            <!--会員登録　ログイン-->
            @guest
            <li class="nav-item">
                <a class="nav-link" href="{{ route('login') }}">{{ __('ログイン') }}</a>
            </li>
            @if (Route::has('register'))
            <li class="nav-item">
                <a class="nav-link" href="{{ route('register') }}">{{ __('新規登録') }}</a>
            </li>
            @endif
            @else
            <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }} <span class="caret"></span>
                </a>

                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
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

</nav>

@endsection