<?php
Yii::import("ext.xupload.models.XUploadForm");
class UploadController extends RController
{
	public function actionIndex()
	{
		$model = new XUploadForm;
		$this->render('index', array(
			'model' => $model,
		));
	}

	public function actionDownload()
	{
		$id = Yii::app()->getRequest()->getQuery('id');
		$scripts=Scripts::model()->findByPk($id);
	
		$file = $scripts->nombre_archivo;

		//echo $file;
		
		if (file_exists( SCRIPT_PATH.'/'.$file)) {
			header('Content-Description: File Transfer');
			header('Content-Type: text/plain');
			header('Content-Disposition: attachment; filename='.basename($file));
			//header('Content-Transfer-Encoding: binary');
			header('Expires: 0');
			header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
			header('Pragma: public');
			header('Content-Length: ' . filesize(SCRIPT_PATH.'/'.$file));
			ob_clean();
			flush();
			readfile(SCRIPT_PATH.'/'.$file);
			exit;
		}
		
	}

 	public function actions()
    {
    	return array(
            'upload'=>array(
                'class'=>'ext.xupload.actions.XUploadAction',
        		'subfolderVar' => 'folder',
        		'path' => UPLOAD_PATH,
            ),
        );
    }

	public function filters()
	{
		return array(
			'rights',
		);
	}

	public function actionError()
	{
	    if($error=Yii::app()->errorHandler->error)
	    {
	    	if(Yii::app()->request->isAjaxRequest)
	    		echo $error['message'];
	    	else
	        	$this->render('error', $error);
	    }
	}

	}