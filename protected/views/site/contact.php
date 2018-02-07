<?php
$this->pageTitle=Yii::app()->name . ' - '.Yii::t('translation', 'Contact Us');

$this->breadcrumbs=array(
	Yii::t('translation', 'Contact Us'),
);
?>


<div class="site-contact">
	<?php if(Yii::app()->user->hasFlash('contact')): ?>
		<div class="panel panel-success">
			<div class="panel-heading">
    				<h3 class="panel-title"><?php echo Yii::t('translation', 'Contact Us');?></h3>
			</div>
			<div class="panel-body">
				Thank you, we will contact you.
			</div>
		</div>
	<?php else: ?>
		<div class="panel panel-primary">
			<div class="panel-heading">
    				<h3 class="panel-title"><?php echo Yii::t('translation', 'Contact Us');?></h3>
			</div>
			<div class="panel-body">
				<?php $form=$this->beginWidget('CActiveForm', array(
					'id'=>'contact-form',
					'enableClientValidation'=>true,
					'clientOptions'=>array(
						'validateOnSubmit'=>true,
					),
					'htmlOptions'=>array('role'=>'form', 'class'=>'form-horizontal col-md-8'),
				)); ?>

					<?php //echo $form->errorSummary($model); ?>

					<div class="form-group">
						<?php echo $form->labelEx($model,'content', array('class'=>'', 'for'=>'inputContent')); ?>
						<?php $this->widget('ext.kindeditor.KindEditor',
							array(
								'model'=>$model,
								'attribute'=>'content',
							)
						); ?>
						<?php echo $form->textArea($model,'content',array('rows'=>5, 'class'=>'form-control', 'maxlength'=>1024)); ?>
						<?php echo $form->error($model,'content'); ?>
					</div>

					<div class="form-group">
						<?php echo $form->labelEx($model,'contact', array('class'=>'', 'for'=>'inputContact')); ?>
						<?php echo $form->textField($model,'contact',array('id'=>'inputContact', 'class'=>'form-control', 'maxlength'=>128)); ?>
						<?php echo $form->error($model,'contact'); ?>
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
							<div class="">
								<?php echo $form->textField($model,'verifyCode', array('placeholder'=>Yii::t('translation', 'Enter verify code'))); ?>
								<?php echo $form->error($model,'verifyCode'); ?>
							</div>
						</div>
					<?php endif; ?>

					<div class="form-group">
						<?php echo CHtml::submitButton(Yii::t('translation','Submit'),array('class'=>'btn btn-primary')); ?>
					</div>

				<?php $this->endWidget(); ?>
			</div>
		</div><!-- end of panel-->
	<?php endif; ?>
</div>
