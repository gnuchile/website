<?php
/* @var $this DefaultController */

$this->breadcrumbs=array(
	ucwords($this->module->id)
    );
?>
<h1>Blogs de <?php echo Yii::app()->name; ?></h1>
<?php

echo CHtml::openTag('div', array('class' => 'span11 well last-posts'));

$this->widget('EBootstrapListView', array(
    'dataProvider' => $dataProvider,
    'itemView'     => '_view2',
    'summaryText'  => false,
    'htmlOptions'  =>
        array(/*'class' => 'list-view last-posts1'*/),
    'pager' => array(
        'class' => 'EBootstrapLinkPager',
        )
));

echo CHtml::closeTag('div');


/*
foreach($posts as $post)
{
    echo GxHtml::openTag('article', array());
    echo CHtml::tag('h2', array(), CHtml::link($post->user->username, array('/blog/'.$post->user->username), array()) . ': '.$post->title);
    echo CHtml::tag('span', array('class'=>'label'), $post->publication_date);
    echo CHtml::tag('p', array(), $post->body);
    foreach($post->attributes as $k => $a)
    {
//        var_dump($k.' => '. $a);
    }

    echo GxHtml::link('Seguir leyendo &raquo;', array('/post/view', 'id'=>$post->id), array('class'=>'btn'));
    echo GxHtml::closeTag('article');
}

 *
 */