<?php

class PostController extends GxController
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
                'actions' => array('index', 'view', 'preview'),
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

    public function actionView($id)
    {
        $this->render('view', array(
            'model' => $this->loadModel($id, 'Post'),
        ));
    }

    public function actionCreate()
    {
        $model = new Post;

        if (isset($_POST['Post']))
        {
            $model->setAttributes($_POST['Post']);
            $relatedData = array(
                'categories' => $_POST['Post']['categories'] === '' ? null : $_POST['Post']['categories'],
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
        $model = $this->loadModel($id, 'Post');

        if (isset($_POST['Post']))
        {
            $model->setAttributes($_POST['Post']);
            $relatedData = array(
                'categories' => $_POST['Post']['categories'] === '' ? null : $_POST['Post']['categories'],
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
            $this->loadModel($id, 'Post')->delete();

            if (!Yii::app()->getRequest()->getIsAjaxRequest())
                $this->redirect(array('admin'));
        } else
            throw new CHttpException(400, Yii::t('app', 'Your request is invalid.'));
    }

    public function actionIndex()
    {
        $dataProvider = new CActiveDataProvider('Post');
        $this->render('index', array(
            'dataProvider' => $dataProvider,
        ));
    }

    public function actionAdmin()
    {
        $model = new Post('search');
        $model->unsetAttributes();

        if (isset($_GET['Post']))
            $model->setAttributes($_GET['Post']);

        $this->render('admin', array(
            'model' => $model,
        ));
    }

    public function actionPreview()
    {
        $parser=new CMarkdownParser;
        echo $parser->safeTransform($_POST['Post'][$_GET['attribute']]);
    }
}