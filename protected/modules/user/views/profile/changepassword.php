<?php $this->pageTitle=Yii::app()->name . ' - '.UserModule::t("Change Password");
$this->breadcrumbs=array(
	UserModule::t("Profile") => array('/user/profile'),
	UserModule::t("Change Password"),
);
?>

<?php echo $this->renderPartial('menu'); ?>

<div class="row-fluid">
<div class="span12-fluid">
<?php $form=$this->beginWidget('UActiveForm', array(
	'id'=>'changepassword-form',
	'enableAjaxValidation'=>true,
    'htmlOptions' => array("class"=>"well"),
)); ?>

	<?php echo CHtml::errorSummary($model); ?>
	
	<div>
	<?php echo $form->labelEx($model,'password'); ?>
	<?php echo $form->passwordField($model,'password'); ?>
	<?php echo $form->error($model,'password'); ?>
	<p class="hint">
	<?php echo UserModule::t("Minimal password length 4 symbols."); ?>
	</p>
	</div>
	
	<div>
	<?php echo $form->labelEx($model,'verifyPassword'); ?>
	<?php echo $form->passwordField($model,'verifyPassword'); ?>
	<?php echo $form->error($model,'verifyPassword'); ?>
	</div>
	
	
	<div >
	<?php echo CHtml::submitButton(UserModule::t("Save"),array("class"=>"btn btn-primary")); ?>
	</div>

<?php $this->endWidget(); ?>
</div><!-- form -->
</div><!-- form -->
