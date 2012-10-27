<?php

Yii::import('application.models._base.BaseSponsor');

class Sponsor extends BaseSponsor
{
	public static function model($className=__CLASS__) {
		return parent::model($className);
	}
}