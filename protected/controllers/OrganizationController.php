<?php

class OrganizationController extends GxController {

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
			'model' => $this->loadModel($id, 'Organization'),
		));
	}

	public function actionCreate() {
		$model = new Organization;


		if (isset($_POST['Organization'])) {
			$model->setAttributes($_POST['Organization']);
			$relatedData = array(
				'people' => $_POST['Organization']['people'] === '' ? null : $_POST['Organization']['people'],
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
		$model = $this->loadModel($id, 'Organization');


		if (isset($_POST['Organization'])) {
			$model->setAttributes($_POST['Organization']);
			$relatedData = array(
				'people' => $_POST['Organization']['people'] === '' ? null : $_POST['Organization']['people'],
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
			$this->loadModel($id, 'Organization')->delete();

			if (!Yii::app()->getRequest()->getIsAjaxRequest())
				$this->redirect(array('admin'));
		} else
			throw new CHttpException(400, Yii::t('app', 'Your request is invalid.'));
	}

	public function actionIndex() {
		$dataProvider = new CActiveDataProvider('Organization');
		$this->render('index', array(
			'dataProvider' => $dataProvider,
		));
	}

	public function actionAdmin() {
		$model = new Organization('search');
		$model->unsetAttributes();

		if (isset($_GET['Organization']))
			$model->setAttributes($_GET['Organization']);

		$this->render('admin', array(
			'model' => $model,
		));
	}

}