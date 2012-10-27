<?php

$this->breadcrumbs = array(
	Event::label(2),
	'Index',
);

$this->menu = array(
	array('label'=>'Create' . ' ' . Event::label(), 'url' => array('create')),
	array('label'=>'Manage' . ' ' . Event::label(2), 'url' => array('admin')),
);
?>

<h1><?php echo GxHtml::encode(Event::label(2)); ?></h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
));

Yii::app()->clientScript->registerScriptFile('/js/event/getEvents.js', CClientScript::POS_END);

?>
<div id="calendar"></div>