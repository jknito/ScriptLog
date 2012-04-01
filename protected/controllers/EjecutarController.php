<?php

class EjecutarController extends RController
{
	public function filters()
	{
		return array(
			'rights',
			//'accessControl', // perform access control for CRUD operations
		);
	}

	public function actionIndex()
	{
		
		$servicios=Servicios::model()->findAll(array(
			'condition'=>'estado=:estado',
			'params'=>array(':estado'=>'A'),
			'order'=> ' nombre asc'
		));
		
		$select = "\n";
		$from   = "FROM Scripts
LEFT OUTER JOIN Ejecuciones ON ( Scripts.id = Ejecuciones.id_script )
LEFT OUTER JOIN Users ON ( Ejecuciones.id_user = Users.id)\n";
		$groupby= "GROUP BY Scripts.id, Scripts.nombre_archivo\n";
		$where  = "WHERE Scripts.estado = 'A' and ( Ejecuciones.estado is null or Ejecuciones.estado = 'A') \n";
		$orderby= "ORDER BY Scripts.id desc";
		$sql    = "";
		
		foreach( $servicios as $key => $value ){
			$select .= "MAX( IF( id_servicio = ".$value->id.", Ejecuciones.id, NULL)) \"".$value->id."\", \n";
			$select .= "MAX( IF( id_servicio = ".$value->id.", Users.username, NULL)) \"".$value->nombre."\", \n";
		}

		$select = "SELECT".$select."Scripts.id, Scripts.nombre_archivo \"Nombre del Script\"\n";
		$sql = $select . $from . $where . $groupby. $orderby;
		
		$cmd = Yii::app()->db->createCommand($sql);
		$rows = $cmd->queryAll();
		
		
		
		$this->render('index', array( 'query' => $sql, 'datos' => $rows) );
	}

	// Uncomment the following methods and override them if needed
	/*
	public function filters()
	{
		// return the filter configuration for this controller, e.g.:
		return array(
			'inlineFilterName',
			array(
				'class'=>'path.to.FilterClass',
				'propertyName'=>'propertyValue',
			),
		);
	}

	public function actions()
	{
		// return external action classes, e.g.:
		return array(
			'action1'=>'path.to.ActionClass',
			'action2'=>array(
				'class'=>'path.to.AnotherActionClass',
				'propertyName'=>'propertyValue',
			),
		);
	}
	*/
}