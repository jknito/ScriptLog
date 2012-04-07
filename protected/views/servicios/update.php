<?php
$this->breadcrumbs=array(
	'Servicioses'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'Create Servicios', 'url'=>url('/servicios/create'), 'active' => activeMenu('/servicios/create',$this)),
	array('label'=>'Manage Servicios', 'url'=>url('/servicios/admin'), 'active' => activeMenu('/servicios/admin',$this)),
	array('label'=>'Update Servicios', 'url'=>url('/servicios/update',array('id'=>$model->id)), 'active' => activeMenu('/servicios/update',$this)),
	array('label'=>'View Servicios', 'url'=>url('/servicios/view',array('id'=>$model->id)), 'active' => activeMenu('/servicios/view',$this)),
);
?>

<h1>Update Servicios <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>