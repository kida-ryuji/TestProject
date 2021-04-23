@extends('layouts.base')

@section('title','チャットルーム')

@section('page_css')
<link href="{{ asset('css/chatroom.css') }}" rel="stylesheet">
@endsection

@include('layouts.head')
@include('layouts.header')

@section('content')
<div class="py-4">
	<div class="chat-container row justify-content-center">
		<div class="chat-area">
			<div class="card">
				<div class="card-header">チャット</div>
				<div class="card-body chat-card">
					<div id="comment-data"></div>
				</div>
			</div>
		</div>

		<div class="stamp-area ml-3 card">
			<div class="card-body stamp-card">
				<p>デフォルトスタンプ</p>
				<div class="row p-2">

					@foreach ($default_stamps as $d_stamp)
						<button type="button" name="stamp" value="{{$d_stamp->path}}" class="stamp_btn btn m-1">
							<img src="{{$d_stamp->path}}" class="stamp rounded" alt="{{$d_stamp->stamp_name}}のスタンプ">
						</button>
					@endforeach

				</div>
				<p>追加スタンプ</p>
				<div class="row p-2">
					@foreach ($upload_stamps as $u_stamp)
						<button type="button" name="stamp" value="{{$u_stamp->path}}" class="stamp_btn btn m-1">
							<img src="{{$u_stamp->path}}" class="stamp rounded" alt="{{$u_stamp->stamp_name}}のスタンプ">
						</button>

					@endforeach

				</div>
			</div>
		</div>
	</div>
</div>

@endsection

@section('page_js')
<script type="text/javascript" src="{{ asset('js/comment.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/stamp_send.js') }}"></script>
@endsection