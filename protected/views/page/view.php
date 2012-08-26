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

<!--<h1><?php echo 'View' . ' ' . GxHtml::encode($model->label()) . ' ' . GxHtml::encode(GxHtml::valueEx($model)); ?></h1>-->
<h1><?php echo /*GxHtml::encode($model->label()) . ' ' .*/ GxHtml::encode(GxHtml::valueEx($model)); ?></h1>
<?php
echo CHtml::openTag('div', array('class'=>'categories post-data'));
echo $model->getCategoriesAsLabel();

echo CHtml::closeTag('div');
echo $model->getMarkdownBody();

/*$this->widget('zii.widgets.CDetailView', array(
	'data' => $model,
	'attributes' => array(
'id',
'title',
'slug',
'content',
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
 *
 */
?>