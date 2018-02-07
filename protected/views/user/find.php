<?php
$this->pageTitle=Yii::app()->name.' '.Yii::t('transalatin', 'Find password');
?>

<div class="user-find">
	<?php if(Yii::app()->user->hasFlash('find-success')):?>
	<div class="panel panel-success">
		<div class="panel-heading">Success</div>
		<div class="panel-body">
			<?php echo Yii::t('transalatin', 'Email is sent to you, please check and reset your password.');?>
		</div>
	  </div>
	<?php elseif(Yii::app()->user->hasFlash('find-fail')):?>
	<div class="panel panel-danger">
		<div class="panel-heading">Failed</div>
		<div class="panel-body">
			<?php echo Yii::t('transalatin', 'Failed to send you email, please try again later.');?>
		</div>
	  </div>
	<?php elseif(Yii::app()->user->hasFlash('find-no-email')):?>
	<div class="panel panel-danger">
		<div class="panel-heading">Failed</div>
		<div class="panel-body">
			<?php echo Yii::t('transalatin', 'Your email is not in our database.');?>
		</div>
	  </div>
	<?php else: ?>
		<div class="panel panel-primary">
			<div class="panel-heading">
				Find password
			</div>
			<div class="panel-body">
				<?php $form=$this->beginWidget('CActiveForm', array(
					'id'=>'user-find',
					'enableAjaxValidation'=>true,
					'clientOptions'=>array(
						'validateOnSubmit'=>true,
					),
					'htmlOptions'=>array('enctype'=>'multipart/form-data', 'class'=>'form-horizontal col-md-4'),
				)); ?>
					<div class="form-group">
						<?php echo $form->labelEx($user,'email', array('class'=>'')); ?>
						<div class="input-group">
							<span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
							<?php echo $form->textField($user,'email',array('class'=>'form-control', 'maxlength'=>128)); ?>
						</div>
						<?php echo $form->error($user,'email'); ?>
					</div>

					<div class="form-group">
						<button type="submit" class="btn btn-success" name="confirm"><?php echo Yii::t('translation', 'Reset password');?></button>
					</div>
				<?php $this->endWidget(); ?>
			</div>
		</div>
	<?php endif;?>
</div>
