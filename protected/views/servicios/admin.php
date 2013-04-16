<?php
$this->breadcrumbs=array(
	'Servicioses'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'Create Servicios', 'url'=>url('/servicios/create'), 'active' => activeMenu('/servicios/create',$this)),
	array('label'=>'Manage Servicios', 'url'=>url('/servicios/admin'), 'active' => activeMenu('/servicios/admin',$this)),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('servicios-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Servicioses</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->


<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'servicios-grid',
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
	'dataProvider'=>$model->search(),
	//'filter'=>$model,
	'columns'=>array(
		'id',
		'nombre',
		'tipo_servicio',
		'tipo_motor',
		'ambiente',
		'comentarios',
		/*
		'ip_publica',
		'ip_privada',
		'puerto_publico',
		'puerto_privado',
		'registro',
		'estado',
		'comentarios',
		*/
		array(
			'class'=>'CButtonColumn',
			'htmlOptions'=>array('nowrap'=>'nowrap'),
		),
	),
)); ?>
