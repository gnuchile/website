<?php

/**
 * This is the model base class for the table "email".
 * DO NOT MODIFY THIS FILE! It is automatically generated by giix.
 * If any changes are necessary, you must set or override the required
 * property or method in class "Email".
 *
 * Columns in table "email" available as properties of the model,
 * followed by relations of table "email" available as properties of the model.
 *
 * @property integer $id
 * @property string $address
 * @property string $name
 * @property integer $person_id
 * @property integer $organization_id
 *
 * @property Person $person
 * @property Organization $organization
 */
abstract class BaseEmail extends GxActiveRecord {

	public static function model($className=__CLASS__) {
		return parent::model($className);
	}

	public function tableName() {
		return 'email';
	}

	public static function label($n = 1) {
		return Yii::t('app', 'Email|Emails', $n);
	}

	public static function representingColumn() {
		return 'address';
	}

	public function rules() {
		return array(
			array('address', 'required'),
			array('person_id, organization_id', 'numerical', 'integerOnly'=>true),
			array('address', 'length', 'max'=>255),
			array('name', 'length', 'max'=>45),
			array('name, person_id, organization_id', 'default', 'setOnEmpty' => true, 'value' => null),
			array('id, address, name, person_id, organization_id', 'safe', 'on'=>'search'),
		);
	}

	public function relations() {
		return array(
			'person' => array(self::BELONGS_TO, 'Person', 'person_id'),
			'organization' => array(self::BELONGS_TO, 'Organization', 'organization_id'),
		);
	}

	public function pivotModels() {
		return array(
		);
	}

	public function attributeLabels() {
		return array(
			'id' => Yii::t('app', 'ID'),
			'address' => Yii::t('app', 'Address'),
			'name' => Yii::t('app', 'Name'),
			'person_id' => null,
			'organization_id' => null,
			'person' => null,
			'organization' => null,
		);
	}

	public function search() {
		$criteria = new CDbCriteria;

		$criteria->compare('id', $this->id);
		$criteria->compare('address', $this->address, true);
		$criteria->compare('name', $this->name, true);
		$criteria->compare('person_id', $this->person_id);
		$criteria->compare('organization_id', $this->organization_id);

		return new CActiveDataProvider($this, array(
			'criteria' => $criteria,
		));
	}
}