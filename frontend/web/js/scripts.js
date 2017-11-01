    $(".loader").hide();
    /*
     Fullscreen background
     */
    $.backstretch("img/backgrounds/home-origin.jpg");

    $('#top-navbar-1').on('shown.bs.collapse', function () {
        $.backstretch("resize");
    });
    $('#top-navbar-1').on('hidden.bs.collapse', function () {
        $.backstretch("resize");
    });

    /*
     Form
     */
    $('.registration-form fieldset:first-child').fadeIn('slow');

    $('.registration-form input[type="text"], .registration-form input[type="url"], .registration-form textarea').on('focus', function () {
        $(this).removeClass('input-error');
    });

    // next step
    $('.registration-form .btn-next').on('click', function (e) {
        var parent_fieldset = $(this).parents('fieldset');
        var next_step = true;
        parent_fieldset.find('input[type="text"], input[type="number"], input[type="url"], option, select, textarea').each(function () {
            if ($(this).val() == "") {
                $(this).addClass('input-error');
                next_step = false;
            } else {
                $(this).removeClass('input-error');
            }
        });

        if (next_step) {
            parent_fieldset.fadeOut(400, function () {
                $(this).next().fadeIn();
            });
        }

    });

    // previous step
    $('.registration-form .btn-previous').on('click', function () {
        $(this).parents('fieldset').fadeOut(400, function () {
            $(this).prev().fadeIn();
        });
    });

    $('.registration-form').on('submit', function (e) {
        var value = $(this).val();
        console.log();
        var dataString = $('.registration-form').serialize();
        var fieldset_hide = $("fieldset").hide();
        var loader_show = $(".loader").show();
        $(this).find('input[type="text"], input[type="number"], input[type="url"],input[type="url"], option, select, textarea').each(function () {
            if ($(this).val() == "") {
                e.preventDefault();
                $(this).addClass('input-error');
            } else {
                e.preventDefault();
                $(this).removeClass('input-error');
            }
        });
        $.ajax({
            url: "web/site/insert-data/",
            type: 'POST',
            data: dataString,
            timeout: 6000,
            crossDomain: true,
            traditional: true,
            beforeSend: function () {
                fieldset_hide.fadeOut(400, function () {
                    loader_show.fadeIn();
                });
            },
            success: function (data) {
                $(".loader").fadeOut(1500);
                $(".loader").hide();
                if (data === "1") {
                    noty({
                        text: '<h4 class="noty-style"><i class="icon icon-ok icon-green"></i> Data Anda Sudah kami Terima, Terima Kasih</h4>',
                        layout: 'top',
                        type: 'success',
                        timeout: 5000,
                        killer: true,
                        callback: {
                            afterShow: function () {
                                location.reload(true);
                            }
                        }
                    });
                } else {
                    noty({
                        text: '<h4 class="noty-style"><i class="icon icon-remove icon-white"></i> Ada kesalahan Data yang masuk, silakan cek kembali</h4>',
                        layout: 'top',
                        type: 'error',
                        timeout: false,
                        callback: {
                            onCloseClick: function () {
                                location.reload(true);
                            }
                        },
                    });
                }
            }
        });

    });