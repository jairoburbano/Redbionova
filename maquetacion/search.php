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
$page = 'search';
$subpage = '';
$type = 'page';
$template = '';
$title = 'Resultado de busqueda';
$subpage_title = ' ';
include 'header.php';  ?>
<div class="bg-content">
    <div class="wrap">
        <h1 class="section-title">Resultado de busqueda</h1>
        <div class="item__content">
            <div class="item-block--full-width">  
                <div class="search-by">
                    <p>Estás buscando:</p>
                    <p class="word">Biotech</p>
                </div>
                <div class="search-items">
                    <div class="search-items__item__content">
                        <div class="search-items__item">
                            <div class="search-items__item__text clearfix">
                                <h2><a href="#" title="titulo">Biotech tonic: “plataformas nanotecnológicas para fármacos inteligentes”</a></h2>
                                <a href="#" title="Ver más" class="btn btn__border">Ver más</a>
                            </div><!--.small-items__item__text-->
                        </div><!--.small-items__item-->
                        <div class="search-items__item">
                            <div class="search-items__item__text clearfix">
                                <h2>Compañía biotecnológica aminotec busca profesional del área con experiencia en microbiología industrial</h2>
                                <a href="#" title="Ver más" class="btn btn__border">Ver más</a>
                            </div><!--.small-items__item__text-->
                        </div><!--.small-items__item-->
                        <div class="search-items__item">
                            <div class="search-items__item__text clearfix">
                                <h2>Titulo</h2>
                                <a href="#" title="Ver más" class="btn btn__border">Ver más</a>
                            </div><!--.small-items__item__text-->
                        </div><!--.small-items__item-->
                        <div class="search-items__item">
                            <div class="search-items__item__text clearfix">
                                <h2>Titulo</h2>
                                <a href="#" title="Ver más" class="btn btn__border">Ver más</a>
                            </div><!--.small-items__item__text-->
                        </div><!--.small-items__item-->
                    </div><!--.small-items__item__content-->
                </div><!--.small-items-->                   
            </div><!--.item-block-->
        </div><!--.item__content-->
    </div><!--.wrap-->
</div><!--.bg-content-->
<?php include 'footer.php'; ?>