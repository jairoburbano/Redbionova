<?php
/**
 *
 * @package		redbionova
 * @author		Agencia Digital Reactor <contacto@reactor.cl>
 * @version		1.0.0
 *
 */
$page = 'eventos';
$subpage = 'single-eventos';
$type = 'page';
$template = '';
$title = 'Eventos';
$subpage_title = 'Seminario de difusión científica centro de excelencia en medicina de precisión: Desarrollando ciencia para el mundo ';
include 'header.php';  ?>

<div class="bg-content">
    <div class="wrap">
        <h1 class="section-title"><?php echo $title; ?></h1>
        <div class="events clearfix">
            <div class="events__sidebar events__calendar">
                <div class="events__sidebar__block calendar__nav brand">
                    <div class="events__sidebar__title">Eventos próximos</div>
                    <div class="widget_calendar">
                        <div id="calendar_wrap">
                            <table id="wp-calendar" class="wp-calendar prev">
                                <caption>May 2015</caption>
                                <tfoot>        
                                    <tr>
                                        <td colspan="3" id="prev">
                                            <input type="hidden" id="ano_actual" value="2015">
                                            <input type="hidden" id="mes_actual" value="05">
                                            <a href="javascript:;" onclick="cargar_calendario('prev',this)">« Abril</a>
                                        </td>            
                                        <td class="pad">&nbsp;</td>
                                        <td colspan="3" id="next" class="pad">
                                            <input type="hidden" id="ano_actual" value="2015">
                                            <input type="hidden" id="mes_actual" value="05">
                                            <a href="javascript:;" onclick="cargar_calendario('next',this)">Junio »</a>
                                        </td>
                                    </tr>    
                                </tfoot>
                                <tbody>
                                    <tr><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td><a href="/agenda/?fecha=2015-05-26" >1</a></td><td>2</td><td>3</td></tr>
                                    <tr><td>4</td><td>5</td><td>6</td><td><a href="/agenda/?fecha=2015-05-26" >7</a></td><td>8</td><td>9</td><td>10</td></tr>
                                    <tr><td>11</td><td>12</td><td>13</td><td>14</td><td>15</td><td><a href="/agenda/?fecha=2015-05-26" >16</a></td><td>17</td></tr>
                                    <tr><td>18</td><td><a href="/agenda/?fecha=2015-05-26" >19</a></td><td><a href="#">20</a></td><td><a href="#">21</a></td><td>22</td><td>23</td><td>24</td></tr>
                                    <tr><td>25</td><td><a href="/agenda/?fecha=2015-05-26">26</a></td><td>27</td><td>28</td><td>29</td><td>30</td><td>31</td></tr>
                                    <tr>
                                </tbody>
                            </table>
                            <table id="wp-calendar" class="wp-calendar current">
                                <caption>May 2015</caption>
                                <tfoot>        
                                    <tr>
                                        <td colspan="3" id="prev">
                                            <input type="hidden" id="ano_actual" value="2015">
                                            <input type="hidden" id="mes_actual" value="05">
                                            <a href="javascript:;" onclick="cargar_calendario('prev',this)">« Abril</a>
                                        </td>            
                                        <td class="pad">&nbsp;</td>
                                        <td colspan="3" id="next" class="pad">
                                            <input type="hidden" id="ano_actual" value="2015">
                                            <input type="hidden" id="mes_actual" value="05">
                                            <a href="javascript:;" onclick="cargar_calendario('next',this)">Junio »</a>
                                        </td>
                                    </tr>    
                                </tfoot>
                                <tbody>
                                    <tr><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td><a href="/agenda/?fecha=2015-05-26" >1</a></td><td>2</td><td>3</td></tr>
                                    <tr><td>4</td><td>5</td><td>6</td><td><a href="/agenda/?fecha=2015-05-26" >7</a></td><td>8</td><td>9</td><td>10</td></tr>
                                    <tr><td>11</td><td>12</td><td>13</td><td>14</td><td>15</td><td><a href="/agenda/?fecha=2015-05-26" >16</a></td><td>17</td></tr>
                                    <tr><td>18</td><td><a href="/agenda/?fecha=2015-05-26" >19</a></td><td><a href="#">20</a></td><td><a href="#">21</a></td><td>22</td><td>23</td><td>24</td></tr>
                                    <tr><td>25</td><td><a href="/agenda/?fecha=2015-05-26">26</a></td><td>27</td><td>28</td><td>29</td><td>30</td><td>31</td></tr>
                                    <tr>
                                </tbody>
                            </table>
                            <table id="wp-calendar" class="wp-calendar next">
                                <caption>May 2015</caption>
                                <tfoot>        
                                    <tr>
                                        <td colspan="3" id="prev">
                                            <input type="hidden" id="ano_actual" value="2015">
                                            <input type="hidden" id="mes_actual" value="05">
                                            <a href="javascript:;" onclick="cargar_calendario('prev',this)">« Abril</a>
                                        </td>            
                                        <td class="pad">&nbsp;</td>
                                        <td colspan="3" id="next" class="pad">
                                            <input type="hidden" id="ano_actual" value="2015">
                                            <input type="hidden" id="mes_actual" value="05">
                                            <a href="javascript:;" onclick="cargar_calendario('next',this)">Junio »</a>
                                        </td>
                                    </tr>    
                                </tfoot>
                                <tbody>
                                    <tr><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td><a href="/agenda/?fecha=2015-05-26" >1</a></td><td>2</td><td>3</td></tr>
                                    <tr><td>4</td><td>5</td><td>6</td><td><a href="/agenda/?fecha=2015-05-26" >7</a></td><td>8</td><td>9</td><td>10</td></tr>
                                    <tr><td>11</td><td>12</td><td>13</td><td>14</td><td>15</td><td><a href="/agenda/?fecha=2015-05-26" >16</a></td><td>17</td></tr>
                                    <tr><td>18</td><td><a href="/agenda/?fecha=2015-05-26" >19</a></td><td><a href="#">20</a></td><td><a href="#">21</a></td><td>22</td><td>23</td><td>24</td></tr>
                                    <tr><td>25</td><td><a href="/agenda/?fecha=2015-05-26">26</a></td><td>27</td><td>28</td><td>29</td><td>30</td><td>31</td></tr>
                                    <tr>
                                </tbody>
                            </table>
                        </div>
                    </div><!--/.widget_calendar-->
                </div><!--/.calendar__nav brand-->
                <div class="events__sidebar__block">
                    <div class="events__sidebar__title">Eventos próximos</div>
                    <ul class="events__sidebar__list">
                        <li><a href="#">Seminarios</a></li>
                        <li><a href="#">Talleres</a></li>
                        <li><a href="#">Workshop</a></li>
                        <li><a href="#">Congresos</a></li>
                    </ul><!--/.events__sidebar__list-->
                </div><!-- /.events__sidebar__block -->
                <div class="events__sidebar__block">
                    <div class="events__sidebar__title">Eventos pasados</div>
                    <ul class="events__sidebar__list">
                        <li><a href="#">Seminarios</a></li>
                        <li><a href="#">Talleres</a></li>
                        <li><a href="#">Workshop</a></li>
                        <li><a href="#">Congresos</a></li>
                        <li><a href="#">Biotech Tonic</a></li>
                    </ul><!--/.events__sidebar__list-->
                </div><!-- /.events__sidebar__block -->
            </div><!--/.events__calendar-->
            <div class="events__content">
                <div class="events__single">
                    <header class="events__single__header events__single__header--normal clearfix">
                        <div class="events__single__date">
                            <div class="events__item__date--year">2015</div><!--.events__item__date--start-->
                            <div class="events__item__date--start">
                                <span class="events__item__date--day">2</span> 
                                <span class="events__item__date--month">noviembre</span>
                            </div><!--.events__item__date--start-->
                            <div class="events__item__date--end">
                                al 
                                <span class="events__item__date--day">4</span> 
                                <span class="events__item__date--month">diciembre</span>
                            </div>
                        </div>
                        <h2 class="events__single__title"><a href="single-eventos.php">Seminario de difusión científica centro de excelencia en medicina de precisión: Desarrollando ciencia para el mundo</a></h2>
                        <div class="events__single__meta">Publicado en: Congresos</div>
                    </header><!--/.events__single__header-->
                    <div class="events__single__info">
                        <p>Hora: 08:30 hrs</p>
                        <p>Lugar: Great room Hotel W Isidora Goyenechea 3000, Las Condes.</p>
                        <a href="#" class="btn btn__border btn--single-events">Inscríbete</a>
                    </div><!--/.events__single__info-->
                </div><!--/.events__single-->
            </div><!-- /.events__content -->
        </div><!-- /.events -->
    </div><!--/.wrap-->
</div><!--.bg-content-->
<?php include 'footer.php'; ?>