<?php
/*
$this->breadcrumbs=array(
	'Ejecuciones',
);

$this->menu=array(
	array('label'=>'Create Ejecuciones', 'url'=>array('create')),
	array('label'=>'Manage Ejecuciones', 'url'=>array('admin')),
);

*/
?>

<h1>Ejecuciones</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
