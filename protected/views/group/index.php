<?php

$this->breadcrumbs = array(
	Group::label(2),
	'Index',
);

$this->menu = array(
	array('label'=>'Create' . ' ' . Group::label(), 'url' => array('create')),
	array('label'=>'Manage' . ' ' . Group::label(2), 'url' => array('admin')),
);
?>

<h1><?php echo GxHtml::encode(Group::label(2)); ?></h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); 