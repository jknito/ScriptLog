<?php
$this->breadcrumbs=array(
	'Scripts'=>array('index'),
	$model->id,
);

$this->menu=array(
	//array('label'=>'List Scripts', 'url'=>array('index')),
	//array('label'=>'Create Scripts', 'url'=>array('create')),
	//array('label'=>'Update Scripts', 'url'=>array('update', 'id'=>$model->id)),
	//array('label'=>'Delete Scripts', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	//array('label'=>'Manage Scripts', 'url'=>array('admin')),
);
?>

<h1>View Scripts #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'id_user',
		'registro',
		'tipo_servicio',
		'nombre_archivo',
		//'contenido_archivo',
		'observacion',
		//'estado',
	),
)); ?>

<?php echo CHtml::link(CHtml::encode($model->nombre_archivo), array("upload/download", 'id'=>$model->id)); ?>

<pre class="brush: sql; toolbar: true;">
<?php echo CHtml::encode($model->contenido_archivo); ?>
</pre>
