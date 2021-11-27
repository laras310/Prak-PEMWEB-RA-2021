$(document).ready(function() {
    selesai();
});
 
function selesai() {
	setTimeout(function() {
		update();
		selesai();
	}, 200);
}
 
function update() {
	$.getJSON("data.php", function(data) {
		$("table").empty();
		$("table").append("<tr><th>"+"Nomor"+"</th><th>"+"Nama"+"</th><th>"+"Jumlah Orang"+"</th><th>"+"Tanggal"+"</th><th>"+"Waktu"+"</th></tr>");
		$.each(data.result, function() {
			$("table").append("<tr><td>"+this["no"]+"</td><td>"+this["nama"]+"</td><td>"+this["jumlah"]+"</td><td>"+this["tanggal"]+"</td><td>"+this["waktu"]+"</td></tr>");
		});
	});
}