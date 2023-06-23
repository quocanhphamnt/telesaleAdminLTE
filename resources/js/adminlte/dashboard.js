$( document ).ready(function() {

    var Toast = Swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 3000
    });

    $('.swalDefaultSuccess').click(function() {
        Toast.fire({
            icon: 'success',
            title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
        })
    });

    $('.swalDefaultError').click(function() {
        Toast.fire({
          icon: 'error',
          title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
        })
    });

    $('.toastsPhone').click(function() {
        $(document).Toasts('create', {
            class: 'bg-warning',
            title: 'Incoming call',
            icon: 'fas fa-phone fa-lg',
            image: 'resources/img/user2-160x160.jpg',
            imageAlt: 'User Picture',
            close: false,
            body: '<div class="row justify-content-center">\
                        <label>Alexander Pierce</label>\
                    </div>\
                    <div class="row justify-content-center">\
                        <span class="badge badge-danger mx-1">Admin</span>\
                        <span class="badge badge-info mx-1">Customer</span>\
                    </div>\
                    <div class="row justify-content-center mt-2">\
                    </div>\
                    <div class="row justify-content-around">\
                        <button class="btn btn-danger rounded-circle mx-2" data-dismiss="toast" aria-label="Close"><i class="fas fa-phone" aria-hidden="true"></i></button>\
                        <button class="btn btn-success rounded-circle mx-2"><i class="fas fa-phone"></i></button>\
                    </div>',
        });

        $(document).Toasts('create', {
            class: 'bg-success',
            title: 'Calling',
            icon: 'fas fa-phone fa-lg',
            image: 'resources/img/user2-160x160.jpg',
            imageAlt: 'User Picture',
            close: false,
            body: '<div class="row justify-content-center">\
                        <label>Alexander Pierce</label>\
                    </div>\
                    <div class="row justify-content-center">\
                        <span class="badge badge-danger mx-1">Admin</span>\
                        <span class="badge badge-info mx-1">Customer</span>\
                    </div>\
                    <div class="row justify-content-center mt-2">\
                        <label>4:28</label>\
                    </div>\
                    <div class="row justify-content-around">\
                        <button class="btn btn-danger rounded-circle mx-2" data-dismiss="toast" aria-label="Close"><i class="fas fa-phone" aria-hidden="true"></i></button>\
                        <button class="btn btn-default rounded-circle mx-2"><i class="fas fa-microphone"></i></button>\
                        <button class="btn btn-default rounded-circle mx-2"><i class="fas fa-volume-up"></i></button>\
                    </div>',
        });
    });

    $('.dropdown-menu-filter').click( function(e) {
        e.stopPropagation();
    });

    $('.checkbox-toggle').click(function () {
        var clicks = $(this).data('clicks')
        if (clicks) {
            //Uncheck all checkboxes
            $('.mailbox-messages input[type=\'checkbox\']').prop('checked', false)
            $('.checkbox-toggle .far.fa-check-square').removeClass('fa-check-square').addClass('fa-square')
        } else {
            //Check all checkboxes
            $('.mailbox-messages input[type=\'checkbox\']').prop('checked', true)
            $('.checkbox-toggle .far.fa-square').removeClass('fa-square').addClass('fa-check-square')
        }
        $(this).data('clicks', !clicks)
    })

    $('.fa-adjust').on('click', function () {
        if ($('body').hasClass('dark-mode')) {
            $('body').removeClass('dark-mode')
        } else {
            $('body').addClass('dark-mode')
        }
    })
});
