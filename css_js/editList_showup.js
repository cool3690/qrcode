function showup(id) {

	var showup = document.querySelector('#showup');
	var del = document.querySelector('#delete_'+id);
	var yes = document.querySelector('#yes');
	var no = document.querySelector('#no');
	var wholeBGDarker = document.querySelector('#wholeBGDarker');
	var title = document.querySelector('#title_'+id).textContent;
	var warning = document.querySelector('#warning');
	console.log(title);
 	console.log(id);

	del.addEventListener('click', function() {
		warning.textContent = '確定要刪除 "' + title + '" 這則消息嗎？';
    	showup.style.display = 'block';
    	wholeBGDarker.style.display = 'block';
    	body.style.overflowY = 'hidden';

	})
 
	yes.addEventListener('click', function(){ 
		window.location.href = '../newsDelete.php?d='+id; 

	});
	 
	
	no.addEventListener('click', function(){ 
		showup.style.display = 'none'; 
		wholeBGDarker.style.display = 'none'
		body.style.overflowY = 'auto';
	});
}


 
