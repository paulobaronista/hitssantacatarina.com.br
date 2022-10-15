<!DOCTYPE html>
<html lang="pt-BR" prefix="og: http://ogp.me/ns#">

<head>
    <meta charset="UTF-8">
    <title><?php echo $title; ?></title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="title" content="Hits Vila Santa Catarina" />
    <meta name="og:title" content="Hits Vila Santa Catarina" />
    <meta name="og:description" content="Sucesso é viver bem." />
    <meta name="og:image" content="<?= base_url(); ?>assets/images/compartilhamento.png" />
    <link rel="icon" href="<?= base_url(); ?>assets/images/favicon.png">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?= base_url(); ?>assets/images/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?= base_url(); ?>assets/images/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?= base_url(); ?>assets/images/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="<?= base_url(); ?>assets/images/apple-touch-icon-57-precomposed.png">
    <link rel="image_src" href="<?= base_url(); ?>assets/images/compartilhamento.png" />
    <meta name="theme-color" content="#f62022" />
    <!-- property (faz funcionar no linkedin) -->
    <meta property="og:title" content="Hits Vila Santa Catarina" />
    <meta property="og:image" content="<?= base_url(); ?>assets/images/compartilhamento.png" />
    <meta property="Sucesso é viver bem." />
    <meta property="og:url" content="https://hitssantacatarina.com.br/" />
    <!-- property (faz funcionar no linkedin) -->
    <?php
    $meta = array(
        array('name' => 'robots', 'content' => 'no-cache'),
        array('name' => 'description', 'content' => $description),
        array('name' => 'keywords', 'content' => $keywords),
        array('name' => 'robots', 'content' => 'no-cache'),
        array('name' => 'Content-type', 'content' => 'text/html;charset=utf-8', 'type' => 'equiv')
    );
    echo meta($meta);
    echo link_tag('assets/css/bootstrap.min.css');
    echo link_tag('assets/css/style.css?v=0.2.8');
    echo link_tag('assets/css/lightbox.css');
    echo link_tag('assets/css/slick.css');
    echo link_tag('assets/css/slick-theme.css?v=0.1.0');
    ?>

    <!-- <script> !function(){window;var t=document,e=t.createElement("script"),a="https://cdn.appfacilita.com/static/facilita-chat/",c="_assets/_js/";e.type="text/javascript",e.id="facilita-chat-widget",e.src=a+c+"widget.js";var i=t.getElementsByTagName("script")[0];i.parentNode.insertBefore(e,i);var s=t.createElement("script");s.type="text/javascript",s.id="facilita-chat-storage",s.async=!0,s.src=a+c+"storage.js";var r=t.getElementsByTagName("script")[1];r.parentNode.insertBefore(s,r)}(); function facilitaChatAction(e){var t="facilita-chat-storage",o=sessionStorage.getItem(t);(o=JSON.parse(o)).open;function a(e){var t={action:e};document.getElementById("chat-iframe-button").contentWindow.postMessage(t,"*"),window.postMessage(t,"*")}switch(e){case"open":a("open");break;case"close":a("close");break;case"toggle":a("toggle")}sessionStorage.setItem(t,JSON.stringify(o))} facilitaSettings={instancia:"tsengenharia",queue:"34",local:!1,source:"Chat | Hits Santa Catarina",gstoken:"dc21c518a9fb7ba32c88abcd8ac1c0aa",open:!0,gstokenUser:"eyJpdiI6IitjaWRFTFA2dVwvbGdZXC9cLzNZcGdjXC93PT0iLCJ2YWx1ZSI6IkpLWVZQcDcxdFJhYXpuSmN5cmp0MFlnSzMwXC9LQmRUdVZVQnNQUXE1bGtwbjV6RlFjb1NzRExIMVZVWnJFcXFvYTMyY3ZWZkF2NUd0UlJiRktxVm5GUUZ6MGNxSmVzSFVsZFQ5VEdSQzlRbz0iLCJtYWMiOiI5ZTQ2MDY0NWIwNWE3ODc1ZTI3MGY4Nzk0ZjBhNzc2NjYyNWMwMWZmYWUyOWIzODhiODFiODM5ZmU4YjcwZjZkIn0="}; // se você deseja iniciar o chat fechado na primeira vez que o usuário entra no site altere o parametro open para false // você pode abrir e fechar a janela do chat chamando a função facilitaChatAction() no evento onClick do elemento // a função facilitaChatAction() aceita 3 parâmetros. toggle, open, close // exemplo: <button type="button" id="abrir" onclick="facilitaChatAction('toggle')">Abrir e fechar chat</button> </script> -->

    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-W8LDGL3');</script>
    <!-- End Google Tag Manager -->

</head>

<body>

    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-W8LDGL3"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->