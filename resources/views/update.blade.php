<!DOCTYPE html><html><head>
	<meta charset="utf-8">
</head><body>
	<div class="output"></div>
	Mã sinh viên: <input type="text" class="masv"> <br>
	Họ và tên: <input type="text" class="hoten"> <br>
	<button class="submit">Cập nhật</button>

	<script>
		document.querySelector("button.submit").onclick = function() {
			fetch("/Demo/public/update/" + document.querySelector("input.masv").value, {
				method: "PUT",
				headers: {"Content-Type": "application/json"},
				body: '{"masv":"'+document.querySelector("input.masv").value+'","hoten":"'+ document.querySelector("input.hoten").value+'"}'
			})
			.then(resp => {
				if (resp.status == 200) {
					resp.json()
					.then(ret => {
						if (ret.status == "OK")
						document.querySelector("div.output").innerHTML = JSON.stringify(ret.data);
					});
				}
			});
		};
	</script>
</body></html>
