<!doctype html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <?php
        // Suppress Yii's autoload of JQuery
        // We're loading it at bottom of page (best practice)
        // from Google's CDN with fallback to local version
        Yii::app()->clientScript->scriptMap = array(
            'jquery.js' => false,
        );
        // Load Yii's generated javascript at bottom of page
        // instead of the 'head', ensuring it loads after JQuery
        Yii::app()->getClientScript()->coreScriptPosition = CClientScript::POS_END;
//        Yii::app()->getClientScript()-> = CClientScript::POS_END;
        ?>

        <title><?php echo CHtml::encode($this->pageTitle); ?></title>
        <meta name="description" content="">
        <meta name="author" content="">

        <meta name="viewport" content="width=device-width">

        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/bootstrap-and-responsive.min.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/style.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/style1.css" />
        <link rel='stylesheet' type='text/css' href='<?php echo Yii::app()->theme->baseUrl; ?>/js/libs/fullcalendar/fullcalendar.css' />

        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/libs/modernizr-2.5.3-respond-1.1.0.min.js"></script>
    </head>
    <body>

        <div class="container">
            <div class="row">
                <header class="span12">
                    <div id="header-top" class="row">
                        <div class="span4">
                            <a href="<?php echo Yii::app()->request->baseUrl; ?>/">
                                <img src="<?php echo Yii::app()->baseUrl; ?>/images/logo_gnuchile.png" alt="" />
                            </a>
                        </div>
                        <div class="span8">
                            <p class="pull-right">
                                <br />
                                Síguenos en <a class="badge badge-important" href="http://identi.ca/fundaciongnuchile" target="_blank">Identi.ca</a>
                            </p>
                        </div>
                    </div>

                    <div class="navbar">
                        <div class="navbar-inner">
                            <div class="container">
                                <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </a>
                                <a class="brand" href="<?php echo Yii::app()->request->baseUrl; ?>/"><?php echo CHtml::encode(Yii::app()->name); ?></a>
                                <div class="nav-collapse">
                                    <?php
                                    $this->widget('zii.widgets.CMenu', array(
                                        'items' => array(
                                            array('label' => 'Inicio', 'url'   => array('/site/index')),
                                            array('label' => 'Blog', 'url'   => array('/blog/default/index'),
                                            //    'active'=>$this->module && $this->module->id=='blog'
                                            ),
//								array('label'=>'About', 'url'=>array('/site/page', 'view'=>'about')),
                                            array('label' => 'Contacto', 'url'   => array('/site/contact')),
//								array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
                                            array('label' => 'Logout (' . Yii::app()->user->name . ')', 'url'   => array('/site/logout'), 'visible'     => !Yii::app()->user->isGuest)
                                        ),
                                        'htmlOptions' => array('class' => 'nav'),
                                    ));
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div><!-- navbar -->

                    <?php if (isset($this->breadcrumbs)): ?>
                        <?php
                        $this->widget('zii.widgets.CBreadcrumbs', array(
                            'links'       => $this->breadcrumbs,
                            'htmlOptions' => array('class' => 'breadcrumbs breadcrumb'),
                        ));
                        ?><!-- breadcrumbs -->
<?php endif ?>
                </header>
            </div>

            <div class="row">
                <div class="span12 content">
<?php echo $content; ?>
                </div>
            </div>

            <div class="row">
                <footer class="span12">
                    <div class="row">
                        <div class="span8">
                            <p>Copyright &copy; <?php echo date('Y'); ?> by Fundación GNUCHILE - Todo el contenido del sitio está bajo licencia Creative Commons BY-SA, a menos que se especifique lo contrario.</p>
                        </div>
                        <div class="span4">
                            <p style="text-align:right;">
                                <a href="#" target="_blank">
                                    <img width="150px" src="<?php echo Yii::app()->baseUrl; ?>/images/logo_gnuchile.png" alt="" />
                                </a>
                            </p>
                        </div>
                    </div>
                </footer>
            </div><!-- footer -->

        </div><!-- container -->
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/libs/jquery-1.7.2.min.js"><\/script>')</script>
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/libs/bootstrap/bootstrap.min.js"></script>
        <script type="text/javascript" src="<?php echo Yii::app()->baseUrl; ?>/js/jquery.featureList-1.0.0.js"></script>
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/libs/fullcalendar/fullcalendar.min.js"></script>
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/script.js"></script>
        <script>
            var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
            (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
            g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
            s.parentNode.insertBefore(g,s)}(document,'script'));
        </script>
    </body>
</html>
