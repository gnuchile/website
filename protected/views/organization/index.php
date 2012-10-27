<?php

$this->breadcrumbs = array(
	Organization::label(2),
	'Index',
);

$this->menu = array(
	array('label'=>'Create' . ' ' . Organization::label(), 'url' => array('create')),
	array('label'=>'Manage' . ' ' . Organization::label(2), 'url' => array('admin')),
);
?>

<h1><?php echo GxHtml::encode(Organization::label(2)); ?></h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); 