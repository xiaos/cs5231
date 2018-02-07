<?php
$this->pageTitle=Yii::app()->name . ' - Error';
?>


<div class="panel panel-danger">
	<div class="panel-heading">Error <?php echo $code; ?></div>
	<div class="panel-body">
		<?php echo CHtml::encode($message); ?>
	</div>
</div>
