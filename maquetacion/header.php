<?php
include 'functions.php';
/**
 * Cabacera de la Página
 *
 * Nuestra todo el contenido hasta <body>
 *
 * @package		redbionova
 * @author		Agencia Digital Reactor <contacto@reactor.cl>
 * @version		1.0.0
 */
?>
<!DOCTYPE html>
<html class="no-js">
    <head>
        <meta charset="utf-8">
        <title><?php wp_title(); ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href='https://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Abel' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="css/main.css">
        <script src="js/vendor/modernizr.js"></script>
    </head>
    <body <?php //body_class(); ?> class="noticias">
        <!--Plugin Facebook-->
        <div id="fb-root"></div>
        <script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.4";
    fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
        <!--Termina Plugin Facebook-->
        <!--Perminete que aun sin contenido el footer este pegdo al final de la pag-->
        <div class="fix-footer">
            <?php include('svg-defs.svg'); ?>
            <!--Inicia header-->
            <header class="header">
                <div class="wrap">
                    <div class="top-nav clearfix">
                        <!--Logo-->
                        <div class="logo">
                            <a href="index.php" title="Redbionova">
                                <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                     viewBox="0 0 316 68.8" enable-background="new 0 0 316 68.8" xml:space="preserve">
                                    <g>
                                        <g>
                                            <path fill="#443A22" d="M38.7,31.5l12-6.9c-3.7-3.3-7.6-1.5-9.4-0.3C37.2,27.1,38.7,31.5,38.7,31.5z M61.7,39.4
                                                                    c-3.1,6.8-9.8,8.6-14.9,8.6c-9,0-16.3-7.3-16.3-16.3c0-9,7.3-16.3,16.3-16.3c7.1,0,13.2,4.6,15.4,10.9l-7.6,4.2l-12.7,7.3
                                                                    c0.9,1.6,3.2,2.6,5,2.6c1.9,0,5.8-0.2,8.4-4.7L61.7,39.4z"/>
                                        </g>
                                        <g>
                                            <path fill="#D6362B" d="M269,47.5c-7,0-12-12.1-13.3-17c-1.9-7.2-3.4-15.7-3.4-15.7h8.5c0,0,0.9,6.6,3,13.6
                                                                    c1.2,3.9,3.1,7.5,5.2,9.5c2.1-2,4.1-5.5,5.2-9.5c2.1-7,3-13.6,3-13.6h8.5c0,0-1.5,8.6-3.4,15.7C280.9,35.4,276,47.5,269,47.5z"/>
                                        </g>
                                        <g>
                                            <path fill="#9C272A" d="M299.3,14.8c7,0,12,12.1,13.3,17c1.9,7.2,3.4,15.7,3.4,15.7h-8.5c0,0-0.9-6.6-3-13.6
                                                                    c-1.2-3.9-3.1-7.5-5.2-9.5c-2.1,2-4.1,5.5-5.2,9.5c-2.1,7-3,13.6-3,13.6h-8.5c0,0,1.4-8.6,3.4-15.7
                                                                    C287.4,27,292.3,14.9,299.3,14.8z"/>
                                        </g>
                                        <g>
                                            <path fill="#226C3E" d="M110.3,47.3l-7.1,0H95l0-23.5h-6.6l-6.2,0c-7.4,0-9.8,3.8-9.8,7.2c0,4.3,2.3,8.1,10.7,8.1h3.4l3.7,8.2
                                                                    h-8.7C67,47.4,64.1,38.2,64.1,31c0-8,5.4-15.5,17.4-15.5l6.3,0H95v-0.2V0h8.2v39.1h6.6l6.2,0c7.4,0,9.8-3.8,9.8-7.2
                                                                    c0-4.3-2.3-8.1-10.7-8.1h-3.4l-3.7-8.3h8.7c14.6,0,17.4,9.2,17.4,16.3c0,8-5.4,15.5-17.4,15.5L110.3,47.3z"/>
                                        </g>
                                        <g>
                                            <path fill="#87AC64" d="M167,15.1c8.8,0,16,7.2,16,16c0,8.8-7.2,16-16,16c-8.8,0-16-7.2-16-16C151,22.3,158.1,15.1,167,15.1z
                                                                    M167,22.7c-4.7,0-8.4,3.8-8.4,8.4c0,4.7,3.8,8.4,8.4,8.4c4.7,0,8.4-3.8,8.4-8.4C175.4,26.5,171.6,22.7,167,22.7z"/>
                                        </g>
                                        <g>
                                            <path fill="#F28000" d="M186.7,46.8V29.4c0-8,6.5-14.5,14.6-14.5c8,0,14.6,6.5,14.6,14.5v17.5h-8.3V29.4c0-3.4-2.8-6.2-6.2-6.2
                                                                    c-3.4,0-6.2,2.8-6.2,6.2v17.5H186.7z"/>
                                        </g>
                                        <g>
                                            <rect x="137.7" y="14.6" fill="#337321" width="8.3" height="32.2"/>
                                        </g>
                                        <g>
                                            <path fill="#D6362B" d="M236,15.1c8.8,0,16,7.2,16,16c0,8.8-7.2,16-16,16c-8.8,0-16-7.2-16-16C220,22.3,227.2,15.1,236,15.1z
                                                                    M236,22.7c-4.7,0-8.4,3.8-8.4,8.4c0,4.7,3.8,8.4,8.4,8.4c4.7,0,8.4-3.8,8.4-8.4C244.4,26.5,240.6,22.7,236,22.7z"/>
                                        </g>
                                        <g>
                                            <path fill="#443A22" d="M0,47.2V30.1c0-8,6.5-14.4,14.4-14.4c8,0,14.4,6.5,14.4,14.4h-8.2c0-3.4-2.8-6.2-6.2-6.2
                                                                    c-3.4,0-6.2,2.8-6.2,6.2v17.1H0z"/>
                                        </g>
                                    </g>
                                    <g class="texto-logo">
                                        <path fill="#B3B2B3" d="M72.7,60.6c-0.2,0.8-0.5,1.4-1,1.8c-0.5,0.4-1.1,0.6-1.9,0.6c-0.7,0-1.2-0.2-1.6-0.5c-0.4-0.3-0.8-0.6-1-1
                                                                c-0.1-0.1-0.1-0.3-0.2-0.4c0-0.1-0.1-0.3-0.1-0.5c-0.1-0.3-0.1-1-0.1-2c0-1,0-1.7,0.1-2c0.1-0.3,0.2-0.6,0.3-0.8
                                                                c0.2-0.4,0.5-0.7,1-1.1c0.4-0.3,1-0.5,1.6-0.5c0.8,0,1.4,0.3,2,0.7c0.5,0.5,0.8,1.1,1,1.8h-1.3c-0.1-0.3-0.3-0.6-0.6-0.9
                                                                c-0.3-0.2-0.6-0.4-1-0.4c-0.3,0-0.5,0.1-0.8,0.2c-0.2,0.1-0.4,0.3-0.5,0.4c-0.2,0.2-0.3,0.4-0.3,0.7c-0.1,0.3-0.1,0.9-0.1,1.7
                                                                s0,1.4,0.1,1.7c0.1,0.3,0.2,0.5,0.3,0.7c0.1,0.2,0.3,0.3,0.5,0.4c0.2,0.1,0.5,0.2,0.8,0.2c0.7,0,1.2-0.4,1.6-1.2H72.7z"/>
                                        <path fill="#B3B2B3" d="M73.8,54.4H75v8.5h-1.3V54.4z"/>
                                        <path fill="#B3B2B3" d="M76.8,54.4h5.3v1.2h-4v2.4h3.4v1.1h-3.4v2.5h4v1.2h-5.3V54.4z"/>
                                        <path fill="#B3B2B3" d="M83.5,54.4h1.2l3.7,6.1h0v-6.1h1.3v8.5h-1.2l-3.7-6.1h0v6.1h-1.3V54.4z"/>
                                        <path fill="#B3B2B3" d="M97.3,60.6c-0.2,0.8-0.5,1.4-1,1.8c-0.5,0.4-1.1,0.6-1.9,0.6c-0.7,0-1.2-0.2-1.6-0.5c-0.4-0.3-0.8-0.6-1-1
                                                                c-0.1-0.1-0.1-0.3-0.2-0.4c0-0.1-0.1-0.3-0.1-0.5c-0.1-0.3-0.1-1-0.1-2c0-1,0-1.7,0.1-2c0.1-0.3,0.2-0.6,0.3-0.8
                                                                c0.2-0.4,0.5-0.7,1-1.1c0.4-0.3,1-0.5,1.6-0.5c0.8,0,1.4,0.3,2,0.7c0.5,0.5,0.8,1.1,1,1.8H96c-0.1-0.3-0.3-0.6-0.6-0.9
                                                                c-0.3-0.2-0.6-0.4-1-0.4c-0.3,0-0.5,0.1-0.8,0.2c-0.2,0.1-0.4,0.3-0.5,0.4c-0.2,0.2-0.3,0.4-0.3,0.7c-0.1,0.3-0.1,0.9-0.1,1.7
                                                                s0,1.4,0.1,1.7c0.1,0.3,0.2,0.5,0.3,0.7c0.1,0.2,0.3,0.3,0.5,0.4c0.2,0.1,0.5,0.2,0.8,0.2c0.7,0,1.2-0.4,1.6-1.2H97.3z"/>
                                        <path fill="#B3B2B3" d="M98.4,54.4h1.3v8.5h-1.3V54.4z"/>
                                        <path fill="#B3B2B3" d="M105.7,61h-3.1l-0.6,1.9h-1.3l3-8.5h1l3,8.5h-1.3L105.7,61z M105.4,59.9l-1.2-3.7h0l-1.2,3.7H105.4z"/>
                                        <path fill="#B3B2B3" d="M108.9,60.9c0.7,0.6,1.4,0.8,2.4,0.9c1.1,0,1.6-0.4,1.6-1.2c0-0.6-0.4-1-1.1-1.1c-0.3,0-0.7-0.1-1.1-0.2
                                                                c-0.7-0.1-1.3-0.4-1.6-0.8c-0.4-0.4-0.6-1-0.6-1.6c0-0.7,0.2-1.3,0.7-1.8c0.5-0.5,1.1-0.7,2-0.7c1,0,1.9,0.3,2.7,0.9l-0.7,1.1
                                                                c-0.6-0.4-1.3-0.6-2-0.7c-0.4,0-0.7,0.1-1,0.3c-0.3,0.2-0.4,0.5-0.4,0.9c0,0.2,0.1,0.5,0.3,0.7c0.2,0.2,0.5,0.3,0.9,0.4
                                                                c0.2,0,0.5,0.1,0.9,0.1c0.8,0.1,1.3,0.4,1.7,0.9c0.4,0.5,0.6,1,0.6,1.6c0,1.6-1,2.5-2.9,2.5c-1.2,0-2.3-0.4-3.2-1.2L108.9,60.9z"/>
                                        <path fill="#B3B2B3" d="M118.6,54.4h2.9c1.1,0,2,0.5,2.5,1.4c0.2,0.3,0.3,0.7,0.4,1c0,0.4,0.1,1,0.1,1.8c0,0.9,0,1.6-0.1,1.9
                                                                c0,0.2-0.1,0.3-0.1,0.5c-0.1,0.1-0.1,0.3-0.2,0.4c-0.2,0.4-0.6,0.7-1,1c-0.4,0.3-1,0.4-1.6,0.4h-2.8V54.4z M119.8,61.7h1.5
                                                                c0.7,0,1.2-0.2,1.5-0.7c0.1-0.2,0.2-0.4,0.3-0.7c0-0.3,0.1-0.8,0.1-1.6c0-0.7,0-1.3-0.1-1.6c0-0.3-0.2-0.6-0.3-0.8
                                                                c-0.3-0.5-0.8-0.7-1.5-0.7h-1.5V61.7z"/>
                                        <path fill="#B3B2B3" d="M126.1,54.4h5.3v1.2h-4v2.4h3.4v1.1h-3.4v2.5h4v1.2h-5.3V54.4z"/>
                                        <path fill="#B3B2B3" d="M135.7,54.4h1.3v7.3h4v1.2h-5.3V54.4z"/>
                                        <path fill="#B3B2B3" d="M146.6,61h-3.1l-0.6,1.9h-1.3l3-8.5h1l3,8.5h-1.3L146.6,61z M146.2,59.9l-1.2-3.7h0l-1.2,3.7H146.2z"/>
                                        <path fill="#B3B2B3" d="M151.7,54.4h1.3l1.9,6.5h0l1.9-6.5h1.3l-2.7,8.5h-1L151.7,54.4z"/>
                                        <path fill="#B3B2B3" d="M159.2,54.4h1.3v8.5h-1.3V54.4z"/>
                                        <path fill="#B3B2B3" d="M162.3,54.4h2.9c1.1,0,2,0.5,2.5,1.4c0.2,0.3,0.3,0.7,0.4,1c0,0.4,0.1,1,0.1,1.8c0,0.9,0,1.6-0.1,1.9
                                                                c0,0.2-0.1,0.3-0.1,0.5c-0.1,0.1-0.1,0.3-0.2,0.4c-0.2,0.4-0.6,0.7-1,1c-0.4,0.3-1,0.4-1.6,0.4h-2.8V54.4z M163.6,61.7h1.5
                                                                c0.7,0,1.2-0.2,1.5-0.7c0.1-0.2,0.2-0.4,0.3-0.7c0-0.3,0.1-0.8,0.1-1.6c0-0.7,0-1.3-0.1-1.6c0-0.3-0.2-0.6-0.3-0.8
                                                                c-0.3-0.5-0.8-0.7-1.5-0.7h-1.5V61.7z"/>
                                        <path fill="#B3B2B3" d="M173.9,61h-3.1l-0.6,1.9h-1.3l3-8.5h1l3,8.5h-1.3L173.9,61z M173.5,59.9l-1.2-3.7h0l-1.2,3.7H173.5z"/>
                                        <path fill="#B3B2B3" d="M181.3,59.4l-2.5-5h1.3l1.8,3.8l1.8-3.8h1.3l-2.5,5v3.5h-1.2V59.4z"/>
                                        <path fill="#B3B2B3" d="M188.7,54.4h1.2l2.4,5.6l2.3-5.6h1.2v8.5h-1.3v-5.3h0l-1.7,4.1h-1l-1.7-4.1h0v5.3h-1.3V54.4z"/>
                                        <path fill="#B3B2B3" d="M202.1,61h-3.1l-0.6,1.9H197l3-8.5h1l3,8.5h-1.3L202.1,61z M201.7,59.9l-1.2-3.7h0l-1.2,3.7H201.7z
                                                                M200.8,52.2h1.6l-1.6,1.7h-1L200.8,52.2z"/>
                                        <path fill="#B3B2B3" d="M205.3,60.9c0.7,0.6,1.4,0.8,2.4,0.9c1.1,0,1.6-0.4,1.6-1.2c0-0.6-0.4-1-1.1-1.1c-0.3,0-0.7-0.1-1.1-0.2
                                                                c-0.7-0.1-1.3-0.4-1.6-0.8c-0.4-0.4-0.6-1-0.6-1.6c0-0.7,0.2-1.3,0.7-1.8c0.5-0.5,1.1-0.7,2-0.7c1,0,1.9,0.3,2.7,0.9l-0.7,1.1
                                                                c-0.6-0.4-1.3-0.6-2-0.7c-0.4,0-0.7,0.1-1,0.3c-0.3,0.2-0.4,0.5-0.4,0.9c0,0.2,0.1,0.5,0.3,0.7c0.2,0.2,0.5,0.3,0.9,0.4
                                                                c0.2,0,0.5,0.1,0.9,0.1c0.8,0.1,1.3,0.4,1.7,0.9c0.4,0.5,0.6,1,0.6,1.6c0,1.6-1,2.5-2.9,2.5c-1.2,0-2.3-0.4-3.2-1.2L205.3,60.9z"/>
                                        <path fill="#B3B2B3" d="M212,61.7h1.2v1.2H212V61.7z"/>
                                        <path fill="#B3B2B3" d="M214.8,61.7h1.2v1.2h-1.2V61.7z"/>
                                        <path fill="#B3B2B3" d="M217.7,61.7h1.2v1.2h-1.2V61.7z"/>
                                        <path fill="#B3B2B3" d="M227.8,61h-3.1l-0.6,1.9h-1.3l3-8.5h1l3,8.5h-1.3L227.8,61z M227.4,59.9l-1.2-3.7h0l-1.2,3.7H227.4z"/>
                                        <path fill="#B3B2B3" d="M233.6,54.4h1.3v5.5c0,0.6,0.2,1,0.5,1.3c0.3,0.3,0.7,0.5,1.2,0.5s0.9-0.2,1.2-0.5c0.3-0.3,0.5-0.7,0.5-1.3
                                                                v-5.5h1.3V60c0,0.9-0.3,1.6-0.8,2.1c-0.6,0.5-1.3,0.8-2.1,0.8c-0.8,0-1.5-0.3-2.1-0.8c-0.6-0.5-0.9-1.2-0.9-2.1V54.4z"/>
                                        <path fill="#B3B2B3" d="M241.3,54.4h1.2l3.7,6.1h0v-6.1h1.3v8.5h-1.2l-3.7-6.1h0v6.1h-1.3V54.4z"/>
                                        <path fill="#B3B2B3" d="M252.5,60.9c0.7,0.6,1.4,0.8,2.4,0.9c1.1,0,1.6-0.4,1.6-1.2c0-0.6-0.4-1-1.1-1.1c-0.3,0-0.7-0.1-1.1-0.2
                                                                c-0.7-0.1-1.3-0.4-1.6-0.8c-0.4-0.4-0.6-1-0.6-1.6c0-0.7,0.2-1.3,0.7-1.8c0.5-0.5,1.1-0.7,2-0.7c1,0,1.9,0.3,2.7,0.9l-0.7,1.1
                                                                c-0.6-0.4-1.3-0.6-2-0.7c-0.4,0-0.7,0.1-1,0.3c-0.3,0.2-0.4,0.5-0.4,0.9c0,0.2,0.1,0.5,0.3,0.7c0.2,0.2,0.5,0.3,0.9,0.4
                                                                c0.2,0,0.5,0.1,0.9,0.1c0.8,0.1,1.3,0.4,1.7,0.9c0.4,0.5,0.6,1,0.6,1.6c0,1.6-1,2.5-2.9,2.5c-1.2,0-2.3-0.4-3.2-1.2L252.5,60.9z"/>
                                        <path fill="#B3B2B3" d="M259,58.7c0-1,0-1.7,0.1-2c0.1-0.3,0.2-0.6,0.3-0.8c0.2-0.4,0.5-0.7,1-1.1c0.4-0.3,1-0.5,1.6-0.5
                                                                c0.7,0,1.2,0.2,1.6,0.5c0.4,0.3,0.7,0.7,0.9,1.1c0.1,0.2,0.2,0.5,0.3,0.8c0,0.3,0.1,1,0.1,2c0,1,0,1.6-0.1,2
                                                                c-0.1,0.3-0.1,0.6-0.3,0.8c-0.2,0.4-0.5,0.7-0.9,1c-0.4,0.3-1,0.5-1.6,0.5c-0.7,0-1.2-0.2-1.6-0.5c-0.4-0.3-0.8-0.6-1-1
                                                                c-0.1-0.1-0.1-0.3-0.2-0.4c0-0.1-0.1-0.3-0.1-0.5C259,60.3,259,59.6,259,58.7z M260.2,58.7c0,0.8,0,1.4,0.1,1.7
                                                                c0.1,0.3,0.2,0.5,0.3,0.7c0.1,0.2,0.3,0.3,0.5,0.4c0.2,0.1,0.5,0.2,0.8,0.2c0.3,0,0.6-0.1,0.8-0.2c0.2-0.1,0.4-0.3,0.5-0.4
                                                                c0.2-0.2,0.3-0.4,0.3-0.7c0.1-0.3,0.1-0.9,0.1-1.7s0-1.4-0.1-1.7c-0.1-0.3-0.2-0.5-0.3-0.7c-0.1-0.2-0.3-0.3-0.5-0.4
                                                                c-0.2-0.1-0.5-0.2-0.8-0.2c-0.3,0-0.5,0.1-0.8,0.2c-0.2,0.1-0.4,0.3-0.5,0.4c-0.2,0.2-0.3,0.4-0.3,0.7
                                                                C260.3,57.3,260.2,57.8,260.2,58.7z"/>
                                        <path fill="#B3B2B3" d="M266.6,54.4h1.3v7.3h4v1.2h-5.3V54.4z"/>
                                        <path fill="#B3B2B3" d="M273,58.7c0-1,0-1.7,0.1-2c0.1-0.3,0.2-0.6,0.3-0.8c0.2-0.4,0.5-0.7,1-1.1c0.4-0.3,1-0.5,1.6-0.5
                                                                c0.7,0,1.2,0.2,1.6,0.5c0.4,0.3,0.7,0.7,0.9,1.1c0.1,0.2,0.2,0.5,0.3,0.8c0,0.3,0.1,1,0.1,2c0,1,0,1.6-0.1,2
                                                                c-0.1,0.3-0.1,0.6-0.3,0.8c-0.2,0.4-0.5,0.7-0.9,1c-0.4,0.3-1,0.5-1.6,0.5c-0.7,0-1.2-0.2-1.6-0.5c-0.4-0.3-0.8-0.6-1-1
                                                                c-0.1-0.1-0.1-0.3-0.2-0.4c0-0.1-0.1-0.3-0.1-0.5C273,60.3,273,59.6,273,58.7z M274.2,58.7c0,0.8,0,1.4,0.1,1.7
                                                                c0.1,0.3,0.2,0.5,0.3,0.7c0.1,0.2,0.3,0.3,0.5,0.4c0.2,0.1,0.5,0.2,0.8,0.2c0.3,0,0.6-0.1,0.8-0.2c0.2-0.1,0.4-0.3,0.5-0.4
                                                                c0.2-0.2,0.3-0.4,0.3-0.7c0.1-0.3,0.1-0.9,0.1-1.7s0-1.4-0.1-1.7c-0.1-0.3-0.2-0.5-0.3-0.7c-0.1-0.2-0.3-0.3-0.5-0.4
                                                                c-0.2-0.1-0.5-0.2-0.8-0.2c-0.3,0-0.5,0.1-0.8,0.2c-0.2,0.1-0.4,0.3-0.5,0.4c-0.2,0.2-0.3,0.4-0.3,0.7
                                                                C274.3,57.3,274.2,57.8,274.2,58.7z"/>
                                        <path fill="#B3B2B3" d="M289,60.6c-0.2,0.8-0.5,1.4-1,1.8c-0.5,0.4-1.1,0.6-1.9,0.6c-0.7,0-1.2-0.2-1.6-0.5c-0.4-0.3-0.8-0.6-1-1
                                                                c-0.1-0.1-0.1-0.3-0.2-0.4c0-0.1-0.1-0.3-0.1-0.5c-0.1-0.3-0.1-1-0.1-2c0-1,0-1.7,0.1-2c0.1-0.3,0.2-0.6,0.3-0.8
                                                                c0.2-0.4,0.5-0.7,1-1.1c0.4-0.3,1-0.5,1.6-0.5c0.8,0,1.4,0.3,2,0.7c0.5,0.5,0.8,1.1,1,1.8h-1.3c-0.1-0.3-0.3-0.6-0.6-0.9
                                                                c-0.3-0.2-0.6-0.4-1-0.4c-0.3,0-0.5,0.1-0.8,0.2c-0.2,0.1-0.4,0.3-0.5,0.4c-0.2,0.2-0.3,0.4-0.3,0.7c-0.1,0.3-0.1,0.9-0.1,1.7
                                                                s0,1.4,0.1,1.7c0.1,0.3,0.2,0.5,0.3,0.7c0.1,0.2,0.3,0.3,0.5,0.4c0.2,0.1,0.5,0.2,0.8,0.2c0.7,0,1.2-0.4,1.6-1.2H289z"/>
                                        <path fill="#B3B2B3" d="M290.1,54.4h1.3v7.3h4v1.2h-5.3V54.4z"/>
                                        <path fill="#B3B2B3" d="M296.8,54.4h1.3v8.5h-1.3V54.4z"/>
                                        <path fill="#B3B2B3" d="M305.5,60.6c-0.2,0.8-0.5,1.4-1,1.8c-0.5,0.4-1.1,0.6-1.9,0.6c-0.7,0-1.2-0.2-1.6-0.5c-0.4-0.3-0.8-0.6-1-1
                                                                c-0.1-0.1-0.1-0.3-0.2-0.4c0-0.1-0.1-0.3-0.1-0.5c-0.1-0.3-0.1-1-0.1-2c0-1,0-1.7,0.1-2c0.1-0.3,0.2-0.6,0.3-0.8
                                                                c0.2-0.4,0.5-0.7,1-1.1c0.4-0.3,1-0.5,1.6-0.5c0.8,0,1.4,0.3,2,0.7c0.5,0.5,0.8,1.1,1,1.8h-1.3c-0.1-0.3-0.3-0.6-0.6-0.9
                                                                c-0.3-0.2-0.6-0.4-1-0.4c-0.3,0-0.5,0.1-0.8,0.2c-0.2,0.1-0.4,0.3-0.5,0.4c-0.2,0.2-0.3,0.4-0.3,0.7c-0.1,0.3-0.1,0.9-0.1,1.7
                                                                s0,1.4,0.1,1.7c0.1,0.3,0.2,0.5,0.3,0.7c0.1,0.2,0.3,0.3,0.5,0.4c0.2,0.1,0.5,0.2,0.8,0.2c0.7,0,1.2-0.4,1.6-1.2H305.5z"/>
                                        <path fill="#B3B2B3" d="M306.6,54.4h1.3v4.4h0l3.4-4.4h1.5l-2.7,3.4l2.9,5.2h-1.5l-2.3-4.2l-1.5,1.6v2.6h-1.3V54.4z"/>
                                        <path fill="#B3B2B3" d="M314,54.4h1.5l-0.5,6.4h-0.6L314,54.4z M314.2,61.7h1.2v1.2h-1.2V61.7z"/>
                                    </g>
                                </svg>
                            </a>
                        </div>
                        <!--Imagenes otras empresas-->
                        <div class="top-nav--right">
                            <div class="clearfix">
                                <a href="page-contacto.php" title="Contactanos" class="icon icon--news">
                                    <svg><use xlink:href="#shape-newsletter" /></svg>
                                </a>
                                <a href="http://mailchimp.com/" target="_blank" title="Suscríbete al newsletter" class="newsletter">Suscríbete al newsletter |</a>
                            </div>
                            <div class="top-nav--sponsor">
                                <a href="#" title="Sponsor Title" target="_blank"><img src="assets/sponsor_1.jpg" alt="Sponsor"></a>
                                <a href="#" title="Sponsor Title" target="_blank"><img src="assets/sponsor_2.png" alt="Sponsor"></a>
                                <a href="#" title="Sponsor Title" target="_blank"><img src="assets/sponsor_3.jpg" alt="Sponsor"></a>
                                <a href="#" title="Sponsor Title" target="_blank"><img src="assets/sponsor_4.jpg" alt="Sponsor"></a>
                            </div>
                        </div>
                    </div>
                    <!--Icono hamburguesa-->
                    <div class="icon icon--mobile">
                        <span class="bar bar__one"></span>
                        <span class="bar bar__two"></span>
                        <span class="bar bar__three"></span>
                    </div>
                    <!--Menu de navegacion-->
                    <div class="nav-bar">
                        <div class="nav-bar__mobile">
                            <nav class="menu">
                                <a href="page-noticias.php" title="Novedades" class="novedades <?php if ( $page == 'noticias' ) { echo ' current-menu-item current-page-ancestor'; } ?>">Novedades</a>
                                <a href="page-nosotros.php" title="Nosotros" class="nosotros <?php if ( $page == 'nosotros' ) { echo ' current-menu-item current-page-ancestor'; } ?>">Nosotros</a>
                                <a href="page-financiamiento.php" title="Financiamiento" class="financiamiento <?php if ( $page == 'financiamiento' ) { echo ' current-menu-item current-page-ancestor'; } ?>">Financiamiento</a>
                                <a href="page-empleo.php" title="Empleo" class="empleo <?php if ( $page == 'empleo' ) { echo ' current-menu-item current-page-ancestor'; } ?>">Empleo</a>
                                <a href="page-biotech-tonic.php" title="Biotech tonic" class="biotech-tonic <?php if ( $page == 'biotech-tonic' ) { echo ' current-menu-item current-page-ancestor'; } ?>">Biotech tonic</a>
                                <a href="page-instituciones.php" title="Instituciones" class="instituciones <?php if ( $page == 'instituciones' ) { echo ' current-menu-item current-page-ancestor'; } ?>">Instituciones</a>
                                <a href="page-ciencia-made-in-chile.php" title="Ciencia made in chile" class="ciencia-made-in-chile <?php if ( $page == 'ciencia-made-in-chile' ) { echo ' current-menu-item current-page-ancestor'; } ?>">Ciencia made in chile</a>
                                <a href="page-eventos.php" title="Eventos" class="eventos <?php if ( $page == 'eventos' ) { echo ' current-menu-item current-page-ancestor'; } ?>">Eventos</a> 
                                <a href="page-contacto.php" title="Contacto" class="no-desk contacto <?php if ( $page == 'contacto' ) { echo ' current-menu-item current-page-ancestor'; } ?>">Contacto</a> 
                            </nav>
                        </div>
                        <!--Buscador-->
                        <form action="" class="search-form">
                            <div class="input-group">
                                <input type="text" placeholder="Buscar..." class="js-input">
                            </div><!--.input-group-->
                            <div class="search-group">
                                <input type="submit" value=" ">
                                <span class="icon icon--search">
                                    <svg><use xlink:href="#shape-lupa" /></svg>
                                </span>
                            </div><!--.search-group-->
                            <div class="icon icon--close">
                                <svg><use xlink:href="#shape-close" /></svg>
                            </div><!--.icon .icon--close-->
                        </form><!--.search-->
                    </div>
                </div><!--.wrap-->
            </header><!--Termina header-->