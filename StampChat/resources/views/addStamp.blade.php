@extends('layouts.base')

@section('title','スタンプ追加')

@section('page_css')

@endsection

@include('layouts.head')
@include('layouts.header')

@section('content')
<h1>スタンプ追加ページ</h1>

<div class="container">
    <div class="row">
        <div class="col-md-6 plev-img">
            
            <img src="<?php echo 'https://1.bp.blogspot.com/-ZOg0qAG4ewU/Xub_uw6q0DI/AAAAAAABZio/MshyuVBpHUgaOKJtL47LmVkCf5Vge6MQQCNcBGAsYHQ/s400/pose_pien_uruuru_woman.png';?>">
            <p>画像プレビュー</p>
        </div>
        <div class="col-md-6">
            <form method="POST" action="{{route('upload')}}" enctype="multipart/form-data" class="post_form">
                <div class="form-group">
                    <label for="exampleFormControlFile1">ファイル</label>
                    <input type="file"  id="exampleFormControlFile1" name="image" class="form-control-file">
                </div>
            {{ csrf_field() }}
            <button type="submit" class="btn btn-primary">アップロード</button>
            </form>
        </div>
    </div>
</div>
@endsection

@section('page_js')
<sctipt type="text/javascript" src=""></script>
@endsection