<?php

$this->pageTitle = 'Blog de '.$model->username;

$this->breadcrumbs = array(
    ucwords($this->module->id) => array('index'),
	GxHtml::valueEx($model),
);

echo CHtml::tag('h1', array(), $this->pageTitle);

if(!empty($posts))
{
    foreach ($posts as $post)
    {
        echo GxHtml::openTag('article', array());
        echo CHtml::tag('h2', array(), $post->title);
        echo CHtml::tag('span', array('class'=>'label'), $post->publication_date);
        echo CHtml::tag('p', array(), $post->body);
        foreach($post->attributes as $k => $a)
        {
    //        var_dump($k.' => '. $a);
        }

        echo GxHtml::link('Seguir leyendo &raquo;', array('/post/view', 'id'=>$post->id), array('class'=>'btn'));
        echo GxHtml::closeTag('article');
    }
}
else
{
    echo CHtml::tag('p', array('class'=>'alert alert-info'), 'Ups! '.$model->username. ' aún no tiene publicaciones en su blog :(');
}
?>