$("#form_chatbot").submit(function (event) {
	//   alert( "Handler for .submit() called." );
	event.preventDefault();

    const message = $("#message").val();
    console.log(message);
});
