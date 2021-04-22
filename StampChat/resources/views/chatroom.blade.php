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
				<div class="row p-2">
					<button type="button" name="stamp" value="/default_stamp/banana.png" class="stamp_btn btn m-1">
						<img src="/default_stamp/banana.png" class="stamp rounded" alt="スタンプ">
					</button>
					<button type="button" name="stamp" value="/default_stamp/business_kigyousenshi4.png" class="stamp_btn btn m-1">
						<img src="/default_stamp/business_kigyousenshi4.png" class="stamp rounded" alt="スタンプ">
					</button>
					<button type="button" name="stamp" value="/default_stamp/chick_and_woman.png" class="stamp_btn btn m-1">
						<img src="/default_stamp/chick_and_woman.png" class="stamp rounded" alt="スタンプ">
					</button>
					<button type="button" name="stamp" value="/default_stamp/dance_woman.png" class="stamp_btn btn m-1">
						<img src="/default_stamp/dance_woman.png" class="stamp rounded" alt="スタンプ">
					</button>
					<button type="button" name="stamp" value="/default_stamp/yaruki_woman.png" class="stamp_btn btn m-1">
						<img src="/default_stamp/yaruki_woman.png" class="stamp rounded" alt="スタンプ">
					</button>
					<button type="button" name="stamp" value="/default_stamp/game_yatsuatari.png" class="stamp_btn btn m-1">
						<img src="/default_stamp/game_yatsuatari.png" class="stamp rounded" alt="スタンプ">
					</button>
					<button type="button" name="stamp" value="/default_stamp/hanamaru.png" class="stamp_btn btn m-1">
						<img src="/default_stamp/hanamaru.png" class="stamp rounded" alt="スタンプ">
					</button>
					<button type="button" name="stamp" value="/default_stamp/jouhou_hanran.png" class="stamp_btn btn m-1">
						<img src="/default_stamp/jouhou_hanran.png" class="stamp rounded" alt="スタンプ">
					</button>
					<button type="button" name="stamp" value="/default_stamp/naruto.png" class="stamp_btn btn m-1">
						<img src="/default_stamp/naruto.png" class="stamp rounded" alt="スタンプ">
					</button>
					<button type="button" name="stamp" value="/default_stamp/sick_humster.png" class="stamp_btn btn m-1">
						<img src="/default_stamp/sick_humster.png" class="stamp rounded" alt="スタンプ">
					</button>
					<button type="button" name="stamp" value="/default_stamp/Supprise_pig.png" class="stamp_btn btn m-1">
						<img src="/default_stamp/Supprise_pig.png" class="stamp rounded" alt="スタンプ">
					</button>

				</div>
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
<script type="text/javascript" src="{{ asset('js/stamp_send.js') }}"></script>
@endsection