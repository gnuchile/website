<?php

class DefaultController extends Controller
{

    public function actionIndex()
    {
        $posts = Post::model()->inBlog()->findAll();
        $dataProvider = new CActiveDataProvider(Post::model()->inFrontPage());
        $this->render('index', array(
            'posts' => $posts,
            'dataProvider' => $dataProvider,
                )
        );
    }

    public function actionView()
    {
        $username = NULL;

        if (isset($_GET['username']))
        {
            $username = $_GET['username'];
        }
        else
        {
            throw new CException('username not set.');
        }

        $user = User::model()->findByAttributes(array('username' => $username));

        if ($user)
        {
            $userBlogPosts = $user->blogPosts;
            $this->render('view', array(
                'model' => $user,
                'posts' => $userBlogPosts,
                    )
            );
        }
        else
        {
            throw new CHttpException(404, 'No existe el blog de ' . $username);
        }
    }

}