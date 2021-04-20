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
            <div id="upload-image">
            <p>Preview<br>
                <canvas id="preview" style="max-width:200px;"></canvas>
            </p>
            </div>
            <!-- <img src="{{ asset('upload_stamp/banana.png') }}"> -->
        </div>
        <div class="col-md-6">
            <form method="POST" action="{{route('upload')}}" enctype="multipart/form-data" class="post_form">
                <div class="form-group">
                    <label for="exampleFormControlFile1">ファイル</label>
                    <input type="file"  id="exampleFormControlFile1" name="image" class="form-control-file" accept="image/*" onchange="previewImage(this);">
                </div>
            {{ csrf_field() }}
            <button type="submit" class="btn btn-primary">アップロード</button>
            </form>
        </div>
    </div>
    <div class="row upload_stamp_data" >

    </div>
</div>
@endsection

@section('page_js')
<script type="text/javascript" src="{{ asset('js/upload.js') }}"></script>
@endsection