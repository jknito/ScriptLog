<?php $this->pageTitle=Yii::app()->name . ' - '.UserModule::t("Registration");
$this->breadcrumbs=array(
	UserModule::t("Registration"),
);
?>

<h1><?php echo UserModule::t("Registration"); ?></h1>

<?php if(Yii::app()->user->hasFlash('registration')): ?>
<div class="alert alert-success">
<?php echo Yii::app()->user->getFlash('registration'); ?>
</div>
<?php else: ?>

<?php $form=$this->beginWidget('UActiveForm', array(
	'id'=>'registration-form',
	'enableAjaxValidation'=>true,
	'disableAjaxValidationAttributes'=>array('RegistrationForm_verifyCode'),
	'htmlOptions' => array('enctype'=>'multipart/form-data', 'class'=>"well", ),
)); ?>

	<div class="alert alert-info"><?php echo UserModule::t('Fields with <span class="required">*</span> are required.'); ?></div>
	
	<?php echo $form->errorSummary(array($model,$profile)); ?>
	
	<?php echo $form->labelEx($model,'username'); ?>
	<?php echo $form->textField($model,'username', array('required' => 'required', )); ?>
	<?php echo $form->error($model,'username'); ?>
	
	<?php echo $form->labelEx($model,'password'); ?>
	<?php echo $form->passwordField($model,'password', array('required' => 'required', )); ?>
	<?php echo $form->error($model,'password'); ?>
	<p class="hint">
	<?php echo UserModule::t("Minimal password length 4 symbols."); ?>
	</p>

	<?php echo $form->labelEx($model,'verifyPassword'); ?>
	<?php echo $form->passwordField($model,'verifyPassword', array('required' => 'required', )); ?>
	<?php echo $form->error($model,'verifyPassword'); ?>

	<?php echo $form->labelEx($model,'email'); ?>
	<?php echo $form->textField($model,'email', array('required' => 'required', )); ?>
	<?php echo $form->error($model,'email'); ?>

	
<?php 
		$profileFields=$profile->getFields();
		if ($profileFields) {
			foreach($profileFields as $field) {
			?>

		<?php echo $form->labelEx($profile,$field->varname); ?>
		<?php 
		if ($field->widgetEdit($profile)) {
			echo $field->widgetEdit($profile);
		} elseif ($field->range) {
			echo $form->dropDownList($profile,$field->varname,Profile::range($field->range));
		} elseif ($field->field_type=="TEXT") {
			echo$form->textArea($profile,$field->varname,array('rows'=>6, 'cols'=>50));
		} else {
			echo $form->textField($profile,$field->varname,array('size'=>60,'maxlength'=>(($field->field_size)?$field->field_size:255)));
		}
		 ?>
		<?php echo $form->error($profile,$field->varname); ?>

			<?php
			}
		}
?>
	<?php if (UserModule::doCaptcha('registration')): ?>

		<?php echo $form->labelEx($model,'verifyCode'); ?>
		
		<?php $this->widget('CCaptcha'); ?>
		<?php echo $form->textField($model,'verifyCode'); ?>
		<?php echo $form->error($model,'verifyCode'); ?>
		
		<p class="hint"><?php echo UserModule::t("Please enter the letters as they are shown in the image above."); ?>
		<br/><?php echo UserModule::t("Letters are not case-sensitive."); ?></p>

	<?php endif; ?>
	

		<?php echo CHtml::submitButton(UserModule::t("Register"), array('class' => 'btn btn-primary', )); ?>


<?php $this->endWidget(); ?>
<?php endif; ?>