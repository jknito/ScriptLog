<?php
$this->breadcrumbs=array(
	'Scripts'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Upload Script', 'url'=>url('/upload'), 'active' => activeMenu('/upload',$this)),
	array('label'=>'Manage Scripts', 'url'=>url('/scripts/admin'), 'active' => activeMenu('/scripts/admin',$this)),
	//array('label'=>'Update Scripts', 'url'=>array('update', 'id'=>$model->id)),
	//array('label'=>'Delete Scripts', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	//array('label'=>'Manage Scripts', 'url'=>array('admin')),
);
?>

<h2>View Scripts #<?php echo $model->id; ?></h2>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'htmlOptions'=>array(
		'class' =>'table table-bordered table-striped table-condensed',
		),
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

<?php echo CHtml::link("<i class='icon-download icon-white'></i> ".CHtml::encode($model->nombre_archivo), url("upload/download", array('id'=>$model->id)),array("class"=>"btn btn-primary")); ?>

<pre class="prettyprint linenums">
<?php echo CHtml::encode($model->contenido_archivo); ?>
</pre>
