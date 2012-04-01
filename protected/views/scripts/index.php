<?php
$this->breadcrumbs=array(
	'Scripts',
);

$this->menu=array(
	//array('label'=>'Create Scripts', 'url'=>array('create')),
	//array('label'=>'Manage Scripts', 'url'=>array('admin')),
);
?>

<h1>Scripts</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
