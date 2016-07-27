$(document).ready(function(){
	var postId = 0;
	$('.post').find('.interaction').find('.edit').on('click', function(e){
		e.preventDefault();
		var postBody = e.target.parentNode.parentNode.childNodes[1].textContent;
		$('#post-body').val(postBody);
		postId = e.target.parentNode.parentNode.dataset['postid'];
		$('#edit-modal').modal();
	});

	/*update post*/
	$('#modal-save').on('click',function(){
		$.ajax({
			method: 'POST',
			url: url,
			data: {body:$('#post-body').val(),postId:postId,_token:token}
		})
		.done(function(msg){
			console.log(msg['message']);
		});
	});
	/*end update post*/
});

