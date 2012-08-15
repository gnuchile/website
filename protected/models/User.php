<?php

Yii::import('application.models._base.BaseUser');

class User extends BaseUser
{
	public static function model($className=__CLASS__) {
		return parent::model($className);
	}

        public function scopes()
        {
            return array(
//                'blogPosts'=>array(
//                    'condition'=>'in_blog=1',
//                    'with'=>'posts',
//                ),
            );
        }

        public function relations()
        {
            $relations = parent::relations();

            $relations['blogPosts'] = array(self::HAS_MANY, 'Post', 'user_id', 'condition'=>'in_blog=1');

            return $relations;
        }

        protected function beforeSave()
        {
            parent::beforeSave();

            $this->password = $this->encryptPassword($this->password);

            return true;
        }

        public function encryptPassword($password, $method = 'md5')
        {
            return $method($password);
        }
}