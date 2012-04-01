<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'ejecuciones-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'id_servicio'); ?>
		<?php echo $form->hiddenField($model,'id_servicio'); ?>
		<h3><?php echo $servicio->nombre; ?></h3>
		<?php echo $form->error($model,'id_servicio'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_script'); ?>
		<?php echo $form->hiddenField($model,'id_script'); ?>
		<h3><?php echo $script->nombre_archivo; ?></h3>
		<?php echo $form->error($model,'id_script'); ?>
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