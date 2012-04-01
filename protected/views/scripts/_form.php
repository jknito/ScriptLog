<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'scripts-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'tipo_servicio'); ?>
		<?php echo $form->dropDownList($model,'tipo_servicio',array('basedatos'=>'basedatos')); ?>
		<?php echo $form->error($model,'tipo_servicio'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nombre_archivo'); ?>
		<?php echo $form->textField($model,'nombre_archivo',array('size'=>60,'maxlength'=>2048)); ?>
		<?php echo $form->error($model,'nombre_archivo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'observacion'); ?>
		<?php echo $form->textArea($model,'observacion',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'observacion'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->