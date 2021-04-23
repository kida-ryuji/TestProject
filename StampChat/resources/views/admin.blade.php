@extends('layouts.base')

@section('title','管理者画面')
<!--style-->
<style>
.stamp {
    height: 120px;
}
    
</style>
@section('page_css')

@endsection

@include('layouts.head')

@section('content')

<div class="container">
    <div class="row col-12 upload_stamp_list">
        <ul class="list-group w-100 mt-5">
            @foreach($stamps as $stamp)
                <li class="list-group-item">
                    <div class="row">
                        <div class="col-6">
                            <div class="stamp_container">
                               <img  class="stamp" src="{{ $stamp->path }}">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="row">
                                <div class="col-3">
                                    <p>スタンプ名<p>
                                </div>
                                <div class="col-9">
                                    <p>{{ $stamp->stamp_name }}</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-3">
                                    <p>登録日</p>
                                </div>
                                <div class="col-9">
                                    <p>{{ $stamp->created_at }}</p>
                                </div>
                            </div>
                            <div class="row">
                                <form method="" action="">
                                    <a class="btn btn-outline-secondary m-1" href="">詳細</a>
                                </form>
                                <form method="" action="">
                                    <a class="btn btn-outline-secondary m-1" href="">編集</a>
                                </form>
                                <form method="POST" action="{{ route('delete') }}">
                                    @csrf
                                    <input id="delete" type="submit" class="btn btn-outline-secondary m-1" value="削除">
                                    <input type="hidden" name="stamp" value="{{ $stamp->path }}">
                                </form>
                            </div>
                        </div>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>
</div>

@endsection

@section('page_js')
<script type="text/javascript" src=""></script>
@endsection