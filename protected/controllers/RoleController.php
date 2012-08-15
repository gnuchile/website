<?php

class RoleController extends GxController {


	public function actionView($id) {
		$this->render('view', array(
			'model' => $this->loadModel($id, 'Role'),
		));
	}

	public function actionCreate() {
		$model = new Role;


		if (isset($_POST['Role'])) {
			$model->setAttributes($_POST['Role']);
			$relatedData = array(
				'users' => $_POST['Role']['users'] === '' ? null : $_POST['Role']['users'],
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
		$model = $this->loadModel($id, 'Role');


		if (isset($_POST['Role'])) {
			$model->setAttributes($_POST['Role']);
			$relatedData = array(
				'users' => $_POST['Role']['users'] === '' ? null : $_POST['Role']['users'],
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
			$this->loadModel($id, 'Role')->delete();

			if (!Yii::app()->getRequest()->getIsAjaxRequest())
				$this->redirect(array('admin'));
		} else
			throw new CHttpException(400, Yii::t('app', 'Your request is invalid.'));
	}

	public function actionIndex() {
		$dataProvider = new CActiveDataProvider('Role');
		$this->render('index', array(
			'dataProvider' => $dataProvider,
		));
	}

	public function actionAdmin() {
		$model = new Role('search');
		$model->unsetAttributes();

		if (isset($_GET['Role']))
			$model->setAttributes($_GET['Role']);

		$this->render('admin', array(
			'model' => $model,
		));
	}

}