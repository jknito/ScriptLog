<?php
$this->breadcrumbs=array(
	'Servicioses',
);

$this->menu=array(
	array('label'=>'Create Servicios', 'url'=>array('create')),
	array('label'=>'Manage Servicios', 'url'=>array('admin')),
);
?>

<h1>Servicios</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
