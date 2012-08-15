<?php

Yii::import('application.models._base.BaseRole');

class Role extends BaseRole
{
	public static function model($className=__CLASS__) {
		return parent::model($className);
	}
}