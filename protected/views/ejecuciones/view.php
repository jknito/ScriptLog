<?php
/*
$this->breadcrumbs=array(
	'Ejecuciones'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Ejecuciones', 'url'=>array('index')),
	array('label'=>'Create Ejecuciones', 'url'=>array('create')),
	array('label'=>'Update Ejecuciones', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Ejecuciones', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Ejecuciones', 'url'=>array('admin')),
);
*/
?>

<h1>View Ejecuciones #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'id_user',
		'id_script',
		'registro',
		'observacion',
	),
)); ?>
