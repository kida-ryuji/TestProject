<script type="text/javascript">
    (function() {
        window.addEventListener("load", function() {
            $('[data-toggle="tooltip"]').tooltip();
        });
    })();  
</script>
@section('header')

<nav class="navbar navbar-expand-md navbar-light shadow-sm pb-2">

    <a class="navbar-brand" href="{{ url('/') }}">
        <h1><span>文字</span>のない世界</h1>
    </a>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mr-auto ml-auto align-middle mb-2 mb-lg-0">
            <li class="nav-icon" data-toggle="tooltip" title="トップ">
                <a class="nav-link " href="top"><img src="header_icon/home.png" width="30px"></a>
            </li>
            <li class="nav-icon" data-toggle="tooltip" title="チャットルーム">
                <a class="nav-link" href="chatroom"><img src="header_icon/chat.png" width="30px"></a>
            </li>
            <li class="nav-icon" data-toggle="tooltip" title="ランキング">
                <a class="nav-link" href="ranking"><img src="header_icon/rank.png" width="30px"></a>
            </li>
            <li class="nav-icon" data-toggle="tooltip" title="スタンプ追加">
                <a class="nav-link" href="uploadStamp"><img src="header_icon/plus.png" width="30px"></a>
            </li>
        </ul>
        <!-- Right Side Of Navbar -->
        <ul class="navbar-nav">
            <!--会員登録　ログイン-->
            @guest
            <li class="nav-item">
                <a class="nav-link" href="{{ route('login') }}"><button class="btn btn-outline-secondary">{{ __('ログイン') }}</button></a>
            </li>
            @if (Route::has('register'))
            <li class="nav-item">
                <a class="nav-link" href="{{ route('register') }}"><button class="btn btn-outline-secondary">{{ __('新規登録') }}</button></a>
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

