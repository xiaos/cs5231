<?php
	$this->pageTitle=Yii::app()->name . ' - '.Yii::t('translation', 'Login');
	$this->breadcrumbs=array(
		Yii::t('translation','Login'),
	);
?>

<div class="user-login">
	<div class="panel panel-primary">
		<div class="panel-heading">
			<?php echo Yii::t('translation', 'Login');?>
		</div>
		<div class="panel-body">
			<?php $form=$this->beginWidget('CActiveForm', array(
				'id'=>'login-form',
				'enableClientValidation'=>true,
				'clientOptions'=>array(
					'validateOnSubmit'=>true,
				),
				'htmlOptions'=>array('class'=>'form-horizontal col-md-5'),
			)); ?>
				<fieldset>

					<div class="form-group">
						<?php echo $form->labelEx($model,'email',array('class'=>'')); ?>
						<div class="input-group">
							<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
							<?php echo $form->textField($model,'email',array('class'=>'form-control')); ?>
						</div>
						<?php echo $form->error($model,'email'); ?>
					</div>

					<div class="form-group">
						<?php echo $form->labelEx($model,'password',array('class'=>'control-label')); ?>
						<div class="input-group">
							<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
							<?php echo $form->passwordField($model,'password',array('class'=>'form-control')); ?>
						</div>
						<?php echo $form->error($model,'password'); ?>
					</div>

					<div class="form-group">
						<?php echo $form->label($model,'rememberMe'); ?>
						<?php echo $form->checkBox($model,'rememberMe'); ?>
						<?php echo $form->error($model,'rememberMe'); ?>
					</div>

					<?php if(CCaptcha::checkRequirements()): ?>
						<div class="form-group">
							<div class="">
								<?php $this->widget('CCaptcha', array(
									'showRefreshButton'=>false,
									'clickableImage'=>true,
									'imageOptions'=>array(
										'title'=>Yii::t('translation', 'Click to change'),
										'style'=>'cursor:pointer',
									),
								)); ?>
							</div>
							<?php echo $form->textField($model,'verifyCode', array('placeholder'=>Yii::t('translation', 'Enter verify code'))); ?>
							<?php echo $form->error($model,'verifyCode'); ?>
						</div>
					<?php endif; ?>

					<div class="form-group">
					<?php echo CHtml::submitButton(Yii::t('translation', 'Login'), array('class'=>'btn btn-primary')); ?>
					</div>
				</fieldset>

				<br/>

				<div class="form-group">
					<ul class="list-group">
						<li class="list-group-item">
						<?php echo Yii::t('translation', 'Forget password? Please').' '.CHtml::link(Yii::t('translation', 'Find'), array('/user/find'));?>.<br/>	
						</li>
						<li class="list-group-item">
						<?php echo Yii::t('translation', 'Don\'t have account? Please').' '.CHtml::link(Yii::t('translation', 'Register'), array('/user/register'));?>.	
						</li>
					</ul>
				</div>
			<?php $this->endWidget(); ?>
		</div>
	</div>

</div><!-- site-login -->
