<table style="border: 1px black solid;">
<?php
//print_r ($datos);
$flag = true;
$cols = 0;
$code_servicios = array();
foreach( $datos as $key => $value ){
	if( $flag ) {
		echo "<tr>";
		$i    = 1;
		$data_prev = "";
		foreach( $value as $col => $data ){
			if( $i++ % 2  == 0 ){
				echo "<th style=\"border: 1px black solid;text-align:center;\">";
				echo CHtml::link(CHtml::encode($col), array("servicios/view", 'id'=>$data_prev));
				echo "</th>";
				$cols++;
			}else{
				array_push( $code_servicios, $col);
			}
			$data_prev = $col;
		}
		echo "</tr>";
		$flag = false;
	}
	echo "<tr>";
	$cont = 0;
	$i    = 1;
	$data_prev = "";
	
	foreach( $value as $col => $data ){
		if( $i++ % 2  == 0 ){
			// esto para las ejecuciones
			if( $cont++ < $cols - 1 ){
				if( strlen ($data) == 0 ){
					echo "<td bgcolor=\"#FB717E\" style=\"border: 1px black solid;text-align:center;\">";
					$data = "<img src=\"".Yii::app()->request->baseUrl."/images/no.png\" />";
					echo CHtml::link($data, array("ejecuciones/create", 'servicio'=>$code_servicios[$cont-1], 'script'=>$value['id']));
				}else{
					echo "<td bgcolor=\"#C6F66F\" style=\"border: 1px black solid;text-align:center;\">";
					echo CHtml::link(CHtml::encode($data), array("ejecuciones/view", 'id'=>$data_prev));
				}
			}else{
				//para el archivo
				echo "<td style=\"border: 1px black solid;\">";
				echo CHtml::link(CHtml::encode($data), array("scripts/view", 'id'=>$data_prev));
			}
			echo "</td>";
		}
		$data_prev = $data;
	}
	echo "</tr>";
}
?>
</table>