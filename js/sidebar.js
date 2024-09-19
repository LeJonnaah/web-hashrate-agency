$('.nav_hamb').click(function () {
	if ($('#menu').hasClass('is-closed')) {
		openMenuBar();
		addBackgroundFade();
		return;
	}

	closeMenuBar();
	removeBackgroundFade();
});

$('#background-fade').click(function () {
	if ($('#background-fade').hasClass('is-closable')) {
		closeMenuBar();
		removeBackgroundFade();
		return;
	}

	return;
});


function openMenuBar() {
	$('#menu').attr("aria-hidden", "false");

	$('#menu').removeClass('is-closed');
	$('#menu').addClass('is-open');
}

function closeMenuBar() {
	$('#menu').attr("aria-hidden", "true");
	$('#menu').removeClass('is-open');
	setTimeout(addIsClosedClassToMenuBar, 250);
}

function addBackgroundFade() {
	$('#background-fade').addClass('is-visible');
	$('#background-fade').addClass('is-closable');
}

function removeBackgroundFade() {
	$('#background-fade').removeClass('is-visible');
	$('#background-fade').removeClass('is-closable');
}

function addIsClosedClassToMenuBar() {
	$('#menu').addClass('is-closed')
}
