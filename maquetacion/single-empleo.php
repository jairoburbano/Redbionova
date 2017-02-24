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
$page = 'empleo';
$subpage = 'single-ofertas-laborales';
$type = 'page';
$template = '';
$title = 'Empleo';
$subpage_title = 'Titulo Oferta Laboral';
include 'header.php';  ?>
<div class="bg-content">
    <div class="wrap wrap--single">
        <h1 class="section-title">Ofertas Laborales</h1>
        <div class="block block--single">
            <div class="block__title">
                <h2>Compañía biotecnológica aminotec busca profesional del área con experiencia en microbiología industrial</h2>
            </div><!--.block__title-->
            <div class="content">
                <img src="assets/aminotec-logoWEB.jpg" alt="Imagen usuario" class="aligncenter">
                <p>
                    Se Ofrece Tesis de pregrado o postgrado en Bioquímica, Biología, Biotecnología, Química y Farmacia o alguna carrera afin, en el tema “El Papel Fisiopatológico de los Glucocorticoides en el Desarrollo de Síndrome Metabólico”.
                </p>
                <p>
                    Proyecto Financiado por FONDECYT a desarrollarse en el Laboratorio de Enfermedades Crónicas Relacionada con la Nutrición (ECRAN) del Instituto de Nutrición y tecnología de los Alimentos (INTA) de la Universidad de Chile.
                </p>
                <p>
                    Contacto: Dr. Rodrigo Troncoso mail: rtroncoso@inta.uchile.cl
                </p>
            </div><!--.content-->
        </div><!--.block .block--single-->
        <div class="formulario fomulario__postulate">
            <div class="formulario__box">
                <h2 class="formulario__box__text">A esta oferta han postulado <span>34</span> persona(s), para un total de <span>1</span> vacante(s).</h2>
                <button class="js-formulario__box__button btn btn__border--opac">Postular</button>
            </div>
            <div class="js-formulario__item" id="form">
                <form action="" class="formulario__item clearfix" id="contactForm">
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
                        <label for="cv" class="hide-text">Curriculum</label>
                        <input type="file" name="cv" id="cv" class="custom-file-input">
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
            </div><!--.js-formulario__item-->
        </div><!--.formulario-->
        <div class="share-post clearfix">
            <p class="share-post__title">Compartir:</p>
            <div class="share-post__content">
                <div class="icon">
                    <a href="#" title="Enviaselo a un amigo" class="icon--mail">
                        <svg><use xlink:href="#shape-icon-mail" /></svg>
                    </a>
                </div><!--.icon-->
                <div class="icon">
                    <a href="#" title="Enviaselo a un amigo" class="icon--twitt">
                        <svg><use xlink:href="#shape-icon-twitt" /></svg>
                    </a>
                </div><!--.icon-->
                <div class="icon">
                    <a href="#" title="Enviaselo a un amigo" class="icon--face">
                        <svg><use xlink:href="#shape-icon-face" /></svg>
                    </a>
                </div><!--.icon-->
                <div class="icon">
                    <a href="#" title="Enviaselo a un amigo" class="icon--linke">
                        <svg><use xlink:href="#shape-linke" /></svg>
                    </a>
                </div><!--.icon-->
                <div class="icon">
                    <a href="#" title="Enviaselo a un amigo" class="icon--whatsapp">
                        <svg><use xlink:href="#shape-whatsapp" /></svg>
                    </a>
                </div><!--.icon-->
            </div><!--.share-post__content-->
        </div><!--.share-post-->
        <div class="comments comments--empleo">
            <h2>¿Quieres dejar un comentario ?</h2>
            <div class="comments__content">
                <div class="fb-comments" data-href="http://developers.facebook.com/docs/plugins/comments/" data-numposts="1" data-width="100%"></div>
            </div><!--.comments__content-->
        </div><!--.comments-->
    </div><!--.wrap-->
    <div class="related-list" style="background-image: url(assets/bg4.png);">
       <h2>Ofertas relacionadas</h2>
        <div class="small-items">
            <div class="small-items__item__content">
                <div class="small-items__item">
                    <div class="small-items__item__image">
                        <a href="single-empleo.php" title="Titulo imagen">
                            <img src="assets/news4.jpg" alt="Titulo imagen">
                        </a>
                    </div><!--.small-items__item__image-->
                    <div class="small-items__item__text">
                        <div class="small-items__item__days">Hace 365 dias</div>
                        <a href="single-empleo.php" title="Titulo oferta" class="small-items__item__title">
                            Nova mineralis busca ingeniero en bioprocesos o ingeniero civil en biotecnología
                        </a>
                    </div><!--.small-items__item__text-->
                </div><!--.small-items__item-->
            </div><!--.small-items__item__content-->
            <div class="small-items__item__content">
                <div class="small-items__item">
                    <div class="small-items__item__image">
                        <a href="single-empleo.php" title="Titulo imagen">
                            <img src="assets/news4.jpg" alt="Titulo imagen">
                        </a>
                    </div><!--.small-items__item__image-->
                    <div class="small-items__item__text">
                        <div class="small-items__item__days">Hace 365 dias</div>
                        <a href="single-empleo.php" title="Titulo oferta" class="small-items__item__title">
                            Nova mineralis busca ingeniero en bioprocesos o ingeniero civil en biotecnología
                        </a>
                    </div><!--.small-items__item__text-->
                </div><!--.small-items__item-->
            </div><!--.small-items__item__content-->
        </div><!--.small-items-->
    </div><!--.related-list-->
</div><!--.bg-content-->
<?php include 'footer.php'; ?>