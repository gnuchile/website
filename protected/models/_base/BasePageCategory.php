<?php

/**
 * This is the model base class for the table "page_category".
 * DO NOT MODIFY THIS FILE! It is automatically generated by giix.
 * If any changes are necessary, you must set or override the required
 * property or method in class "PageCategory".
 *
 * Columns in table "page_category" available as properties of the model,
 * and there are no model relations.
 *
 * @property integer $page_id
 * @property integer $category_id
 *
 */
abstract class BasePageCategory extends GxActiveRecord {

	public static function model($className=__CLASS__) {
		return parent::model($className);
	}

	public function tableName() {
		return 'page_category';
	}

	public static function label($n = 1) {
		return Yii::t('app', 'PageCategory|PageCategories', $n);
	}

	public static function representingColumn() {
		return array(
			'page_id',
			'category_id',
		);
	}

	public function rules() {
		return array(
			array('page_id, category_id', 'required'),
			array('page_id, category_id', 'numerical', 'integerOnly'=>true),
			array('page_id, category_id', 'safe', 'on'=>'search'),
		);
	}

	public function relations() {
		return array(
		);
	}

	public function pivotModels() {
		return array(
		);
	}

	public function attributeLabels() {
		return array(
			'page_id' => null,
			'category_id' => null,
		);
	}

	public function search() {
		$criteria = new CDbCriteria;

		$criteria->compare('page_id', $this->page_id);
		$criteria->compare('category_id', $this->category_id);

		return new CActiveDataProvider($this, array(
			'criteria' => $criteria,
		));
	}
}