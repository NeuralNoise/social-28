$(document).ready(function(){
	var postId = 0;
	var postBodyElement = null;
	$('.post').find('.interaction').find('.edit').on('click', function(e){
		e.preventDefault();
		postBodyElement = e.target.parentNode.parentNode.childNodes[1];
		var postBody = postBodyElement.textContent;
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
			//console.log(JSON.stringfy(msg));
			$(postBodyElement).text(msg['new_body']);
			$('#edit-modal').modal('hide');
		});
	});
	/*end update post*/
});

