<?php

$this->breadcrumbs = array(
	EventType::label(2),
	'Index',
);

$this->menu = array(
	array('label'=>'Create' . ' ' . EventType::label(), 'url' => array('create')),
	array('label'=>'Manage' . ' ' . EventType::label(2), 'url' => array('admin')),
);
?>

<h1><?php echo GxHtml::encode(EventType::label(2)); ?></h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); 