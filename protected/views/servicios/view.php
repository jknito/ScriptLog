<?php
$this->breadcrumbs=array(
	'Servicioses'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Create Servicios', 'url'=>url('/servicios/create'), 'active' => activeMenu('/servicios/create',$this)),
	array('label'=>'Manage Servicios', 'url'=>url('/servicios/admin'), 'active' => activeMenu('/servicios/admin',$this)),
	array('label'=>'Update Servicios', 'url'=>url('/servicios/update',array('id'=>$model->id)), 'active' => activeMenu('/servicios/update',$this)),
	array('label'=>'View Servicios', 'url'=>url('/servicios/view',array('id'=>$model->id)), 'active' => activeMenu('/servicios/view',$this)),
);
?>

<h1>View Servicios #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'htmlOptions'=>array(
		'class' =>'table table-bordered table-striped table-condensed',
		),
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
)); 

?>
