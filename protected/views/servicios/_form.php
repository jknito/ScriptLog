<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'servicios-form',
	'enableAjaxValidation'=>false,
	'htmlOptions'=>array( 'class'=>'well form-horizontal',),
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>
	<fieldset>
		<div class='control-group'>
		<div class='control-label'>
		<?php echo $form->labelEx($model,'nombre'); ?>
		</div>
		<div class='controls'>
		<?php echo $form->textField($model,'nombre',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'nombre'); ?>
		</div>
		</div>
		<div class='control-group'>
		<div class='control-label'>
		<?php echo $form->labelEx($model,'tipo_servicio'); ?>
		</div>
		<div class='controls'>
		<?php echo $form->dropDownList($model,'tipo_servicio',array('basedatos'=>'basedatos')); ?>
		<?php echo $form->error($model,'tipo_servicio'); ?>
		</div>
		</div>

		<div class='control-group'>
		<div class='control-label'>
		<?php echo $form->labelEx($model,'tipo_motor'); ?>
		</div>
		<div class='controls'>
		<?php echo $form->dropDownList($model,'tipo_motor',array('oracle'=>'oracle')); ?>
		<?php echo $form->error($model,'tipo_motor'); ?>
		</div>
		</div>

		<div class='control-group'>
		<div class='control-label'>
		<?php echo $form->labelEx($model,'ambiente'); ?>
		</div>
		<div class='controls'>
		<?php echo $form->dropDownList($model,'ambiente',array('produccion'=>'produccion','desarrollo'=>'desarrollo')); ?>
		<?php echo $form->error($model,'ambiente'); ?>
		</div>
		</div>

		<div class='control-group'>
		<div class='control-label'>
        <?php echo $form->labelEx($model,'nombre_servicio'); ?>
		</div>
		<div class='controls'>
        <?php echo $form->textField($model,'nombre_servicio',array('size'=>20,'maxlength'=>20)); ?>
        <?php echo $form->error($model,'nombre_servicio'); ?>
		</div>
		</div>

		<div class='control-group'>
		<div class='control-label'>
		<?php echo $form->labelEx($model,'ip_publica'); ?>
		</div>
		<div class='controls'>
		<?php echo $form->textField($model,'ip_publica',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'ip_publica'); ?>
		</div>
		</div>

		<div class='control-group'>
		<div class='control-label'>
		<?php echo $form->labelEx($model,'ip_privada'); ?>
		</div>
		<div class='controls'>
		<?php echo $form->textField($model,'ip_privada',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'ip_privada'); ?>
		</div>
		</div>

		<div class='control-group'>
		<div class='control-label'>
		<?php echo $form->labelEx($model,'puerto_publico'); ?>
		</div>
		<div class='controls'>
		<?php echo $form->textField($model,'puerto_publico',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'puerto_publico'); ?>
		</div>
		</div>

		<div class='control-group'>
		<div class='control-label'>
		<?php echo $form->labelEx($model,'puerto_privado'); ?>
		</div>
		<div class='controls'>
		<?php echo $form->textField($model,'puerto_privado',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'puerto_privado'); ?>
		</div>
		</div>

		<div class='control-group'>
		<div class='control-label'>
		<?php echo $form->labelEx($model,'comentarios'); ?>
		</div>
		<div class='controls'>
		<?php echo $form->textArea($model,'comentarios',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'comentarios'); ?>
		</div>
		</div>

		<div class='control-group'>
		<div class='controls'>
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save',array('class'=>'btn btn-primary')); ?>
		</div>
		</div>

	</fieldset>
<?php $this->endWidget(); ?>

</div><!-- form -->
