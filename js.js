// загрузка всего js при возврате на страницу кнопкой Назад браузера

window.onpopstate = function(event) {
	window.location.href = document.location;
	return event.preventDefault();
};

// ===================================