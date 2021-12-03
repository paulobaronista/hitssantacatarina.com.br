<script src="assets/js/lightbox-plus-jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

<?php
echo script_tag('assets/js/slick.js');
echo script_tag('assets/js/jquery.clearinput.js');
echo script_tag('assets/js/jFuncoes.js');
echo script_tag('assets/js/bootstrap.min.js');
?>

<script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/3/jquery.inputmask.bundle.js"></script>

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