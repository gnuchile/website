<?php

Yii::import('application.models._base.BaseDate');

class Date extends BaseDate
{
	public static function model($className=__CLASS__) {
		return parent::model($className);
	}
}