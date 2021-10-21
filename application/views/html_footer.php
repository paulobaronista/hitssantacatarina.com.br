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
<script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/3/jquery.inputmask.bundle.js"></script>

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


<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-BBVRGNKQ6J"></script>
<script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'G-BBVRGNKQ6J');
</script>

<script type='text/javascript'>
    (function() {
        function loadScript(url, callback) {
            var script = document.createElement('script');
            script.type = 'text/javascript', script.readyState ? script.onreadystatechange = function() {
                (script.readyState == 'loaded' || script.readyState == 'complete') && (script.onreadystatechange = null, callback());
            } : script.onload = function() {
                callback();
            }, script.src = url, document.getElementsByTagName('head')[0].appendChild(script);
        }
        loadScript('https://cdn.appfacilita.com/static/plugins/jquery.form-tracker.min.js?v=1.5', function() {
            facilitaFormTrackerFnc({
                i: 'tsengenharia'
            });
        });
    }()); 
</script>

</body>

</html>