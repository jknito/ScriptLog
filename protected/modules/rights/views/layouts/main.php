<?php $this->beginContent(Rights::module()->appLayout); ?>

<div id="rights" class="container row-fluid" >

	<div id="content span12-fluid">

		<?php if( $this->id!=='install' ): ?>

			<div id="menu">

				<?php $this->renderPartial('/_menu'); ?>

			</div>

		<?php endif; ?>

		<?php $this->renderPartial('/_flash'); ?>

		<?php echo $content; ?>

	</div><!-- content -->

</div>

<?php $this->endContent(); ?>