<?php

Yii::import('application.models._base.BaseEventAttendant');

class EventAttendant extends BaseEventAttendant
{
	public static function model($className=__CLASS__) {
		return parent::model($className);
	}
}