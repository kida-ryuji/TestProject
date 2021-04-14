@extends('layouts.base')

@section('title','トップページ')
<!--style-->
<style>
    html,
    body {
        background-color: #f0f8ff;
        font-family: sans-serif;
    }

    p {
        text-align: center;
    }

    .botton-wrapper {
        text-align: center;
    }
</style>
@section('page_css')

@endsection

@include('layouts.head')
@include('layouts.header')

@section('content')
<p>トップページ</p>
<div class="botton-wrapper"><a href=""><button class="btn btn-outline-secondary">お問い合わせ</button></a></div>


@endsection

@section('page_js')
<script type="text/javascript" src=""></script>
@endsection