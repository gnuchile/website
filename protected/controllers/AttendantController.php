<?php

class AttendantController extends GxController {

public function filters() {
	return array(
			'accessControl', 
			);
}

public function accessRules() {
	return array(
			array('allow',
				'actions'=>array('index','view'),
				'users'=>array('*'),
				),
			array('allow', 
				'actions'=>array('minicreate', 'create','update'),
				'users'=>array('@'),
				),
			array('allow', 
				'actions'=>array('admin','delete'),
				'users'=>array('admin'),
				),
			array('deny', 
				'users'=>array('*'),
				),
			);
}

	public function actionView($id) {
		$this->render('view', array(
			'model' => $this->loadModel($id, 'Attendant'),
		));
	}

	public function actionCreate() {
		$model = new Attendant;


		if (isset($_POST['Attendant'])) {
			$model->setAttributes($_POST['Attendant']);
			$relatedData = array(
				'events' => $_POST['Attendant']['events'] === '' ? null : $_POST['Attendant']['events'],
				);

			if ($model->saveWithRelated($relatedData)) {
				if (Yii::app()->getRequest()->getIsAjaxRequest())
					Yii::app()->end();
				else
					$this->redirect(array('view', 'id' => $model->id));
			}
		}

		$this->render('create', array( 'model' => $model));
	}

	public function actionUpdate($id) {
		$model = $this->loadModel($id, 'Attendant');


		if (isset($_POST['Attendant'])) {
			$model->setAttributes($_POST['Attendant']);
			$relatedData = array(
				'events' => $_POST['Attendant']['events'] === '' ? null : $_POST['Attendant']['events'],
				);

			if ($model->saveWithRelated($relatedData)) {
				$this->redirect(array('view', 'id' => $model->id));
			}
		}

		$this->render('update', array(
				'model' => $model,
				));
	}

	public function actionDelete($id) {
		if (Yii::app()->getRequest()->getIsPostRequest()) {
			$this->loadModel($id, 'Attendant')->delete();

			if (!Yii::app()->getRequest()->getIsAjaxRequest())
				$this->redirect(array('admin'));
		} else
			throw new CHttpException(400, Yii::t('app', 'Your request is invalid.'));
	}

	public function actionIndex() {
		$dataProvider = new CActiveDataProvider('Attendant');
		$this->render('index', array(
			'dataProvider' => $dataProvider,
		));
	}

	public function actionAdmin() {
		$model = new Attendant('search');
		$model->unsetAttributes();

		if (isset($_GET['Attendant']))
			$model->setAttributes($_GET['Attendant']);

		$this->render('admin', array(
			'model' => $model,
		));
	}

}