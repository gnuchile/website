<?php

$this->breadcrumbs = array(
	$model->label(2) => array('index'),
	GxHtml::valueEx($model),
);

$this->menu=array(
	array('label'=>'List' . ' ' . $model->label(2), 'url'=>array('index')),
	array('label'=>'Create' . ' ' . $model->label(), 'url'=>array('create')),
	array('label'=>'Update' . ' ' . $model->label(), 'url'=>array('update', 'id' => $model->id)),
	array('label'=>'Delete' . ' ' . $model->label(), 'url'=>'#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->id), 'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage' . ' ' . $model->label(2), 'url'=>array('admin')),
);
?>

<h1><?php echo 'View' . ' ' . GxHtml::encode($model->label()) . ' ' . GxHtml::encode(GxHtml::valueEx($model)); ?></h1>

<?php $this->widget('EBootstrapDetailView', array(
	'data' => $model,
	'attributes' => array(
'id',
array(
			'name' => 'user',
			'type' => 'raw',
			'value' => $model->user !== null ? GxHtml::link(GxHtml::encode(GxHtml::valueEx($model->user)), array('user/view', 'id' => GxActiveRecord::extractPkValue($model->user, true))) : null,
			),
'title',
'body',
'status',
'in_frontpage:boolean',
'created_at',
'publication_date',
'visits',
'in_blog:boolean',
	),
)); ?>

<h2><?php echo GxHtml::encode($model->getRelationLabel('categories')); ?></h2>
<?php
	echo GxHtml::openTag('ul');
	foreach($model->categories as $relatedModel) {
		echo GxHtml::openTag('li');
		echo GxHtml::link(GxHtml::encode(GxHtml::valueEx($relatedModel)), array('category/view', 'id' => GxActiveRecord::extractPkValue($relatedModel, true)));
		echo GxHtml::closeTag('li');
	}
	echo GxHtml::closeTag('ul');
?>