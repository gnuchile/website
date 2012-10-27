<?php

Yii::import('application.models._base.BaseAttendant');

class Attendant extends BaseAttendant
{
	public static function model($className=__CLASS__) {
		return parent::model($className);
	}
}