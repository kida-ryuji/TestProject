$(function () {
	$('.stamp_btn').click(function () {
		// var name = ""
		var stamp = $(this).val();

		function uuidv4() {
			return 'xxxxxxxx-xxxx-4xxx-yxxx-xxxxxxxxxxxx'.replace(/[xy]/g, function (c) {
				var r = Math.random() * 16 | 0, v = c == 'x' ? r : (r & 0x3 | 0x8);
				return v.toString(16);
			});
		}

		var strage = sessionStorage.getItem('uuid');

		if (strage == null) {
			strage = uuidv4();
			sessionStorage.setItem('uuid', strage);
		}


		console.log(strage);

		var json = {
			"stamp": stamp,
			"uuid": strage

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
			dataType: "json",
		})
			.done(function (data) {
				console.log("コメントID: " + data);
				//チャット更新
				get_data();
			})
			.fail(function (jqXHR) {
				alert("スタンプ送信失敗");
				console.log(jqXHR.status);
			});
	}

	)

});
