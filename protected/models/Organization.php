<?php

Yii::import('application.models._base.BaseOrganization');

class Organization extends BaseOrganization
{
	public static function model($className=__CLASS__) {
		return parent::model($className);
	}
}