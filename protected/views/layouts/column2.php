<?php $this->beginContent('//layouts/main'); ?>
<div class="row-fluid">
<div class="span3-fluid">
	<div class="tabbable tabs-left">
	<?php
		$this->widget('zii.widgets.CMenu', array(
			'htmlOptions'=>array('class'=>'nav nav-tabs'),
			'items'=>$this->menu,
		));
	?>
	</div>
</div>
<div class="span9">
    <?php echo $content; ?>
</div>
</div>
<?php $this->endContent(); ?>