<?php 
	$this->pageTitle=Yii::app()->name . ' - '.Yii::t('translation','Register'); 
	$this->breadcrumbs=array(
		Yii::t('translation','Register'),
	);
?>
<div class="user-register">
	<?php if(Yii::app()->user->hasFlash('register-success')):?>
		<div class="panel panel-primary">
			<div class="panel-heading">
				<?php echo Yii::t('translation','Thank you for Register');?>
			</div>
  			<div class="panel-body">
				<?php echo Yii::t('translation','Thank you for Register');?>
  			</div>
		</div>
	<?php else: ?>
		<div class="panel panel-primary">
			<div class="panel-heading">
				<?php echo Yii::t('translation','Welcome to register').' '.Yii::app()->name;?>
			</div>
  			<div class="panel-body">
				<?php echo $this->renderPartial('_register', array('user'=>$user)); ?>
  			</div>
		</div>
	<?php endif; ?>
</div>
