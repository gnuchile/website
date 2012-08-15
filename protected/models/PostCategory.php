<?php

Yii::import('application.models._base.BasePostCategory');

class PostCategory extends BasePostCategory
{
	public static function model($className=__CLASS__) {
		return parent::model($className);
	}
}