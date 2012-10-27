<?php

$this->breadcrumbs = array(
	Date::label(2),
	'Index',
);

$this->menu = array(
	array('label'=>'Create' . ' ' . Date::label(), 'url' => array('create')),
	array('label'=>'Manage' . ' ' . Date::label(2), 'url' => array('admin')),
);
?>

<h1><?php echo GxHtml::encode(Date::label(2)); ?></h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); 