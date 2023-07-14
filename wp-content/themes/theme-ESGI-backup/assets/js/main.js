$(document).ready(function(){
	ajaxifyPaginationLinks();
})
	


function showPage(page, nextState, nextTitle, nextURL){

	console.log('PAGE DEMANDEE', page);

	$.ajax({
		url: esgi.ajaxURL,
		type: 'POST',
		data: {
			'action': 'load_posts',
			'page' : page,
			'base' : esgi.base
		}
	}).done(function(reponse){
		console.log(reponse)
		$('#post-list-wrapper').html(reponse);
		ajaxifyPaginationLinks();
		window.history.replaceState(nextState, nextTitle, nextURL);
	})

}


function ajaxifyPaginationLinks(){
	$('.page-numbers').click(function(e){
		e.preventDefault();

		var page;
		const current = Number($('.current').html());

		if($(this).hasClass('prev')){
			page = current - 1;
		}
		else if($(this).hasClass('next')){
			page = current + 1;
		}
		else{
			page = Number($(this).html());
		}

		// mise à jour de l'url
		const nextState = {};
		const nextTitle = 'Page - ' + page;
		const nextURL = $(this).attr('href');
		showPage(page, nextState, nextTitle, nextURL);
	})
}


