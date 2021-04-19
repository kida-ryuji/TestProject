$(function() {
	get_data();
});

function get_data() {
	$.ajax({
		url: "result",
		dataType: "json",
		success: data => {
			console.log(data.comments);
			document.getElementById('comment-data').innerHTML = '';
			for (var i = 0; i < data.comments.length; i++) {
				var html = `
					<div class="media comment-visible">
						<div class="media-body comment-body row">
							<div class="d-flex flex-column">
								<span class="comment-body-user" id="name">${data.comments[i].user_name}</span>
								<span class="comment-body-time" id="created_at">${data.comments[i].created_at}</span>
							</div>
							<span class="comment-body-content" id="comment">${data.comments[i].stamp}</span>
						</div>
					</div>
				`;
				$("#comment-data").append(html);
			}
		},
		error: () => {
			alart("ajax Error")
		}
	});

	setTimeout("get_data()", 5000)
}