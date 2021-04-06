'use strict'
$(document).ready(function () {

    /* color style picker */
    if ($.type($.cookie("stylesheet2")) != 'undefined' && $.cookie("stylesheet2") != '') {
        var currentstyle = $('#style');
        $('head').append('<link href="assets/css/style-' + $.cookie('stylesheet2') + '.css" rel="stylesheet"  id="style">');
        setTimeout(function () {
            currentstyle.remove();
        }, 1000);

        $('.colorselect2').each(function () {
            var activestyle = $(this).find('input[type="radio"]');
            if (activestyle.next('label').attr('data-title') === $.cookie("stylesheet2")) {
                activestyle.prop("checked", true).parent().addClass('active');
            }
        })

    } else {
        $('.colorselect2 > input[type="radio"]').prop("checked", false);
        $.cookie("stylesheet2", "", {
            expires: 1
        });
    }
    $('.colorselect2 > input[type="radio"]').on('click', function () {
        $('.colorselect2').removeClass('active');
        var setstyle = $(this).next().attr('data-title');
        var currentstyle = $('#style');

        if ($(this).is(':checked')) {
            $.cookie("stylesheet2", setstyle, {
                expires: 1
            });
            $('head').append('<link href="assets/css/style-' + setstyle + '.css" rel="stylesheet"  id="style">');
            setTimeout(function () {
                currentstyle.remove();
            }, 1000);

            $(this).parent().addClass('active');

        } else {
            $.cookie("stylesheet2", "", {
                expires: 1
            });
        }
    });

    /* round layout layout */
    if ($.type($.cookie("roundlayout2")) != 'undefined' && $.cookie("roundlayout2") != '') {
        $('#roundlayout2').prop("checked", true);
        $('#roundlayout2').parent().addClass('active');
        $('body').addClass($.cookie("roundlayout2"));
    } else {
        /*$('#roundlayout2').parent().removeClass('active');
        $('#roundlayout2').prop("checked", false);
        $.removeCookie("roundlayout2", "");
        $('body').removeClass('ui-rounded');*/
    }
    $('#roundlayout2').on('click', function () {
        $(this).parent().addClass('active');
        if ($(this).is(':checked')) {
            $.cookie("roundlayout2", 'ui-rounded', {
                expires: 1
            });
            $('body').addClass('ui-rounded');
            $('#roundlayout2').parent().addClass('active');
        } else {
            $.removeCookie("roundlayout2", "");
            $('body').removeClass('ui-rounded');
            $('#roundlayout2').parent().removeClass('active');
        }
    });

    /* RTL layout layout */
    if ($.type($.cookie("rtllayout2")) != 'undefined' && $.cookie("rtllayout2") != '') {
        $('#rtllayout2').prop("checked", true);
        $('#rtllayout2').parent().addClass('active');
        $('body').addClass($.cookie("rtllayout2"));
    } else {
        $('#rtllayout2').parent().removeClass('active');
        $('#rtllayout2').prop("checked", false);
        $.removeCookie("rtllayout2", "");
    }

    $('#rtllayout2').on('click', function () {
        $(this).parent().addClass('active');
        if ($(this).is(':checked')) {
            $.cookie("rtllayout2", 'rtl', {
                expires: 1
            });
            $('body').addClass('rtl');
            $('#rtllayout2').parent().addClass('active');

        } else {
            $.removeCookie("rtllayout2", "");
            $('body').removeClass('rtl');
            $('#rtllayout2').parent().removeClass('active');
        }
    });
});
