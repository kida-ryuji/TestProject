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
				<form>
				{{-- <form method="POST" action="{{route('add')}}"> --}}
					@csrf
					<div class="row">
						<input type="image" src="/default_stamp/sample.png" name="/default_stamp/sample.png" class="stamp rounded m-2" alt="送信">
						<input type="image" src="/default_stamp/sample.png" name="/default_stamp/sample.png" class="stamp rounded m-2" alt="送信">
						<input type="image" src="/default_stamp/sample.png" name="/default_stamp/sample.png" class="stamp rounded m-2" alt="送信">
						<input type="image" src="/default_stamp/sample.png" name="/default_stamp/sample.png" class="stamp rounded m-2" alt="送信">
						<input type="image" src="/default_stamp/sample.png" name="/default_stamp/sample.png" class="stamp rounded m-2" alt="送信">
						<input type="image" src="/default_stamp/sample.png" name="/default_stamp/sample.png" class="stamp rounded m-2" alt="送信">
						<input type="image" src="/default_stamp/sample.png" name="/default_stamp/sample.png" class="stamp rounded m-2" alt="送信">
						<input type="image" src="/default_stamp/sample.png" name="/default_stamp/sample.png" class="stamp rounded m-2" alt="送信">
						<input type="image" src="/default_stamp/sample.png" name="/default_stamp/sample.png" class="stamp rounded m-2" alt="送信">
						<input type="image" src="/default_stamp/sample.png" name="/default_stamp/sample.png" class="stamp rounded m-2" alt="送信">

					</div>
				</form>
			</div>
		</div>
	</div>

	{{-- <form method="POST" action="{{route('add')}}">
		@csrf
		<div class="comment-container row justify-content-center">
			<div class="input-group comment-area">
				<textarea class="form-control" id="comment" name="comment" placeholder="メッセージを記入"
					aria-label="With textarea"
					onkeydown="if(event.shiftKey&&event.keyCode==13){document.getElementById('submit').click();return false};"></textarea>
				<button type="submit" id="submit" class="btn btn-outline-primary comment-btn">送信</button>
			</div>
		</div>
	</form> --}}
</div>

@endsection

@section('page_js')
<script type="text/javascript" src="{{ asset('js/comment.js') }}"></script>
@endsection