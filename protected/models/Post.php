<?php

Yii::import('application.models._base.BasePost');

class Post extends BasePost
{

    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }

    protected function beforeValidate()
    {
        $userID = Yii::app()->user->id;
        $user = User::model()->findByAttributes(array('username' => $userID));

        $createdAt = date('Y-m-d');

        if ($user)
        {
            // si no tiene usuario lo asignamos, sólo si pasa eso
            if($this->user_id == NULL)
                $this->user_id = $user->id;

            $this->created_at = $createdAt;
        }
        return parent::beforeValidate();
    }

    protected function afterSave()
    {
        parent::afterSave();
        //copiar a soap server
    }

    public function scopes()
    {
        return array(
            'inBlog' => array(
                'condition' => 'in_blog=1',
            ),
            'inFrontPage' => array(
                'condition' => 'in_frontpage=1',
            ),
            'recently'  => array(
                'order' => 'create_time DESC',
                'limit' => 5,
            ),
        );
    }

    public function getBlogPosts($userID)
    {
        return Post::model()->findAllByAttributes(array(
                    'user_id' => $userID,
                    'in_blog' => 1
                ));
    }

    public function showCategoriesAsLabel()
    {
        foreach ($this->categories as $c)
        {
            echo $c->showAsLabel();
        }
    }

    public function getCategoriesAsLabel()
    {
        $categories = array();
        foreach ($this->categories as $c)
        {
            array_push($categories, $c->getAsLabel());
        }
        return implode('', $categories);
    }

    public function getPubDate($format = 'Y-m-d H:i:s')
    {
        return date($format, strtotime($this->publication_date));
    }

    public function getMarkdownBody()
    {
        $md = new CMarkdownParser;
        return $md->safeTransform($this->body);
    }
}