<?php
$this->breadcrumbs=array(
	'Scripts'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'Upload Script', 'url'=>url('/upload'), 'active' => activeMenu('/upload',$this)),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('scripts-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Scripts</h1>

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

<style type="text/css">
.filters td input { width: 90%; }
.filters td { text-align: center; }
</style>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'scripts-grid',
	'htmlOptions'=>array(
		'class' =>'span9',
	),
	'itemsCssClass'=>'table table-bordered table-striped table-condensed',
	'pagerCssClass'=>'pagination',
	'pager'=>array(
	//	'class' => 'CLinkPager',
		'header'=>'',
		'htmlOptions' => array('class' => 'pagination', ),
	),
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	//'filterCssClass'=>'',
	'columns'=>array(
		'id',
		//'id_user',
		'registro',
		'tipo_servicio',
		'nombre_archivo',
		//'observacion',
		//'estado',
		array(
			'class'=>'CButtonColumn',
			'htmlOptions'=>array('nowrap'=>'nowrap'),
		),
	),
)); ?>
