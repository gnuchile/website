<?php

/**
 * This is the model base class for the table "event_organizer".
 * DO NOT MODIFY THIS FILE! It is automatically generated by giix.
 * If any changes are necessary, you must set or override the required
 * property or method in class "EventOrganizer".
 *
 * Columns in table "event_organizer" available as properties of the model,
 * and there are no model relations.
 *
 * @property integer $event_id
 * @property integer $organizer_id
 *
 */
abstract class BaseEventOrganizer extends GxActiveRecord {

	public static function model($className=__CLASS__) {
		return parent::model($className);
	}

	public function tableName() {
		return 'event_organizer';
	}

	public static function label($n = 1) {
		return Yii::t('app', 'EventOrganizer|EventOrganizers', $n);
	}

	public static function representingColumn() {
		return array(
			'event_id',
			'organizer_id',
		);
	}

	public function rules() {
		return array(
			array('event_id, organizer_id', 'required'),
			array('event_id, organizer_id', 'numerical', 'integerOnly'=>true),
			array('event_id, organizer_id', 'safe', 'on'=>'search'),
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
			'event_id' => null,
			'organizer_id' => null,
		);
	}

	public function search() {
		$criteria = new CDbCriteria;

		$criteria->compare('event_id', $this->event_id);
		$criteria->compare('organizer_id', $this->organizer_id);

		return new CActiveDataProvider($this, array(
			'criteria' => $criteria,
		));
	}
}