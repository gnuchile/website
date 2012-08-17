<?php

Yii::import('application.models._base.BaseCategory');

class Category extends BaseCategory
{

    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }

    public function showAsLabel()
    {
        echo CHtml::tag('span', array('class'=>'label', 'style'=>'margin:0 5px 0 0'), CHtml::tag('i', array('class'=>'icon-bookmark', 'style'=>'padding: 0 3px'), '').$this->name);
    }

    public function getAsLabel()
    {
        return CHtml::tag('span', array('class'=>'label', 'style'=>'margin:0 5px 0 0'), CHtml::tag('i', array('class'=>'icon-bookmark', 'style'=>'padding: 0 3px'), '').$this->name);
    }
}