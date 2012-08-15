<?php

$this->breadcrumbs = array(
	Post::label(2),
	'Index',
);

$this->menu = array(
	array('label'=>'Create' . ' ' . Post::label(), 'url' => array('create')),
	array('label'=>'Manage' . ' ' . Post::label(2), 'url' => array('admin')),
);
?>

<h1><?php echo GxHtml::encode(Post::label(2)); ?></h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); 