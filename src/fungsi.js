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
		var no = 1;
		$.each(data.result, function() {
			$("table").append("<tr><td>"+(no++)+"</td><td>"+this['nim']+"</td><td>"+this['nama']+"</td><td>"+this['prodi']+"</td><td>"+this['angkatan']+"</td></tr>");
		});
	});
}

$(".btnSave").click(function(){
	var data = $('.formAdd').serialize();
	$.ajax({
		type: 'POST',
		url: "simpan.php",
		data: data,
		success: function() {
			alert('input data berhasil');
		}
	});
});

$(".btnDel").click(function(){
	var data = $('.formDel').serialize();
	$.ajax({
		type: 'POST',
		url: "delete.php",
		data: data,
		cache: false,
		success: function() {
			alert('hapus berhasil');
		}
	});
});

$(".btnUp").click(function(){
	var data = $('.formUp').serialize();
	$.ajax({
		type: 'POST',
		url: "update.php",
		data: data,
		cache: false,
		success: function() {
			alert('update berhasil');
		}
	});
});