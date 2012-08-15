<?php

Yii::import('application.models._base.BasePost');

class Post extends BasePost
{
	public static function model($className=__CLASS__) {
		return parent::model($className);
	}

        protected function beforeValidate()
        {
         
            $userID = Yii::app()->user->id;
            $user = User::model()->findByAttributes(array('username'=>$userID));
            
            $createdAt = date('Y-m-d');

            if($user)
            {
                $this->user_id = $user->id;
                $this->created_at = $createdAt;
            }

            var_dump($this->attributes);//exit;
            return parent::beforeValidate();

            //return parent::beforeSave();
   
            //return true;
        }

        protected function afterSave() {
            parent::afterSave();
            //copiar a soap server
        }

        public function scopes()
        {
            return array(
//                'userBlog'
            );
        }

        public function getBlogPosts($userID)
        {
            return Post::model()->findAllByAttributes(array(
                'user_id'=>$userID,
                'in_blog'=>1
            ));
        }
}