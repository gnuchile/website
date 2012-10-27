<?php

$this->breadcrumbs = array(
	Location::label(2),
	'Index',
);

$this->menu = array(
	array('label'=>'Create' . ' ' . Location::label(), 'url' => array('create')),
	array('label'=>'Manage' . ' ' . Location::label(2), 'url' => array('admin')),
);
?>

<h1><?php echo GxHtml::encode(Location::label(2)); ?></h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); 