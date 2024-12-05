jQuery(document).ready(function($) {

    $('#callback').submit(function(e) {

        e.preventDefault();

        var formData = new FormData(callback);

        $.ajax({
            url: '/php/mail.php',
            method: 'post',
            dataType: 'html',
            data: formData,
            cache: false,
            contentType: false,
            processData: false,
            success: function(data) {
                $('#message').html(data);
                $('#message').addClass('active');
            }
        });
    });

});