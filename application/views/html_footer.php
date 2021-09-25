<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> -->
<?php
echo script_tag('assets/js/jquery-3.2.1.min.js');
echo script_tag('assets/js/slick.min.js');
echo script_tag('assets/js/lity.js');
echo script_tag('assets/js/jquery.clearinput.js');
echo script_tag('assets/js/jFuncoes.js');
echo script_tag('assets/js/bootstrap.min.js');
?>

<script src="https://cdn.jsdelivr.net/gh/dixonandmoe/rellax@master/rellax.min.js"></script>

<script>
    var rellax = new Rellax('.rellax', {
        speed: -2,
        center: false,
        wrapper: null,
        round: false,
        vertical: true,
        horizontal: false
    });

    $('.gallery').slick({
        infinite: true,
        speed: 300,
        autoplay: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplaySpeed: 3000,
        arrows: true,
    });
</script>

<!-- <div class="float-box">
    <a href="#" class="phone">(11) 95555-8299</a>
    <a href="#" target="_blank" class="whats">Whatsapp</a>
    <a href="#" target="_blank" class="whats">Whatsapp</a>
</div> -->

</body>

</html>