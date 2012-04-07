<?php
$this->breadcrumbs=array(
	'Servicioses'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Create Servicios', 'url'=>url('/servicios/create'), 'active' => activeMenu('/servicios/create',$this)),
	array('label'=>'Manage Servicios', 'url'=>url('/servicios/admin'), 'active' => activeMenu('/servicios/admin',$this)),
);
?>

<h1>Create Servicios</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>