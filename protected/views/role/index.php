<?php

$this->breadcrumbs = array(
	Role::label(2),
	'Index',
);

$this->menu = array(
	array('label'=>'Create' . ' ' . Role::label(), 'url' => array('create')),
	array('label'=>'Manage' . ' ' . Role::label(2), 'url' => array('admin')),
);
?>

<h1><?php echo GxHtml::encode(Role::label(2)); ?></h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); 