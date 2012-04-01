<?php
$this->breadcrumbs=array(
	'Scripts'=>array('index'),
	'Create',
);

$this->menu=array(
	//array('label'=>'List Scripts', 'url'=>array('index')),
	//array('label'=>'Manage Scripts', 'url'=>array('admin')),
);
?>

<h1>Create Scripts</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>