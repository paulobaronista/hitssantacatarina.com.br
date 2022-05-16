$(document).on('ready', function () {
    $(".glr-home").slick({
        dots: false,
        infinite: true,
        speed: 300,
        autoplay: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplaySpeed: 3000,
        arrows: true,
    });

    $(".glr-projeto").slick({
        dots: false,
        infinite: true,
        speed: 400,
        autoplay: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplaySpeed: 4000,
        arrows: true,
    });

    $(".glr-lazer").slick({
        dots: false,
        infinite: true,
        speed: 300,
        autoplay: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplaySpeed: 3000,
        arrows: true,
    });
});

$(document).ready(function () {
    $('#cookies').show();
    if (window.localStorage.getItem('accept_cookies')) {
        $('#cookies').hide();
        return false;
    }
    $(".btn_cookie").click(function () {
        window.localStorage.setItem('accept_cookies', true);
        $('#cookies').hide();
        return false;
    });
});

// Script Scroll OnPage
$(document).ready(function () {
    $(document).on("scroll", onScroll);
    $('.scrollink').on('click', function (e) {
        e.preventDefault();
        $(document).off("scroll");
        $('.scrollink').each(function () {
            $(this).removeClass('active');
        })
        $(this).addClass('active');
        $(".menu").addClass('active');
        var scroll_pos = 0;
        $(document).scroll(function () {
            scroll_pos = $(this).scrollTop();
            if (scroll_pos > 100) {
                $(".menu").addClass('active');
            } else {
                $(".menu").removeClass('active');
            }
        });

        var target = this.hash,
            $target = $(target);
        $('html, body').stop().animate({ scrollTop: $target.offset().top - 39 }, 500, 'swing', function () {
            // window.location.hash = target;
            $(document).on("scroll", onScroll);
        });
    });
});

function onScroll(event) {
    var scrollPos = $(document).scrollTop();
    $('#menuCenter .scrollink').each(function () {
        var currLink = $(this);
        var refElement = $(currLink.attr("href"));
        if (refElement.position().top <= scrollPos && refElement.position().top + refElement.height() > scrollPos) {
            $('#menuCenter ul li .scrollink').removeClass("active");
            currLink.addClass("active");
        } else {
            currLink.removeClass("active");
        }
    });
}

$(document).ready(function () {
    var scroll_pos = 0;
    $(document).scroll(function () {
        scroll_pos = $(this).scrollTop();
        if (scroll_pos > 100) {
            $(".menu").addClass('active');
        } else {
            $(".menu").removeClass('active');
        }
    });
});

$(document).on('ready', function () {
    $('.navbar-collapse a').click(function () {
        $(".navbar-collapse").collapse('hide');
    });
});

$(document).ready(function () {
    $("#close").click(function () {
        $("#aviso").hide();
        window.location.href = "https://hitssantacatarina.com.br/"
    });
});

$(function () {
    $('.nome').clear();
    $('.email').clear();
    $('.phone').clear();
    // $('.imovel').clear();
    // $('.msg').clear();

    $('.btn_enviar').on('click', function () {
        var n, e, t;
        var msg = "";
        n = $('.nome').val();
        e = $('.email').val();
        t = $('.phone').val();
        // i = $('.imovel').val();
        // m = $('.msg').val();

        if (n !== '' && e !== '' & t !== '') {
            $(".btn_enviar").text('ENVIAR');
            $(".btn_enviar").css("background-color", "#209916");
            $(".btn_enviar").css('border', "2px solid #16740e");
            $(".btn_enviar").css('color', "#FFFFFF");
        }

    });

    $('.phone').inputmask({ "mask": "(99) 999999999" });

});

$(function () {
    $('.bnome').clear();
    $('.bemail').clear();
    $('.bphone').clear();
    $('.bmsg').clear();

    $('.bbtn_enviar').on('click', function () {
        var bn, be, bt, bm;
        var msg = "";
        bn = $('.bnome').val();
        be = $('.bemail').val();
        bt = $('.bphone').val();
        bm = $('.bmsg').val();

        if (bn !== '' && be !== '' & bt !== '' && bm !== '') {
            $(".bbtn_enviar").text('SOLICITAR AGENDAMENTO');
            $(".bbtn_enviar").css("background-color", "#209916");
            $(".bbtn_enviar").css('border', "2px solid #16740e");
            $(".bbtn_enviar").css('color', "#FFFFFF");
        }

    });

    $('.bphone').inputmask({ "mask": "(99) 999999999" });

});