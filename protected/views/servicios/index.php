<?php
$this->breadcrumbs=array(
	'Servicioses',
);

$this->menu=array(
	array('label'=>'Create Servicios', 'url'=>url('/servicios/create'), 'active' => activeMenu('/servicios/create',$this)),
	array('label'=>'Manage Servicios', 'url'=>url('/servicios/admin'), 'active' => activeMenu('/servicios/admin',$this)),
);
?>

<h1>Servicios</h1>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'dataProvider'=>$dataProvider,
	'htmlOptions'=>array(
		'class' =>'span9',
	),
	'itemsCssClass'=>'table table-bordered table-striped table-condensed',
	'pagerCssClass'=>'pagination',
	'pager'=>array(
	//	'class' => 'CLinkPager',
		'header'=>'',
	//	'htmlOptions' => array('class' => 'pagination', ),
	),
	'columns'=>array(
		'id',
		'nombre',
		'tipo_servicio',
		'tipo_motor',
		'ambiente',
		'comentarios',
	),
)); ?>
