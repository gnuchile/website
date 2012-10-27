<?php

Yii::import('application.models._base.BaseEventOrganizer');

class EventOrganizer extends BaseEventOrganizer
{
	public static function model($className=__CLASS__) {
		return parent::model($className);
	}
}