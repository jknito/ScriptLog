<?php
Yii::import("application.modules.user.models.*");

class ScriptsController extends RController
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'rights',
			//'accessControl', // perform access control for CRUD operations
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	/*
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'users'=>array('admin'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}
	*/

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Scripts;

		// para setear el archivo que se va a grabar
		if(isset($_POST['file_name']))
		{
			$model->nombre_archivo = $_POST['file_name'];
		}
		
		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Scripts']))
		{
			$model->attributes=$_POST['Scripts'];
			
			$model->id_user = Yii::app()->user->id;
			$model->registro=date('Y-m-d H-i-s');
			$model->estado='A';
			
			$archivito=UPLOAD_PATH.'/'.Yii::app()->user->name.'/'.$model->nombre_archivo;
			
			$file = fopen($archivito, "r");
			while(!feof($file))
			{
				$model->contenido_archivo.=fgets($file);
			}
			fclose($file);
			
			
			if($model->save()){
				// move file
				$new_file = str_repeat("0", (ZEROES_FILE-strlen(strval($model->id)))) . strval($model->id) . '_' . $model->nombre_archivo;
				if ( ! copy( $archivito, SCRIPT_PATH.'/'.$new_file)){
					$model->estado='I';
					$model->save();
				}
				$model->nombre_archivo=$new_file;
				$model->save();
				$this->redirect(array('view','id'=>$model->id));
			}
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Scripts']))
		{
			$model->attributes=$_POST['Scripts'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		if(Yii::app()->request->isPostRequest)
		{
			// we only allow deletion via POST request
			// $this->loadModel($id)->delete();

			// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
			if(!isset($_GET['ajax']))
				$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
		}
		else
			throw new CHttpException(400,'Invalid request. Please do not repeat this request again.');
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Scripts',array (
			'criteria' => array(
				'condition' => 'estado="A"',
			),
			'sort' => array(
						'attributes'=>array(
							'ordenamiento'=>array(
								'asc'=>'id',
								'desc'=>'id DESC',
								'label'=>'ID',
								'default'=>'desc',
							),
							'*',
						),
						'defaultOrder'=>array(
							'ordenamiento'=>true,
						),
					),
		));
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Scripts('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Scripts']))
			$model->attributes=$_GET['Scripts'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer the ID of the model to be loaded
	 */
	public function loadModel($id)
	{
		$model=Scripts::model()->findByPk((int)$id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param CModel the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='scripts-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
