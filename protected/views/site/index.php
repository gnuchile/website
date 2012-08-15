<?php $this->pageTitle=Yii::app()->name; ?>

<h1>Bienvenido a <i><?php echo CHtml::encode(Yii::app()->name); ?></i></h1>


<?php

echo CHtml::tag('h2', array(), 'Últimas publicaciones');

$this->widget('bootstrap.widgets.BootListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
    'summaryText'=>false,
    'htmlOptions'=>
        array('class'=>'list-view last-posts'),
));