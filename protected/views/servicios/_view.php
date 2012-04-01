<div class="view">

	<b><?php echo CHtml::link(CHtml::encode($data->nombre), array('view', 'id'=>$data->id)) . " - ". CHtml::encode($data->ambiente); ?></b>
	[<?php echo CHtml::encode($data->tipo_servicio); ?>]
	<br />
	<b><?php echo CHtml::encode($data->ip_privada); ?></b> [<?php echo CHtml::encode($data->ip_publica); ?>]

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('tipo_motor')); ?>:</b>
	<?php echo CHtml::encode($data->tipo_motor); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('puerto_publico')); ?>:</b>
	<?php echo CHtml::encode($data->puerto_publico); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('puerto_privado')); ?>:</b>
	<?php echo CHtml::encode($data->puerto_privado); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('registro')); ?>:</b>
	<?php echo CHtml::encode($data->registro); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('estado')); ?>:</b>
	<?php echo CHtml::encode($data->estado); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('comentarios')); ?>:</b>
	<?php echo CHtml::encode($data->comentarios); ?>
	<br />

	*/ ?>

</div>