<div class="view">
<div>
	<font size="+1"><?php 
	$user=User::model()->findByPk($data->id_user);
	echo CHtml::encode($user->username); 
	?></font>
	<?php echo CHtml::encode($data->registro); ?>
	<?php echo CHtml::encode($data->tipo_servicio); ?>
</div>
<div><?php echo CHtml::link(CHtml::encode($data->nombre_archivo), array('view', 'id'=>$data->id)); ?></div>
<div><?php echo CHtml::encode($data->observacion); ?></div>
</div>
