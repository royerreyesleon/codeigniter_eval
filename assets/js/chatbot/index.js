const base_url = $("#base_url").val();
const user_email = $("#user_email").val();
const user_img = $("#user_img").val();
const chatbot_img = $("#chatbot_img").val();

$("#form_chatbot").submit(function (e) {
	e.preventDefault();

	let form = $(this);

	let $inputs = form.find("input, button");
	let inputMessage = $inputs[0];

	if (!inputMessage.value) {
		return;
	}

	let serializedData = form.serialize();

	printMsgUser($inputs[0].value);

	sendMessage(serializedData, $inputs);
});

function sendMessage(serializedData, $inputs) {
	$.post("getMessageOrStep", serializedData, function (res) {
		let { response, suggestion, trigger } = JSON.parse(res);

		splitSuggestions = suggestion ? suggestion.split("|") : [];

		// DELAY SIMULATION
		setTimeout(() => printMsgChatbot(response, splitSuggestions), 500);

		$inputs.prop("disabled", false).prop("readonly", false).val("");

		if (trigger) {
			setTimeout(() => sendMessage(`step=${trigger}`, $inputs), 1000);
		}
	});
}

function printMsgUser(message) {
	$(".direct-chat-messages").last().append(`
        <div class="direct-chat-msg right">
            <div class="direct-chat-info clearfix">
                <span class="direct-chat-name pull-right">${user_email}</span>
            </div>
            <img class="direct-chat-img" src="${user_img}">
            <div class="direct-chat-text">
                ${message}
            </div>
        </div>
    `);
	moveScroll();
}

function printMsgChatbot(response, suggestions) {
	$(".direct-chat-messages").last().append(`
        <div class="direct-chat-msg">
            <div class="direct-chat-info clearfix">
                <span class="direct-chat-name pull-left">Bot</span>
            </div>
            <img class="direct-chat-img" src="${chatbot_img}">
            <div class="direct-chat-text">
                ${response}
            </div>
            ${printSuggestions(suggestions)}
        </div>
    `);
	moveScroll();
}

function moveScroll() {
	let scroll = $(".direct-chat-messages");
	scroll.animate({ scrollTop: scroll.prop("scrollHeight") });
}

function printSuggestions(suggestions) {
	let btns = suggestions.length > 0 ? "<small>Sugerencias:</small>" : "";
	suggestions.forEach((element) => {
		btns += `<button type="button" class="btn btn-warning btn-xs btnSuggestion">${element}</button> `;
	});
	return btns;
}

$(document).ready(function () {
	$(document).on("click", ".btnSuggestion", function () {
		let btnMessage = $(this).text();
		let form = $("#form_chatbot");
		let $inputs = form.find("input, button");
		printMsgUser(btnMessage);
		sendMessage(`message=${btnMessage}`, $inputs);
	});
});
