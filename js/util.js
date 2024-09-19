function elementNullOrEmpty(elementId) {
	if (document.getElementById(elementId).value == null || document.getElementById(elementId).value == "") {
		return true;
	};

	return false;
}

function getValueOfElementById(elementId) {
	return document.getElementById(elementId).value;
}
