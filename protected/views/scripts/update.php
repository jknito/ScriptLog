<?php
$this->breadcrumbs=array(
	'Scripts'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	//array('label'=>'List Scripts', 'url'=>array('index')),
	//array('label'=>'Create Scripts', 'url'=>array('create')),
	//array('label'=>'View Scripts', 'url'=>array('view', 'id'=>$model->id)),
	//array('label'=>'Manage Scripts', 'url'=>array('admin')),
);
?>

<h1>Update Scripts <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>