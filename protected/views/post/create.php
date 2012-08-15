<?php

$this->breadcrumbs = array(
	$model->label(2) => array('index'),
	'Create',
);

$this->menu = array(
	array('label'=>'List' . ' ' . $model->label(2), 'url' => array('index')),
	array('label'=>'Manage' . ' ' . $model->label(2), 'url' => array('admin')),
);
?>

<h1><?php echo 'Create' . ' ' . GxHtml::encode($model->label()); ?></h1>
<?php
$this->beginWidget('zii.widgets.CPortlet', array(
	'htmlOptions'=>array(
		'class'=>''
	)
));
$this->widget('bootstrap.widgets.BootMenu', array(
	'type'=>'pills',
	'items'=>array(
		array('label'=>'Create', 'icon'=>'icon-plus', 'url'=>Yii::app()->controller->createUrl('create'),'active'=>true, 'linkOptions'=>array()),
                array('label'=>'List', 'icon'=>'icon-th-list', 'url'=>Yii::app()->controller->createUrl('index'), 'linkOptions'=>array()),
		array('label'=>'Search', 'icon'=>'icon-search', 'url'=>'#', 'linkOptions'=>array('class'=>'search-button')),
	),
));
$this->endWidget();
?>
<?php
$this->renderPartial('_form', array(
		'model' => $model,
		'buttons' => 'create'));
?>