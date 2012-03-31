<div class="row-fluid">
<div class="span12">
<?php
$this->breadcrumbs=array(
	(UserModule::t('Users'))=>array('admin'),
	$model->username=>array('view','id'=>$model->id),
	(UserModule::t('Update')),
);
?>
<?php echo $this->renderPartial('_menu', array(
		'list'=> array(
			CHtml::link(UserModule::t('Create User'),array('create')),
			CHtml::link(UserModule::t('View User'),array('view','id'=>$model->id)),
		),
	)); 
?>

<h3><?php echo  'Update user:'." ".$model->username; ?></h3>

</div>
</div>

<?php echo $this->renderPartial('_form', array('model'=>$model,'profile'=>$profile)); ?>