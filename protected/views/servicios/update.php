<?php
$this->breadcrumbs=array(
	'Servicioses'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Servicios', 'url'=>array('index')),
	array('label'=>'Create Servicios', 'url'=>array('create')),
	array('label'=>'View Servicios', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Servicios', 'url'=>array('admin')),
);
?>

<h1>Update Servicios <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>