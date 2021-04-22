$(function() {
	$('.stamp_btn').click(function() {
		// var name = ""
		var stamp = $(this).val();

		var json = {
			"stamp": stamp
		};
		console.log(stamp);

		$.ajax({
			headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
				'Content-Type': 'application/json; charset=utf-8'
			},
			type: "POST",
			url: "add",
			data: JSON.stringify(json),
			dataType:"json",
		})
		.done(function(data) {
			console.log("コメントID: " + data);
			//チャット更新
			get_data();
		})
		.fail(function(jqXHR) {
			alert("スタンプ送信失敗");
			console.log(jqXHR.status);
		});
	}

	)

});
