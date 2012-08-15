<?php

class GroupController extends GxController {


	public function actionView($id) {
		$this->render('view', array(
			'model' => $this->loadModel($id, 'Group'),
		));
	}

	public function actionCreate() {
		$model = new Group;


		if (isset($_POST['Group'])) {
			$model->setAttributes($_POST['Group']);
			$relatedData = array(
				'users' => $_POST['Group']['users'] === '' ? null : $_POST['Group']['users'],
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
		$model = $this->loadModel($id, 'Group');


		if (isset($_POST['Group'])) {
			$model->setAttributes($_POST['Group']);
			$relatedData = array(
				'users' => $_POST['Group']['users'] === '' ? null : $_POST['Group']['users'],
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
			$this->loadModel($id, 'Group')->delete();

			if (!Yii::app()->getRequest()->getIsAjaxRequest())
				$this->redirect(array('admin'));
		} else
			throw new CHttpException(400, Yii::t('app', 'Your request is invalid.'));
	}

	public function actionIndex() {
		$dataProvider = new CActiveDataProvider('Group');
		$this->render('index', array(
			'dataProvider' => $dataProvider,
		));
	}

	public function actionAdmin() {
		$model = new Group('search');
		$model->unsetAttributes();

		if (isset($_GET['Group']))
			$model->setAttributes($_GET['Group']);

		$this->render('admin', array(
			'model' => $model,
		));
	}

}