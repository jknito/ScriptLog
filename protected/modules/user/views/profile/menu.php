<div class="row-fluid">
<div class="span12-fluid">
<?php 
$user = Yii::app()->getModule('user')->user(Yii::app()->user->id);
$user = $user->profile->firstname.' '.$user->profile->lastname;
$this->widget('zii.widgets.CMenu',array(
    'htmlOptions'=>array('class'=>'nav nav-tabs'),
    'items'=>array(
        array('url'=>$this->createUrl('/user/profile'), "template"=>"<h2>$user</h2>"),
        array('url'=>$this->createUrl('/user/profile'), 'label'=>UserModule::t('Profile'), 'active'=>$this->action->id=='profile'),
        array('url'=>$this->createUrl('edit'), 'label'=>UserModule::t('Edit'), 'active'=>$this->action->id=='edit'),
        array('url'=>$this->createUrl('changepassword'), 'label'=>UserModule::t('Change password'), 'active'=>$this->action->id=='changepassword'),
    ),
));
?>
</div>
</div>
