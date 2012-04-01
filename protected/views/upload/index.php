<form id="nextStep" action="<?php echo Yii::app()->createUrl("scripts/create")?>" method="post" >
	<input type="hidden" name="file_name" id="file_name" value="none" />
</form>
<?php
$this->widget('ext.xupload.XUploadWidget', array(
					'url' => Yii::app()->createUrl("upload/upload", array("folder" => Yii::app()->user->name)),
                    'model' => $model,
                    'attribute' => 'file',
					'options' => array(
						'buildDownloadRow' => 'js:function (files, index) {
					        $("#file_name").attr("value",files.name);
					        $("#nextStep").submit();
							return "";
					    }'
					),
));
?>