<?php $this->pageTitle = Yii::app()->name; ?>
<div class="page-header header visible-desktop">
    <div id="feature_list" class="pull-left">
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

    <div class="pull-right well well-small header-right">
        <div class="pull-right donacion">
            <img alt="" src="images/der_donar.png" class="pull-left well-small" />
            <a class="btn btn-success pull-left">Donar</a>
        </div>
        <div class="pull-right hazte-socio">
            <img alt="" src="images/der_unete.png" class="pull-left well-small" />
            <a class="btn btn-info pull-left">Únete</a>
        </div>
    </div>
</div>

<?php
echo CHtml::openTag('div', array('class' => 'span8 well last-posts'));
echo CHtml::tag('h2', array(), 'Últimas publicaciones');

/*
$this->widget('EBootstrapListView', array(
    'dataProvider' => $postProvider,
    'itemView'     => '_view2',
//    'summaryText'  => false,
));

$this->widget('bootstrap.widgets.BootListView', array(
    'dataProvider' => $postProvider,
    'itemView'     => '_lastPublications',
    'summaryText'  => false,
    'htmlOptions'  =>
    array('class' => 'list-view last-posts1'),
));
*/

//echo CHtml::closeTag('div');
?>
<style>
    .clearfix {
}
.clearfix:before, .clearfix:after {
    content: "";
    display: table;
}
.clearfix:after {
    clear: both;
}
.bootstrap-list-view .summary {
    font-style: italic;
}
.bootstrap-list-view .bootstrap-list-view-item {
    background: none repeat scroll 0 0 white;
    border: 1px solid #DDDDDD;
    border-radius: 3px 3px 3px 3px;
    margin-bottom: 10px;
}
.bootstrap-list-view .bootstrap-list-view-item .bootstrap-list-view-item-content {
    padding: 0 10px;
}
.bootstrap-list-view .bootstrap-list-view-item .bootstrap-list-view-item-content .bootstrap-list-view-item-attribute {
    font-weight: bold;
}
.bootstrap-list-view .bootstrap-list-view-item .bootstrap-list-view-item-content:last-child {
    padding-bottom: 10px;
}
.bootstrap-list-view .bootstrap-list-view-item .bootstrap-list-view-item-title {
    background-color: #EBEBEB;
    background-image: -moz-linear-gradient(center top , #EEEEEE, #E6E6E6);
    background-repeat: repeat-x;
    margin-bottom: 10px;
    padding: 5px 10px;
}
.bootstrap-list-view .bootstrap-list-view-item:last-child {
    margin-bottom: 0;
}
.bootstrap-grid-view .summary {
    font-style: italic;
}
.bootstrap-grid-view table tr td {
    min-width: 60px;
}
.bootstrap-grid-view table tr td input {
    width: auto;
}

</style>
<div class="list-view bootstrap-list-view" id="yw0">
<?php
foreach($posts as $post)
{
    ?>
        <div class="post detail-view bootstrap-list-view-item" id="yw1">
            <div class="bootstrap-list-view-item-title bootstrap-list-view-item-content">
                <span class="bootstrap-list-view-item-value">
                    <?php echo CHtml::link($post->title, array('//post/view', 'id' => $post->id)); ?>
                    <span class="pull-right">
                        <?php echo $post->showUserAndDate(); ?>
                    </span>
                </span>
            </div>
            <div class="bootstrap-list-view-item-content">
                <span class="bootstrap-list-view-item-value">
                    <?php
                        //$post->showUserAndDateAsLabel();
                        echo $post->getCategoriesAsLabel();
                    ?>
                </span>
            </div>
            <div class="bootstrap-list-view-item-content">
                <span class="bootstrap-list-view-item-value">
                    <?php echo $post->getMarkdownBody(true); ?>
                </span>
            </div>
            <div class="bootstrap-list-view-item-content">
                <span class="bootstrap-list-view-item-value">
                    <?php echo CHtml::link('Leer más...', array('//post/view', 'id' => $post->id), array('class'=>'btn btn-mini ')); ?>
                </span>
            </div>
        </div>
    <?php
}
echo CHtml::closeTag('div');
echo CHtml::closeTag('div');

$menu = array(
    array(
        'label' => 'GNUCHILE', 'items' => array(
            array('label' => 'Fundación', 'url' => '#', 'icon' => 'info-sign'),
            array('label' => 'Socios', 'url' => '#', 'icon' => 'user'),
            array('label' => 'Boletines', 'url' => '#', 'icon' => 'bullhorn'),
            array(
                'label' => Yii::t('base', 'Blogs'), 'url' => $this->createUrl('/blog/'), 'icon' => 'book',
            ),
            array('label' => 'Software', 'url' => '#', 'icon' => 'download-alt'),
        ),
    ),
    
    array(
        'label' => 'Sitios relacionados', 'items' => array(
            array('label' => 'Free Software Foundation', 'url' => 'http://www.fsf.org/', 'icon' => 'ok'),
            array('label' => 'GNU Project', 'url' => 'http://www.gnu.org/', 'icon' => 'ok'),
            array('label' => 'Free Software Foundation Latin America', 'url' => 'http://www.fsfla.org', 'icon' => 'ok'),
        ),
    ),
);

?>

<div class="span3" id="sidebar">
    <div class="well sidebar-nav">
        <?php
            $this->widget('EBootstrapSidebar', array(
                'items'=>$menu,
            ));
        ?>
    </div>
</div>