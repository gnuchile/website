<?php
$this->widget('EBootstrapListViewItem', array(
    'data' => $data,
    'attributes'=>array(
        array(
            'name' => 'title',
            'template'=>"<div class=\"{class}\"><span class=\"bootstrap-list-view-item-value\">{value}</span></div>\n",
            'type' => 'html',
            'cssClass' => 'bootstrap-list-view-item-title',
            'value' => EBootstrap::link(EBootstrap::encode($data->title), array('//post/view','id'=>$data->id))
        ),
//        'body',
//        'visits',
        array(
            'template'=>"<div class=\"{class}\"><span class=\"bootstrap-list-view-item-value\">{value}</span></div>\n",
            'type' => 'html',
            'value'=>$data->getCategoriesAsLabel(),
//            'cssClass'=>'post',
        ),
        array(
            'template'=>"<div class=\"{class}\"><span class=\"bootstrap-list-view-item-value\">{value}</span></div>\n",
            'type' => 'html',
            'value'=>$data->user ? $data->user->username : 'sin user',
//            'cssClass'=>'post',
        ),
        array(
            'template'=>"<div class=\"{class}\"><span class=\"bootstrap-list-view-item-value\">{value}</span></div>\n",
            'type' => 'html',
            'value'=>$data->getMarkdownBody(),
            'cssClass'=>'post',
        )
    ),
));
?>