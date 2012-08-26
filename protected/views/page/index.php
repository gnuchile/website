<?php

$this->breadcrumbs = array(
	Page::label(2),
	'Index',
);

$this->menu = array(
	array('label'=>'Create' . ' ' . Page::label(), 'url' => array('create')),
	array('label'=>'Manage' . ' ' . Page::label(2), 'url' => array('admin')),
);
?>

<h1><?php echo GxHtml::encode(Page::label(2)); ?></h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); 