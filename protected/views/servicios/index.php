<?php
$this->breadcrumbs=array(
	'Servicioses',
);

$this->menu=array(
	array('label'=>'Index Servicios', 'url'=>url('/servicios/index'), 'active' => activeMenu('/servicios/index',$this)),
	array('label'=>'Create Servicios', 'url'=>url('/servicios/create'), 'active' => activeMenu('/servicios/create',$this)),
	array('label'=>'Manage Servicios', 'url'=>url('/servicios/admin'), 'active' => activeMenu('/servicios/admin',$this)),
);
?>

<h1>Servicios</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
