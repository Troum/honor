$().ready(function () {

    $(document).on('click', '[data-toggle="lightbox"]', function(event) {
        event.preventDefault();
        $(this).ekkoLightbox();
    });


    let fd = new FormData(),
        id = null,
        check = null,
        modal = $('#checkModal');

    function refresh(link) {
        $.ajax({
            url: link
        }).done(function (data) {
            $('#productsTable').html(data);
        }).fail(function () {
            alert('Невозможно отобразить');
        });
    }

    $('[data-show]').each(function () {
        $(this).on('click', function () {
            id = $(this).data('id');
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                url: '/home/' + id,
                data:{id: id},
                cache: false,
                contentType: false,
                processData: false,
                dataType: 'JSON',
            }).done(function (response) {
                modal.modal('show');
                modal.find('#imei').text(response.imei);
                modal.find('#registeredCheck').text(response.check);
                modal.find('#image').attr('src','images/' + response.photo);
                modal.find('[data-toggle="lightbox"]').attr('href','images/' + response.photo);
            }).fail(function () {
                alert('Невозможно отобразить');
            });
        })
    });

    $('#sendSMS').on('click', function () {
        fd.append('id', id);
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            url: '/home/send-sms',
            type: 'POST',
            data: fd,
            cache: false,
            contentType: false,
            processData: false,
            dataType: 'JSON',
            success: function (response) {
                if(response.success)
                {
                    modal.modal('hide');
                    $.ajax({
                        url: '/home'
                    }).done(function (data) {
                        $('#tabs').html(data);
                    }).fail(function () {
                        alert('Невозможно отобразить');
                    });
                    toastr.success(response.success)
                }
                if(response.error)
                {
                    toastr.error(response.error)
                }
            },
            error: function(error) {
                for(let err in error.responseJSON.errors ) {
                    toastr.error(error.responseJSON.errors[err][0]);
                }
            }
        });
    });

    $('body').on('click', '[data-check]', function () {
        let id = $(this).data('check');
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            url: '/home/check/' + id,
            data:{id: id},
            cache: false,
            contentType: false,
            processData: false,
            dataType: 'JSON',
        }).done(function (response) {
            toastr.info(response.status);
        }).fail(function () {
            alert('Невозможно отобразить');
        });
    });





});