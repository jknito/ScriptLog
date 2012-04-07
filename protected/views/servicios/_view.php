<div>

	<b><?php echo CHtml::link(CHtml::encode($data->nombre), array('view', 'id'=>$data->id)) . " - ". CHtml::encode($data->ambiente); ?></b>
	[<?php echo CHtml::encode($data->tipo_servicio); ?>]
	<br />
	<b><?php echo CHtml::encode($data->ip_privada); ?></b> [<?php echo CHtml::encode($data->ip_publica); ?>]

</div>