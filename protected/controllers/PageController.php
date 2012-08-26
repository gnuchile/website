<?php

class PageController extends GxController
{

    public function filters()
    {
        return array(
            'accessControl',
        );
    }

    public function accessRules()
    {
        return array(
            array('allow',
                'actions' => array('index', 'view'),
                'users' => array('*'),
            ),
            array('allow',
                'actions' => array('minicreate', 'create', 'update'),
                'users' => array('@'),
            ),
            array('allow',
                'actions' => array('admin', 'delete'),
                'users' => array('admin'),
            ),
            array('deny',
                'users' => array('*'),
            ),
        );
    }

    public function actionView()
    {
        $model=null;
        if (isset($_GET['id']))
        {
            $model = $this->loadModel($_GET['id'], 'Page');
        }
        elseif (isset($_GET['slug']))
        {
            $model = Page::model()->findByAttributes(array('slug' => $_GET['slug']));
        }

        if(!$model)
        {
            throw new CHttpException(404, 'La página no existe.');
        }

        $this->render('view', array(
            'model' => $model,
        ));
    }

    public function actionCreate()
    {
        $model = new Page;


        if (isset($_POST['Page']))
        {
            $model->setAttributes($_POST['Page']);
            $relatedData = array(
                'categories' => $_POST['Page']['categories'] === '' ? null : $_POST['Page']['categories'],
            );

            if ($model->saveWithRelated($relatedData))
            {
                if (Yii::app()->getRequest()->getIsAjaxRequest())
                    Yii::app()->end();
                else
                    $this->redirect(array('view', 'id' => $model->id));
            }
        }

        $this->render('create', array('model' => $model));
    }

    public function actionUpdate($id)
    {
        $model = $this->loadModel($id, 'Page');


        if (isset($_POST['Page']))
        {
            $model->setAttributes($_POST['Page']);
            $relatedData = array(
                'categories' => $_POST['Page']['categories'] === '' ? null : $_POST['Page']['categories'],
            );

            if ($model->saveWithRelated($relatedData))
            {
                $this->redirect(array('view', 'id' => $model->id));
            }
        }

        $this->render('update', array(
            'model' => $model,
        ));
    }

    public function actionDelete($id)
    {
        if (Yii::app()->getRequest()->getIsPostRequest())
        {
            $this->loadModel($id, 'Page')->delete();

            if (!Yii::app()->getRequest()->getIsAjaxRequest())
                $this->redirect(array('admin'));
        } else
            throw new CHttpException(400, Yii::t('app', 'Your request is invalid.'));
    }

    public function actionIndex()
    {
        $dataProvider = new CActiveDataProvider('Page');
        $this->render('index', array(
            'dataProvider' => $dataProvider,
        ));
    }

    public function actionAdmin()
    {
        $model = new Page('search');
        $model->unsetAttributes();

        if (isset($_GET['Page']))
            $model->setAttributes($_GET['Page']);

        $this->render('admin', array(
            'model' => $model,
        ));
    }

}