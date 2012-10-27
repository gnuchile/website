<?php

$this->breadcrumbs = array(
	Attendant::label(2),
	'Index',
);

$this->menu = array(
	array('label'=>'Create' . ' ' . Attendant::label(), 'url' => array('create')),
	array('label'=>'Manage' . ' ' . Attendant::label(2), 'url' => array('admin')),
);
?>

<h1><?php echo GxHtml::encode(Attendant::label(2)); ?></h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); 