@extends('layouts.base')

@section('title','スタンプランキング')

@section('page_css')
<link href="{{ asset('css/stampRanking.css') }}" rel="stylesheet">
@endsection

@include('layouts.head')
@include('layouts.header')

@section('content')

<div class="container">
    <p class="rank-title">スタンプランキング</p>
    <div class="ranking-table">
        <table align="center">

            @php
            $rank = 1;
            $cnt = 1;
            $bef_count = 0;
            @endphp

            @foreach($stamps as $stamp)

            @php
            if($bef_count != $stamp->count){
            $rank = $cnt;
            }

            @endphp

            <tr class="ranking-space">
                <!--順位-->
                <td class="rank-number">{{$rank}}位</td>
                <!--スタンププレビュー-->
                <td><img src="{{$stamp->path}}"></td>
                <!--スタンプ名-->
                <td class="rank-name">{{$stamp->stamp_name}}のスタンプ</td>
                <!--使用回数-->
                <td class="rank-count">使用回数：{{$stamp->count}}回</td>
                @php
                $bef_count = $stamp->count;
                $cnt++;
                @endphp
            </tr>

            @endforeach

        </table>

    </div>
</div>



@endsection

@section('page_js')
<script type="text/javascript" src=""></script>
@endsection