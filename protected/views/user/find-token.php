<?php
$this->pageTitle=Yii::app()->name.' '.Yii::t('translation', 'Find Password');
?>
<div class="find-token">
	<?php if(Yii::app()->user->hasFlash('password-success')):?>
		<div class="panel panel-success">
			<div class="panel-heading"><?php echo Yii::t('translation','Success');?></div>
			<div class="panel-body">
				<div><?php echo Yii::t('translation','Your password is changed successfully');?></div>
			</div>
		</div>
	<?php else:?>
		<div class="panel panel-success">
			<div class="panel-heading"><?php echo Yii::t('translation','Reset Password');?></div>
				<div class="panel-body">
				<?php $form=$this->beginWidget('CActiveForm', array(
							'id'=>'user-password',
							'enableAjaxValidation'=>true,
							'htmlOptions'=>array('class'=>'form-horizontal col-md-4'),
							)); ?>
				<fieldset>
					<?php echo $form->errorSummary($user); ?>

					<?php echo $form->hiddenField($user, 'oldpassword', array('value'=>'xxxxxx'));?>
					<div class="form-group">
						<?php echo $form->labelEx($user,'password'); ?>
						<div class="input-group">
							<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
							<?php echo $form->passwordField($user,'password',array('style'=>'','class'=>'form-control','maxlength'=>128)); ?>
						</div>
						<?php echo $form->error($user,'password'); ?>
					</div>

					<div class="form-group">
						<?php echo $form->labelEx($user,'password2',array()); ?>
						<div class="input-group">
							<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
							<?php echo $form->passwordField($user,'password2',array('style'=>'','class'=>'form-control','maxlength'=>128)); ?>
						</div>
						<?php echo $form->error($user,'password2'); ?>
					</div>

					<div class="form-group">
						<input id="confirm" name="confirm" value="<?php echo Yii::t('translation','Confirm');?>" type="submit" class="btn btn-primary"/>
					</div>

				</fieldset>
				<?php $this->endWidget(); ?>
			</div>
		</div>
	<?php endif;?>
</div>
