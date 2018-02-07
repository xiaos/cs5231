<?php $this->beginContent('//layouts/main'); ?>
<div class="container">

	<?php if(!empty($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
			'htmlOptions'=>array('class'=>'breadcrumb'),
			'separator'=>'<span class="divider">/</span>',
			'tagName'=>'ui',
		)); ?><!-- breadcrumbs -->
		<hr class="space"/>
	<?php endif?>

	<?php echo $content; ?>
</div><!-- content -->
<?php $this->endContent(); ?>
