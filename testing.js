function result() {
	let elem = document.getElementsByClassName('check');

	for (let el of elem) {
		if (el.value == 1) {
			el.parentElement.style.background = 'SpringGreen';
		}
		else if (el.checked && el.value == 0) {
			el.parentElement.style.background = 'LightSalmon';
		}
	};

};