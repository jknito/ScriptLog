<?php
/*
$this->breadcrumbs=array(
	'Ejecuciones'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Ejecuciones', 'url'=>array('index')),
	array('label'=>'Create Ejecuciones', 'url'=>array('create')),
	array('label'=>'View Ejecuciones', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Ejecuciones', 'url'=>array('admin')),
);
*/
?>

<h1>Update Ejecuciones <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>