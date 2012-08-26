<?php

Yii::import('application.models._base.BasePage');

class Page extends BasePage
{
	public static function model($className=__CLASS__) {
		return parent::model($className);
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

    public function getMarkdownContent($partial = false)
    {
        if($this->content)
        {
            $md = new CMarkdownParser;
            if($partial)
                $this->content=  mb_substr ($this->content, 0, 250);
            $content = $md->safeTransform($this->content);
    //        var_dump($content);//exit;
            return $content;
        }
        else
            return '<br/>';
    }

    public function getMarkdownBody($partial = false)
    {
        return $this->getMarkdownContent($partial);
    }
}