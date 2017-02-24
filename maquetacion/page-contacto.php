<?php
/**
 * template-{Valor}.php
 *
 *
 * @package		redbionova
 * @author		Agencia Digital Reactor <contacto@reactor.cl>
 * @version		1.0.0
 *
 */
$page = 'contacto';
$subpage = '';
$type = 'page';
$template = '';
$title = 'Contacto';
$subpage_title = ' ';
include 'header.php';  ?>
<div class="bg-content">
    <div class="wrap">
        <h1 class="section-title no-desk">Contacto</h1>
    </div><!--.wrap-->
    <div class="map-box">
        <div id="map"></div>
        <div class="map__indication">
            <div class="man__indication__logo clearfix">
                <svg><use xlink:href="#shape-logo" /></svg>
            </div><!--.man__indication__logo-->
            <div class="man__indication__text">
                <p>
                    Zañartu 1482, Ñuñoa
                </p>
                <p>
                    Región Metropolitana
                </p>
            </div><!--.man__indication__text-->
            <div class="man__indication__links">
                <p class="clearfix">
                    <svg><use xlink:href="#shape-simple-marker" /></svg>
                    <a href="#" title="mapa">Ver mapa »</a>
                </p>
                <p class="clearfix icon-phone">
                    <svg><use xlink:href="#shape-phone" /></svg>
                    <a href="tel:+56223672008" title="Llámanos">+56 2 23672008</a>
                </p>
            </div><!--.man__indication__links-->
        </div><!--.map__indication-->
    </div><!--.map-box-->
    <div class="formulario fomulario__contact" id="formcontact">
        <h2 class="text-left">Escríbenos</h2>
        <form action="" class="formulario__item clearfix" id="contactForm-contact">
            <div class="input-group">
                <label for="name">Nombre</label>
                <input type="text" name="name" id="name">
            </div><!--.input-group-->
            <div class="input-group">
                <label for="surname">Apellido</label>
                <input type="text" name="surname" id="surname">
            </div><!--.input-group-->
            <div class="input-group">
                <label for="email">Correo</label>
                <input type="email" name="email" id="email">
            </div><!--.input-group-->
            <div class="input-group">
                <label for="phone">Telefono</label>
                <input type="number" name="phone" id="phone">
            </div><!--.input-group-->
            <div class="input-group">
                <label for="subject">Asunto</label>
                <input type="text" name="subject" id="subject">
            </div><!--.input-group-->
            <div class="input-group full-size">
                <label for="message">Mensaje</label>
                <textarea name="message" id="message"></textarea>
            </div><!--.input-group-->
            <input type="submit" value="Enviar" class="btn btn__border send">
        </form><!--.formulario__item-->
    </div><!--.formulario-->
</div><!--.bg-content-->
<!--Script mapa-->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
<script>
    function initialize() {
        //MAPA
        var myLatlng = new google.maps.LatLng(-33.473037, -70.617054);
        var thisLatlng = new google.maps.LatLng(-33.473037, -70.617054);
        var myOptions = {
            zoom: 15, //nivel de zoom
            center: myLatlng,
            scrollwheel: false,
            draggable: false,
            mapTypeId: google.maps.MapTypeId.ROADMAP
        }
        var map = new google.maps.Map(document.getElementById("map"), myOptions);
        var image = '/img/marker.svg'; //imagen del marcador
        var marker = new google.maps.Marker({
            position: thisLatlng,
            map: map,
            icon: image
        });
        marker.setMap(map);
    }
    google.maps.event.addDomListener(window, 'load', initialize);
</script>
<?php include 'footer.php'; ?>