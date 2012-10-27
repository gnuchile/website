<?php

Yii::import('application.models._base.BaseOrganizer');

class Organizer extends BaseOrganizer
{
	public static function model($className=__CLASS__) {
		return parent::model($className);
	}
}