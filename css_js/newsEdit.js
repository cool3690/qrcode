$(document).ready(function() {
	var a = $('#theText').text();
	$('#txtAreaInput').val(a);
	$("#fileImgUp").change(function() {
			getFileName(this);
		});
	});


function showFileName(filename){
	$('#x').append('<div class="row filename"><div class="col-lg-1">&nbsp;</div><div class="col-lg-11">'+filename+'</div></div>');
}

function clearOldSelection(){
	$('#x').html('');
}

function getFileName(file) {
	clearOldSelection();
	var myfile = file.files;
	for (var i = 0; i < myfile.length; i++) {
		showFileName(myfile[i].name);
	}
}

function hideImg(delImg) {
	var wholeDiv = $(delImg).closest('div');
	wholeDiv.hide();
	$(delImg).hide();
}