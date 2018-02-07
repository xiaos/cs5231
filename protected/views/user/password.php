<?php
	$this->pageTitle=Yii::app()->name.' '.Yii::t('translation', 'Change Password');
?>
<div class="user-password">
	<?php if(Yii::app()->user->hasFlash('password-success')):?>
		<div class="alert alert-success">
			<a class="close" data-dismiss="alert">×</a>
			<h4 class="alert-heading"><?php echo Yii::t('translation','Success');?></h4>
			<p><?php echo Yii::t('translation','Your password is changed successfully');?></p>
		</div>
	<?php else:?>
		<div class="panel panel-primary">
			<div class="panel-heading">
				<?php echo Yii::t('translation','Change Password');?>
			</div>
			<div class="panel-body">
				<?php $form=$this->beginWidget('CActiveForm', array(
							'id'=>'user-password',
							'enableAjaxValidation'=>true,
							'htmlOptions'=>array('class'=>'form-horizontal form-group col-md-4'),
							)); ?>
				<fieldset>
					<?php if(Yii::app()->user->hasFlash('password-wrong')):?>
						<div class="alert alert-danger form-group">
							<a class="close" data-dismiss="alert">×</a>
							<h4 class="alert-heading"><?php echo Yii::t('translation','Wrong password');?></h4>
							<p><?php echo Yii::t('translation','Your password is not changed');?></p>
						</div>
					<?php endif;?>

					<div class="form-group">
						<?php echo $form->labelEx($user,'oldpassword'); ?>
						<div class="input-group">
							<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
							<?php echo $form->passwordField($user,'oldpassword',array('style'=>'margin-left: -4px;','class'=>'form-control','maxlength'=>128)); ?>
						</div>
						<?php echo $form->error($user,'oldpassword'); ?>
					</div>
					
					<hr/>
					
					<div class="form-group">
						<?php echo $form->labelEx($user,'password'); ?>
						<div class="input-group">
							<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
							<?php echo $form->passwordField($user,'password',array('style'=>'margin-left: -4px;','class'=>'form-control','maxlength'=>128)); ?>
						</div>
						<?php echo $form->error($user,'password'); ?>
					</div>

					<div class="form-group">
						<?php echo $form->labelEx($user,'password2'); ?>
						<div class="input-group">
							<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
							<?php echo $form->passwordField($user,'password2',array('style'=>'margin-left: -4px;','class'=>'form-control','maxlength'=>128)); ?>
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
