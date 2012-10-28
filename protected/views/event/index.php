<?php
$this->breadcrumbs = array(
    Event::label(2),
    'Index',
);

$this->menu = array(
    array('label' => 'Create' . ' ' . Event::label(), 'url' => array('create')),
    array('label' => 'Manage' . ' ' . Event::label(2), 'url' => array('admin')),
);
?>

<h1><?php echo GxHtml::encode(Event::label(2)); ?></h1>

<?php
//$this->widget('zii.widgets.CListView', array(
//    'dataProvider' => $dataProvider,
//    'itemView' => '_view',
//));

Yii::app()->clientScript->registerScriptFile('/js/event/getEvents.js', CClientScript::POS_END);
?>
<div id="calendar"></div>


<!-- Modal -->
<div class="modal" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h3 id="myModalLabel"></h3>
    </div>
    <div class="modal-body">
        <div class="date">
            <p class="start">
                Inicio:
                <span class="start_date"></span>
                <span class="start_time"></span>
            </p>
            <p class="end">
                Fin:
                <span class="end_date"></span>
                <span class="end_time"></span>
            </p>
        </div>
    </div>
    <div class="modal-footer">
        <button class="btn" data-dismiss="modal" aria-hidden="true">Cerrar</button>
        <a id="eventUrl" href="" class="btn btn-primary">Ver</a>
    </div>
</div>