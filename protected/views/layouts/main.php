<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="jknito">
	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
    <?php Yii::app()->clientScript->registerCoreScript('bootstrap'); ?>
    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!-- http://html5shim.googlecode.com/svn/trunk/html5.js -->
    <!--[if lt IE 9]>
      <script src="<?php echo Yii::app()->request->baseUrl; ?>/bootstrap/js/html5.js"></script>
    <![endif]-->
    <link type="text/css" rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/javascripts/prettify/prettify.css"/>
    <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/javascripts/prettify/prettify.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            prettyPrint();
        });
    </script>
</head>

<body>
    <div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container-fluid">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="<?php echo Yii::app()->request->baseUrl; ?>"><?php echo Yii::app()->name?></a>
          <div class="nav-collapse">
            <?php 
            $user = user()->user();
            //dd($this);
            $this->widget('zii.widgets.CMenu',array(
                'htmlOptions'=>array('class'=>'nav'),
                'submenuHtmlOptions'=>array('class'=>'dropdown-menu'),
                'items'=>array(        
                    array(  
                            'visible'=>user()->isAdmin(),
                            'label'=>'Admin', 
                            'url'=>'#',
                            'linkOptions'=>array('class'=>'dropdown-toggle','data-toggle'=>'dropdown'),
                            'itemOptions'=>array('class'=>'dropdown'), 
                            'items'=>array(
                                array('label'=>'Usuarios', 'url'=>url('/user/admin')),
                                array('label'=>'Campos de Perfil', 'url'=>url('/user/profileField/admin')),
                                array('label'=>'Permisos', 'url'=>url('/rights')),
                    )),
                    array('label'=>'Servicios', 'url'=>url('/servicios'),'visible'=>user()->isAdmin(),'active'=>activeMenu('/servicios',$this)),
                    array('label'=>'Scripts', 'url'=>url('/scripts'),'visible'=>!user()->isGuest(),'active'=>activeMenu('/scripts',$this)),
                    array('label'=>'Ejecuciones', 'url'=>url('/ejecuciones'),'visible'=>!user()->isGuest(),'active'=>activeMenu('/ejecuciones',$this)),
                    array('label'=>'Matriz Ejecuciones', 'url'=>url('/ejecutar'),'visible'=>!user()->isGuest(),'active'=>activeMenu('/ejecutar',$this)),
                ),
            )); 
            $this->widget('zii.widgets.CMenu',array(
                'htmlOptions'=>array('class'=>'nav pull-right'),
                'items'=>array(
                    array('url'=>Yii::app()->getModule('user')->loginUrl, 'label'=>Yii::app()->getModule('user')->t("Login"),  'visible'=>Yii::app()->user->isGuest,),
                    array('url'=>Yii::app()->getModule('user')->registrationUrl, 'label'=>Yii::app()->getModule('user')->t("Register"), 'visible'=>Yii::app()->user->isGuest),
                    array('url'=>Yii::app()->getModule('user')->profileUrl, 'label'=>$user?$user->profile->firstname.' '.$user->profile->lastname:' ', 'visible'=>!Yii::app()->user->isGuest),
                    array('url'=>Yii::app()->getModule('user')->logoutUrl, 'label'=>Yii::app()->getModule('user')->t("Logout"), 'visible'=>!Yii::app()->user->isGuest),
                ),
            )); ?>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

    <div class="container-fluid">
        <?php echo $content; ?>
        <footer>
        <hr/>Powered by <a href="http://jknito.net">jknito</a>
        </footer><!-- footer -->
    </div><!-- page -->

</body>
</html>
