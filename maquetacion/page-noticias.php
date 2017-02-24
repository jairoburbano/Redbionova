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
$page = 'noticias';
$subpage = '';
$type = 'page';
$template = '';
$title = 'Noticias';
$subpage_title = ' ';
include 'header.php';  ?>
<div class="bg-content">
    <div class="wrap">
        <h1 class="section-title">Novedades</h1>
        <div class="block">
            <div class="content">
                <p>
                    Redbionova es una plataforma en base web que tiene por objetivo posicionarse como la marca líder en difusión de contenido relacionado con oportunidades laborales, oportunidades de financiamiento, eventos e información sobre negocios en el mercado de la biotecnología y ciencias biológicas en Chile.
                </p>
                <p>
                    El equipo impulsor que administra Redbionova, se encuentra bajo el alero de Grupo Aranex, empresa que cuenta con una larga trayectoria en gestión de redes de colaboración científica, administración de contenidos en base web, difusión científica, marketing relacional y desarrollo de comunidades.Gracias a esta experiencia y una efectiva administración, Redbionova conecta a los investigadores y emprendedores de las ciencias biológicas con los contenidos y personas clave que se necesitan para acelerar el desarrollo de sus proyectos.
                </p>
            </div><!--.content-->
        </div>
        <div class="content-filters">
            <div class="only-mobile filters__text">Filtrar por categoría</div>
            <div class="select-filters js-select-filters">
                <p>Filtrar por:</p>
                <svg><use xlink:href="#shape-filter-arrow" /></svg>
            </div><!--.select-filters-->
            <ul class="filters js-filters">
                <li class="filters__item js-filters__item only-mobile" data-filter="*">
                    Todos
                </li>
                <li class="filters__item js-filters__item" data-filter=".innovacion">
                    Innovacion
                </li>
                <li class="filters__item js-filters__item" data-filter=".biotecnologia">
                    Biotecnologia
                </li>
                <li class="filters__item js-filters__item" data-filter=".becas">
                    Becas
                </li>
                <li class="filters__item js-filters__item" data-filter=".fondos">
                    Fondos
                </li>
                <li class="filters__item js-filters__item" data-filter=".ciencia">
                    Ciencia
                </li>
                <li class="filters__item js-filters__item" data-filter=".alianzas">
                    Alianzas
                </li>
                <li class="filters__item js-filters__item" data-filter=".investigacion">
                    Investigación
                </li>
                <li class="filters__item js-filters__item" data-filter=".crowfunding">
                    Crowfunding
                </li>
            </ul><!--.filters-->
            <div class="filter-by js-filter-by">
                <p>Estas filtrando por:</p>
                <p class="filter-by__item js-filter-by__item">
                    <span></span>
                    <svg><use xlink:href="#shape-filter-close" /></svg>
                </p>
            </div><!--.filter-by-->
        </div><!--.content-filter-->
        <div class="js-grid content-grid">
            <div class="item type-1 js-grid__item novedades innovacion">
                <a href="single-noticias.php" title="Titulo imagen" class="item__image">
                    <img src="assets/news6.jpg" alt="Titulo imagen">
                </a><!--.item__image-->
                <div class="item__text">
                    <div class="item__category">
                        <a href="single-noticias.php" title="Titulo categoria">Alianzas</a>
                    </div><!--.item__category-->
                    <a href="single-noticias.php" title="Titulo" class="item__title">
                        UC crea primera unidad universitaria para evaluar bioequivalencia in vitro
                    </a>
                    <div class="item__description">
                        <p>
                            Se trata de la patología Niemann-Pick tipo B que inhibe las enzimas que eliminan lípidos complejos.
                        </p>
                    </div><!--.item__description-->
                </div><!--.item__text-->
            </div><!--.item-->
            <div class="item type-1 js-grid__item novedades crowfunding">
                <a href="single-noticias.php" title="Titulo imagen" class="item__image">
                    <img src="assets/news6.jpg" alt="Titulo imagen">
                </a><!--.item__image-->
                <div class="item__text">
                    <div class="item__category">
                        <a href="single-noticias.php" title="Titulo categoria">Alianzas</a>
                    </div><!--.item__category-->
                    <a href="single-noticias.php" title="Titulo" class="item__title">
                        UC crea primera unidad universitaria para evaluar bioequivalencia in vitro
                    </a>
                    <div class="item__description">
                        <p>
                            Se trata de la patología Niemann-Pick tipo B que inhibe las enzimas que eliminan lípidos complejos.
                        </p>
                    </div><!--.item__description-->
                </div><!--.item__text-->
            </div><!--.item-->
            <div class="item type-1 js-grid__item novedades alianzas">
                <a href="single-noticias.php" title="Titulo imagen" class="item__image">
                    <img src="assets/news6.jpg" alt="Titulo imagen">
                </a><!--.item__image-->
                <div class="item__text">
                    <div class="item__category">
                        <a href="single-noticias.php" title="Titulo categoria">Alianzas</a>
                    </div><!--.item__category-->
                    <a href="single-noticias.php" title="Titulo" class="item__title">
                        UC crea primera unidad universitaria para evaluar bioequivalencia in vitro
                    </a>
                    <div class="item__description">
                        <p>
                            Se trata de la patología Niemann-Pick tipo B que inhibe las enzimas que eliminan lípidos complejos.
                        </p>
                    </div><!--.item__description-->
                </div><!--.item__text-->
            </div><!--.item-->
            <div class="item type-1 js-grid__item novedades ciencia">
                <a href="single-noticias.php" title="Titulo imagen" class="item__image">
                    <img src="assets/news6.jpg" alt="Titulo imagen">
                </a><!--.item__image-->
                <div class="item__text">
                    <div class="item__category">
                        <a href="single-noticias.php" title="Titulo categoria">Alianzas</a>
                    </div><!--.item__category-->
                    <a href="single-noticias.php" title="Titulo" class="item__title">
                        UC crea primera unidad universitaria para evaluar bioequivalencia in vitro
                    </a>
                    <div class="item__description">
                        <p>
                            Se trata de la patología Niemann-Pick tipo B que inhibe las enzimas que eliminan lípidos complejos.
                        </p>
                    </div><!--.item__description-->
                </div><!--.item__text-->
            </div><!--.item-->
        </div><!--.js-grid-->
        <div class="btn__space">
            <button class="btn btn__border">Cargar más novedades</button>
        </div>
    </div><!--.wrap-->
</div><!--.bg-content-->
<?php include 'footer.php'; ?>