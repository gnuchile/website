<?php

Yii::import('application.models._base.BaseEvent');

class Event extends BaseEvent
{

    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }

    public function getStartDate()
    {
        return $this->dates[0]->start_date;
    }

    private function getAllAsArray()
    {
        $eventsArray = array();
        /**
         * @var Event Description
         */
        foreach (Event::model()->findAll() as $event)
        {
            $eventData = array(
                'title'=>$event->name,
                'start'=>$event->getStartDate()
            );
            array_push($eventsArray, $eventData);
        }
        return $eventsArray;
    }

    public function getAll()
    {
        $eventsString = "[
        {
            title  : 'Evento 1',
            start  : '2012-10-01'
        },
        {
            title  : 'event2',
            start  : '2012-10-05',
            end    : '2012-10-07'
        },
        {
            title  : 'event3',
            start  : '2012-10-29 12:30:00',
            allDay : false /* will make the time show */
        }
        ]";


//        $events = CJSON::decode($eventsString);
        $events = $this->getAllAsArray();
        return $events;
    }

}