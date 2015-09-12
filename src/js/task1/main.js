$(function(){

	var App = {};

	// define control buttons
	App.edit = $("#edit");
	App.confirm = $("#confirm");
	App.cancel = $("#cancel");

	// define another variables
	App.text = $("#text");
	App.textarea = $("#textarea");
	App.content = $(".content");

	// edit button event
	App.edit.click(function(){
		
		$(this).hide(); // hide edit button
		App.confirm.parent().show(); // show confirm and cancel buttons

		var editText = App.text.text(); // get edit text
		var height = parseInt(App.text.css("height")); // get height of edit text
		height = height < 50 ? 50 : height;
		App.text.hide(); // hide text

		App.textarea.show().text(editText); // add edit text in textarea
		App.textarea.css("height", (height*1.2)+'px');
	});

	// cancel button event
	App.cancel.click(function(){

		$(this).parent().hide(); // hide cofirm and cancel buttons
		App.edit.show(); // show edit button

		App.textarea.hide().text(""); // remove text and hide textarea
		App.text.show(); // show common text
	});

	App.confirm.click(function(){

		var newText = App.textarea.val(); // get new text
		App.text.text(newText); // update in client
		updateText(newText); // update in server

		App.cancel.trigger("click");
	});

	var updateText = function(newText){

		// set request data
		var request = {};
		request.new_text = newText;

		// perform ajax request
		$.ajax({
			url: '/ajax/updateText',
			type: "POST",
			data: request,
			success: function(){
				console.log("success");
			},
			error: function(){
				console.log("error");
			}
		});
	};

});