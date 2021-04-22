@extends('layouts.base')

@section('title','スタンプ追加')

@section('page_css')

@endsection

@include('layouts.head')
@include('layouts.header')

@section('content')
<style>
    .stamp_container {
        width: 250px;
        height: 250px;
        text-align: center;
        display: flex;
        justify-content: center;
        align-items: center;
        margin: auto;
    }
    .upload {
        height: 295px;
    }

</style>

<div class="container">
    <div class="upload row mt-5">
        <div class="col-md-6">
            <div id="upload-image">
            <p>Preview<br>
                <canvas id="preview" style="max-height:250px; max-width:250px;"></canvas>
            </p>
            </div>
            <!-- <img src="{{ asset('upload_stamp/banana.png') }}"> -->
        </div>
        <div class="col-md-6">
            <form method="POST" action="{{route('upload')}}" enctype="multipart/form-data" class="post_form">
                <div class="form-group">
                    <label for="exampleFormControlFile1">スタンプにしたい画像を選択</label>
                    <input type="file"  id="exampleFormControlFile1" name="image" class="form-control-file" accept="image/*" onchange="previewImage(this);">
                </div>
            {{ csrf_field() }}
            <button type="submit" class="btn btn-primary">アップロード</button>
            </form>
        </div>
    </div>
    <div class="content row justify-content-center border-bottom mb-3" >
        <h2>追加済みのスタンプ</h2>
    </div>
    <div class= "row">
        @empty(count($stamps))
            <p>データなし</p>
        @endempty
        @foreach($stamps as $stamp)    
            <div class="col-4 align-item-center">
                <div class="stamp_container">
                    <img src="{{ $stamp->path }}">
                </div>
            </div>
        @endforeach
        </div>
    </div>
</div>
@endsection

@section('page_js')
<script type="text/javascript" src="{{ asset('js/upload.js') }}"></script>
@endsection