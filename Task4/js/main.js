(function () {
    $('.registration-form').submit(function (e) {
        e.preventDefault();
        var dataform = $('.registration-form').serialize();
        $.ajax({
            url: './registration/registration.php',
            type: 'POST',
            data: dataform,
            success: function (res) {
                var resArr = $.parseJSON(res);
                if(resArr[0][0] == 'Ошибка'){
                    $('.modal-page .modal-page_title').html(resArr[0][0]);
                    $('.modal-page .modal-page_text').html(resArr[0][1]);
                    $('.modal-page').modal('show');
                }
                else{
                    $('.modal-page .modal-page_title').html(resArr[0][0]);
                    $('.modal-page .modal-page_text').html(resArr[0][1]);
                    $('.modal-page').modal('show');
                    $('body').append('<meta http-equiv="refresh" content="3; url=/Task4"/>');
                }
            },
            error: function (res) {
                alert(ОШИБКА);
            }
        });

    });
})();

(function () {
    $('.auth-form').submit(function (e) {
        e.preventDefault();
        var dataform = $('.auth-form').serialize();
        $.ajax({
            url: './auth/auth.php',
            type: 'POST',
            data: dataform,
            success: function (res) {
                var resArr = $.parseJSON(res);
                if(resArr[0][0] == 'Ошибка'){
                    $('.modal-page .modal-page_title').html(resArr[0][0]);
                    $('.modal-page .modal-page_text').html(resArr[0][1]);
                    $('.modal-page').modal('show');
                }
                else{
                    $('body').append('<meta http-equiv="refresh" content="1; url=/Task4"/>');
                }
            },
            error: function (res) {
                alert(ОШИБКА);
            }
        });

    });
})();
(function () {
    $('.change-name-button').click(function (e) {
        e.preventDefault();
        var form = $(this).parent();

        var dataform = $(form).serialize();
        $.ajax({
            url: './change/change.php',
            type: 'POST',
            data: dataform,
            success: function (res) {
                var resArr = $.parseJSON(res);
                if(resArr[0][0] == 'Ошибка'){
                    $('.modal-page .modal-page_title').html(resArr[0][0]);
                    $('.modal-page .modal-page_text').html(resArr[0][1]);
                    $('.modal-page').modal('show');
                }
                else{
                    if(resArr[0][1]){
                        $('.modal-page .modal-page_title').html(resArr[0][0]);
                        $('.modal-page').modal('show');
                        $('body').append('<meta http-equiv="refresh" content="1; url=/Task4/?page=photo"/>');
                    }
                    else {
                        $('.modal-page .modal-page_title').html('Ошибка');
                        $('.modal-page .modal-page_text').html('Файл не переименован');
                        $('.modal-page').modal('show');
                    }
                }
            },
            error: function (res) {
                alert(ОШИБКА);
            }
        });
    });
})();
(function () {
    $('.delete-file-button').click(function (e) {
        e.preventDefault();
        var form = $(this).parent();

        var dataform = $(form).serialize();
        $.ajax({
            url: './change/delete.php',
            type: 'POST',
            data: dataform,
            success: function (res) {
                var resArr = $.parseJSON(res);
                if(resArr[0][0] == 'Ошибка'){
                    $('.modal-page .modal-page_title').html(resArr[0][0]);
                    $('.modal-page .modal-page_text').html(resArr[0][1]);
                    $('.modal-page').modal('show');
                }
                else{
                    if(resArr[0][1]){
                        $('.modal-page .modal-page_title').html(resArr[0][0]);
                        $('.modal-page').modal('show');
                        $('body').append('<meta http-equiv="refresh" content="1; url=/Task4/?page=photo"/>');
                    }
                    else {
                        $('.modal-page .modal-page_title').html('Ошибка');
                        $('.modal-page .modal-page_text').html('Файл не переименован');
                        $('.modal-page').modal('show');
                    }
                }
            },
            error: function (res) {
                alert(ОШИБКА);
            }
        });
    });
})();