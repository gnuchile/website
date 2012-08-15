<?php

/**
 * This is the model base class for the table "category".
 * DO NOT MODIFY THIS FILE! It is automatically generated by giix.
 * If any changes are necessary, you must set or override the required
 * property or method in class "Category".
 *
 * Columns in table "category" available as properties of the model,
 * followed by relations of table "category" available as properties of the model.
 *
 * @property integer $id
 * @property string $name
 * @property string $description
 *
 * @property Post[] $posts
 */
abstract class BaseCategory extends GxActiveRecord {

	public static function model($className=__CLASS__) {
		return parent::model($className);
	}

	public function tableName() {
		return 'category';
	}

	public static function label($n = 1) {
		return Yii::t('app', 'Category|Categories', $n);
	}

	public static function representingColumn() {
		return 'name';
	}

	public function rules() {
		return array(
			array('name, description', 'length', 'max'=>45),
			array('name, description', 'default', 'setOnEmpty' => true, 'value' => null),
			array('id, name, description', 'safe', 'on'=>'search'),
		);
	}

	public function relations() {
		return array(
			'posts' => array(self::MANY_MANY, 'Post', 'post_category(category_id, post_id)'),
		);
	}

	public function pivotModels() {
		return array(
			'posts' => 'PostCategory',
		);
	}

	public function attributeLabels() {
		return array(
			'id' => Yii::t('app', 'ID'),
			'name' => Yii::t('app', 'Name'),
			'description' => Yii::t('app', 'Description'),
			'posts' => null,
		);
	}

	public function search() {
		$criteria = new CDbCriteria;

		$criteria->compare('id', $this->id);
		$criteria->compare('name', $this->name, true);
		$criteria->compare('description', $this->description, true);

		return new CActiveDataProvider($this, array(
			'criteria' => $criteria,
		));
	}
}