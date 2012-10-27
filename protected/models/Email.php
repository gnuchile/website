<?php

Yii::import('application.models._base.BaseEmail');

class Email extends BaseEmail
{
	public static function model($className=__CLASS__) {
		return parent::model($className);
	}
}