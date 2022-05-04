// подключить jquery.cookie.min.js

 $(document).ready(function () {
    $("#close-notification").click(function() {
        $("#show-notification").slideUp();
        $.cookie('notificationIsShow', 'true', { 
        	expires: 1, // срок действия кука, дней
        	path: '/' // каталог, в котором работает
        })
    })

    if ($.cookie('notificationIsShow')) {
        $('#show-notification').hide();
    } else {
        $('#show-notification').show();
    }
})

// ===================================

// загрузка всего js при возврате на страницу кнопкой Назад браузера

window.onpopstate = function(event) {
    window.location.href = document.location;
    return event.preventDefault();
};

// ===================================

// выполнение нужного js после загрузки всех-привсех ресурсов страницы, включая скрипты фреймворков
$(window).on('load', function() {...})

// ===================================