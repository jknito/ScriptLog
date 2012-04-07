<?php
$this->breadcrumbs=array(
	'Scripts',
);

$this->menu=array(
	array('label'=>'Upload Script', 'url'=>url('/upload'), 'active' => activeMenu('/upload',$this)),
	array('label'=>'Manage Scripts', 'url'=>url('/scripts/admin'), 'active' => activeMenu('/scripts/admin',$this), 'visible'=>user()->isAdmin()),
);
?>

<h1>Scripts</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
