<?php

/**
 * This is the model base class for the table "page".
 * DO NOT MODIFY THIS FILE! It is automatically generated by giix.
 * If any changes are necessary, you must set or override the required
 * property or method in class "Page".
 *
 * Columns in table "page" available as properties of the model,
 * followed by relations of table "page" available as properties of the model.
 *
 * @property integer $id
 * @property string $title
 * @property string $slug
 * @property string $content
 *
 * @property Category[] $categories
 */
abstract class BasePage extends GxActiveRecord {

	public static function model($className=__CLASS__) {
		return parent::model($className);
	}

	public function tableName() {
		return 'page';
	}

	public static function label($n = 1) {
		return Yii::t('app', 'Page|Pages', $n);
	}

	public static function representingColumn() {
		return 'title';
	}

	public function rules() {
		return array(
			array('title, slug', 'length', 'max'=>45),
			array('content', 'safe'),
			array('title, slug, content', 'default', 'setOnEmpty' => true, 'value' => null),
			array('id, title, slug, content', 'safe', 'on'=>'search'),
		);
	}

	public function relations() {
		return array(
			'categories' => array(self::MANY_MANY, 'Category', 'page_category(page_id, category_id)'),
		);
	}

	public function pivotModels() {
		return array(
			'categories' => 'PageCategory',
		);
	}

	public function attributeLabels() {
		return array(
			'id' => Yii::t('app', 'ID'),
			'title' => Yii::t('app', 'Title'),
			'slug' => Yii::t('app', 'Slug'),
			'content' => Yii::t('app', 'Content'),
			'categories' => null,
		);
	}

	public function search() {
		$criteria = new CDbCriteria;

		$criteria->compare('id', $this->id);
		$criteria->compare('title', $this->title, true);
		$criteria->compare('slug', $this->slug, true);
		$criteria->compare('content', $this->content, true);

		return new CActiveDataProvider($this, array(
			'criteria' => $criteria,
		));
	}
}