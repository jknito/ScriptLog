<?php
/*
$this->breadcrumbs=array(
	'Ejecuciones'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Ejecuciones', 'url'=>array('index')),
	array('label'=>'Manage Ejecuciones', 'url'=>array('admin')),
);
*/
?>

<h1>Create Ejecuciones</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model, 'servicio'=>$servicio, 'script'=>$script)); ?>