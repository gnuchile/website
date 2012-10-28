<?php

Yii::import('application.models._base.BaseDate');

class Date extends BaseDate
{
    public function rules()
    {
        $rules = array(
            array('start_date', 'filter', 'filter'=>'trim'),
            array('start_time', 'filter', 'filter'=>'trim'),
            array('end_date', 'filter', 'filter'=>'trim'),
            array('end_time', 'filter', 'filter'=>'trim'),

        );
        return CMap::mergeArray(parent::rules(), $rules);
    }

	public static function model($className=__CLASS__) {
		return parent::model($className);
	}
}