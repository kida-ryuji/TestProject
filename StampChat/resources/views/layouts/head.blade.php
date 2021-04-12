@section('head')
<meta charset="UTF-8">

<title>@yield('title')</title>

<script src="{{ asset('js/app.js')}}"></script>
<link rel="stylesheet" href="{{ asset('css/app.css')}}">

@yield('page_css')

@endsection