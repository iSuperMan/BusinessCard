$(function(){

	var App = {};

	App.title = $(".new").find("h3");

	// show new's content by clicking on title
	App.title.click(function(){

		/* toogle new's content*/
		$(this).next().slideToggle(300); 

		var icon = $(this).find(".glyphicon");

		/* switch icon direction */
		if( icon.hasClass("glyphicon-chevron-down")){
			icon.removeClass("glyphicon-chevron-down");
			icon.addClass("glyphicon-chevron-up");
		} else{
			icon.removeClass("glyphicon-chevron-up");
			icon.addClass("glyphicon-chevron-down");
		}
	});

	// submit button
	App.submit = $("#submit");
	
	// textarea
	App.textarea = $("#news_textarea");
	
	// inputs
	App.name = $("#title");
	App.author = $("#author");

	// submit button click event
	App.submit.click(function(){
		var data = {};

		// collect data
		data.text = App.textarea.val();
		data.title = App.name.val();
		data.author = App.author.val();
		
		// verify data
		for( var v in data){
			if(data[v] === ""){
				alert( "Не все поля заполнены");
				return;
			}
		}

		// send data to server
		sendNews(data);
	});

	var sendNews = function(news){

		// perform ajax request
		$.ajax({
			url: '/ajax/addNews',
			type: "POST",
			data: news,
			success: function(){
				console.log("success");
				location.reload();
			},
			error: function(){
				console.log("error");
			}
		});
	};
});