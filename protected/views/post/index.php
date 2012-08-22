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

<?php
$this->widget('EBootstrapListView', array(
    'dataProvider' => $dataProvider,
    'itemView'     => '_view2',
    'cssFile'=>false,
    'summaryCssClass' => 'alert alert-info',
    //'summaryText'  => false,
    'htmlOptions'  =>
        array(/*'class' => 'list-view last-posts1'*/),
    'pager' => array(
        'class' => 'EBootstrapLinkPager',
        'cssFile'=>false,
        'header'=>false,
        )
));


/*
 *
 $this->widget('zii.widgets.CListView', array(

	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
));
 *
 */