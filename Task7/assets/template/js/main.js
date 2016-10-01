(function () {
    $('.auth-form-mvc').on('submit', function (e) {
        e.preventDefault();
        var dataform = $('.auth-form-mvc').serialize();

        $.ajax({
            url: '/recaptcha',
            type: 'POST',
            dataType: 'json',
            data: dataform,
            success: function (res) {
                if(res['success']){
                    $.ajax({
                        url: '/main',
                        type: 'POST',
                        dataType: 'json',
                        data: dataform,
                        success: function (res) {
                            if(res){
                                $('body').append("<meta http-equiv='refresh' content='0; url=/users'/>");
                            }
                        }
                    });
                }

            }
        });

    });
})();
