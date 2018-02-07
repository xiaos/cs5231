<?php
$this->pageTitle=Yii::app()->name.' '.Yii::t('translation','Contact Us');
?>
<div class="admin-contact">
	<div class="panel panel-primary">
		<div class="panel-heading">
			<?php echo Yii::t('translation','Member');?>
		</div>
		<div class="panel-body">
			<?php $this->widget('zii.widgets.grid.CGridView', array(
				'id'=>'user-grid',
				'dataProvider'=>$model->search(),
				'filter'=>$model,
				'columns'=>array(
					array(
						'name'=>'cid',
						'htmlOptions'=>array('width'=>'40'),
					),
					'contact',
					'content',
					'created_on',
				),
			)); ?>
		</div>
	</div>
</div>
