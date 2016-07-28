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
			url: urlEdit,
			data: {body:$('#post-body').val(),postId:postId,_token:token}
		})
		.done(function(msg){
			//console.log(JSON.stringfy(msg));
			$(postBodyElement).text(msg['new_body']);
			$('#edit-modal').modal('hide');
		});
	});
	/*end update post*/

	/*like dislike*/
	$('.like').on('click',function(e){
		e.preventDefault();
		postId = e.target.parentNode.parentNode.dataset['postid'];
		var isLike = e.target.previousElementSibling == null;
		//console.log(isLike);
		$.ajax({
			method: 'POST',
			url: urlLike,
			data: {isLike:isLike, postId:postId, _token:token}
		})
		.done(function(){
			//change the page
			e.target.innerText= isLike ? e.target.innerText == 'Like' ? 'You like this post' : 'Like' : e.target.innerText == 'Dislike' ? 'You dont like this post': 'Dislike';
			if(isLike){
				e.target.nextElementSibling.innerText = 'Dislike';
			}else{
				e.target.previousElementSibling.innerText = 'Like';
			}
		});
	});
	
	/*like dislike*/
});

