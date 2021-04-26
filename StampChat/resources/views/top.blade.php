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

    .button-wrapper {
        text-align: center;
    }

    footer {
        position: absolute;
        bottom: 10;
        width: 100%;
    }
    
    .slide {
        margin-top: 50px;
    }

    .carousel-inner {
        text-align: center;
    }

    .sample_img {
        width: 100%;
    }

    .carousel-indicators .active {
        background-color: #f00;
    }
</style>
@section('page_css')

@endsection

@include('layouts.head')
@include('layouts.header')

@section('content')

<div class="container">
    <div id="app_sample" class="carousel slide mx-auto border " data-ride="carousel">
        <ol class="carousel-indicators">
        <li data-target="#app_sample" data-slide-to="0" class="active"></li>
        <li data-target="#app_sample" data-slide-to="1"></li>
        <li data-target="#app_sample" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
            <img class="sample_img" src="carousel_img/screen_shot_1.png" alt="First slide">
            </div>
            <div class="carousel-item">
            <img class="sample_img" src="carousel_img/screen_shot_2.png" alt="Second slide">
            </div>
            <div class="carousel-item"> 
            <img class="sample_img" src="carousel_img/screen_shot_3.png" alt="Third slide">
            </div>
            <a class="carousel-control-prev" href="#app_sample" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#app_sample" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</div>
<footer class="footer">
    <div class="container">
        <div class="button-wrapper"><a href=""><button class="btn btn-outline-secondary">お問い合わせ</button></a></div>
    </div>
</footer>
@endsection

@section('page_js')
<script type="text/javascript" src=""></script>
@endsection