<?php

class EventController extends GxController
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
                'actions' => array('index', 'view', 'getEvents'),
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
            'model' => $this->loadModel($id, 'Event'),
        ));
    }

    public function actionCreate()
    {
        $model = new Event;


        if (isset($_POST['Event']))
        {
            $model->setAttributes($_POST['Event']);
            $relatedData = array(
                'attendants' => $_POST['Event']['attendants'] === '' ? null : $_POST['Event']['attendants'],
                'organizers' => $_POST['Event']['organizers'] === '' ? null : $_POST['Event']['organizers'],
                'partners' => $_POST['Event']['partners'] === '' ? null : $_POST['Event']['partners'],
                'sponsors' => $_POST['Event']['sponsors'] === '' ? null : $_POST['Event']['sponsors'],
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
        $model = $this->loadModel($id, 'Event');


        if (isset($_POST['Event']))
        {
            $model->setAttributes($_POST['Event']);
            $relatedData = array(
                'attendants' => $_POST['Event']['attendants'] === '' ? null : $_POST['Event']['attendants'],
                'organizers' => $_POST['Event']['organizers'] === '' ? null : $_POST['Event']['organizers'],
                'partners' => $_POST['Event']['partners'] === '' ? null : $_POST['Event']['partners'],
                'sponsors' => $_POST['Event']['sponsors'] === '' ? null : $_POST['Event']['sponsors'],
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
            $this->loadModel($id, 'Event')->delete();

            if (!Yii::app()->getRequest()->getIsAjaxRequest())
                $this->redirect(array('admin'));
        } else
            throw new CHttpException(400, Yii::t('app', 'Your request is invalid.'));
    }

    public function actionIndex()
    {
        $dataProvider = new CActiveDataProvider('Event');
        $this->render('index', array(
            'dataProvider' => $dataProvider,
        ));
    }

    public function actionAdmin()
    {
        $model = new Event('search');
        $model->unsetAttributes();

        if (isset($_GET['Event']))
            $model->setAttributes($_GET['Event']);

        $this->render('admin', array(
            'model' => $model,
        ));
    }

    public function actionGetEvents()
    {
        $events = Event::model()->getAll();
        $eventsJSON = CJSON::encode($events);
        echo $eventsJSON;
    }

}