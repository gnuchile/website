<?php $this->pageTitle = Yii::app()->name; ?>

<div class="page-header header">
<!--    <h1>Bienvenido a <i><?php echo CHtml::encode(Yii::app()->name); ?></i></h1>-->

    <div class="">
        <div id="feature_list">
            <ul id="tabs">
                <li>
                    <a href="javascript:;">
                        <img alt="" src="images/difusion.png" />
                        <h3>Difusi&oacute;n</h3>
                        <span>Dando a conocer el Software Libre</span>
                    </a>
                </li>
                <li>
                    <a href="javascript:;">
                        <img alt="" src="images/capacitacion.png" />
                        <h3>capacitaci&oacute;n</h3>
                        <span>Educando sobre su importancia</span>

                    </a>
                </li>
                <li>
                    <a href="javascript:;">
                        <img alt="" src="images/comunidad.png" />
                        <h3>Comunidad</h3>
                        <span>Compartimos Software Libre</span>
                    </a>

                </li>
            </ul>
            <ul id="output">
                <li>
                    <img alt="" src="images/banner001.jpg" />
                    <a href="http://www.gnewbook.org/pg/photos/owned/group:152">Ver m&aacute;s detalles</a>
                </li>
                <li>

                    <img alt="" src="images/banner002.jpg" />
                    <a href="http://www.socios.fundaciongnuchile.cl/unirse.php">Ver m&aacute;s detalles</a>
                </li>
                <li>
                    <img alt="" src="images/banner003.jpg" />
                    <a href="http://www.gnewbook.org">Ver m&aacute;s detalles</a>
                </li>
            </ul>
        </div>
    </div>
</div>

<?php
echo CHtml::openTag('div', array('class' => 'span8 well last-posts'));
echo CHtml::tag('h2', array(), 'Últimas publicaciones');

$this->widget('bootstrap.widgets.BootListView', array(
    'dataProvider' => $dataProvider,
    'itemView'     => '_lastPublications',
    'summaryText'  => false,
    'htmlOptions'  =>
    array('class' => 'list-view last-posts1'),
));

echo CHtml::closeTag('div');