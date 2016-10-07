$( document ).ready(function() {
    (function () {
        var location = window.location.pathname;
        if(location == '/') {
            $.ajax({
                url: '/rout/index.php/products',
                type: 'get',
                dataType: 'json',
                success: function (res) {
                    $.each(res, function (i, l) {
                        $('.list-group').append('<a class="list-group-item" href="/' + l.id + '">' + l.product + '</a>');
                    });
                }
            });
        }
        else {
            $.ajax({
                url: '/rout/index.php/products' + location,
                type: 'get',
                dataType: 'json',
                success: function (res) {
                    $.each(res, function (i, l) {
                        $('.container').append('<h2>' + res[0].product + '</h2><table class="table table-bordered"><tbody><tr><td><b>Category</b></td><td>' + res[0].category + '</td></tr><tr><td><b>Characteristics</b></td><td>' + res[0].characteristics + '</td></tr><tr><td><b>Price</b></td><td>' + res[0].price + '</td></tr></tbody></table>');
                    });
                }
            });
        }

    })();
});
