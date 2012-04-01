<?php
$this->breadcrumbs=array(
	'Servicioses'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Servicios', 'url'=>array('index')),
	array('label'=>'Create Servicios', 'url'=>array('create')),
	array('label'=>'Update Servicios', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Servicios', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Servicios', 'url'=>array('admin')),
);
?>

<h1>View Servicios #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nombre',
		'tipo_servicio',
		'tipo_motor',
		'ambiente',
		'ip_publica',
		'ip_privada',
		'puerto_publico',
		'puerto_privado',
		'registro',
		'estado',
		'comentarios',
	),
)); ?>
