<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'user-register',
	'enableAjaxValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
	'htmlOptions'=>array('class'=>'form-horizontal col-md-4'),
)); ?>
<fieldset>
		<div class="form-group">
			<?php echo $form->labelEx($user,'email'); ?>
			<div class="input-group">
				<span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
				<?php echo $form->textField($user,'email',array('class'=>'form-control', 'maxlength'=>128)); ?>
			</div>
			<?php echo $form->error($user,'email'); ?>
		</div>

		<div class="form-group">
			<?php echo $form->labelEx($user,'password'); ?>
			<div class="input-group">
				<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
				<?php echo $form->passwordField($user,'password',array('class'=>'form-control','maxlength'=>128)); ?>
			</div>
			<?php echo $form->error($user,'password'); ?>
		</div>

		<div class="form-group">
			<?php echo $form->labelEx($user,'password2'); ?>
			<div class="input-group">
				<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
				<?php echo $form->passwordField($user,'password2',array('class'=>'form-control','maxlength'=>128)); ?>
			</div>
			<?php echo $form->error($user,'password2'); ?>
		</div>
		
		<hr/>

		<div class="form-group">
			<?php echo $form->labelEx($user,'nickname'); ?>
			<div class="input-group">
				<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
				<?php echo $form->textField($user,'nickname',array('class'=>'form-control','maxlength'=>20)); ?>
			</div>
			<?php echo $form->error($user,'nickname'); ?>
		</div>

		<div class="form-group">
			<?php echo $form->labelEx($user,'avatarid'); ?>
			<div class="controls">	
				<?php echo CHtml::activeHiddenField($user, 'avatarid', array('id'=>'user-avatarid')); ?>
				<?php echo CHtml::activeHiddenField($user, 'image', array('id'=>'user-avatar-image')); ?>
				<?php if(!$user->avatarid):?>
					<?php $this->widget('ext.eajaxupload.EAjaxUpload', array(
						   'id'=>'uploadFile',
						   'config'=>array(
								   'action'=>'/user/upload',
								   'allowedExtensions'=>array("jpg","jpeg", "png"),//array("jpg","jpeg","gif","exe","mov" and etc...
								   'sizeLimit'=>1*1024*1024,// maximum file size in bytes
								   'minSizeLimit'=>10*1024,// minimum file size in bytes
								   'onComplete'=>"js:function(id, filename, responseJSON){if(responseJSON.success){var fileName=responseJSON.filename; var avatarid=responseJSON.avatarid; $('#user-avatarid').val(avatarid); $('#user-avatar-image').val(fileName); $('#avatar').attr('src', '/images/avatar/'+fileName );}}",
							)
						  ));
					?>
				<?php else:?>
					<?php echo CHtml::image('/images/avatar/'.$user->image,'', array('width'=>80, 'height'=>80));?>
				<?php endif;?>
			</div>
		</div>

		<div class="form-group">
			<?php echo $form->labelEx($user,'birthday'); ?>
			<div class="input-group">
				<span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
				<?php $this->widget('zii.widgets.jui.CJuiDatePicker', array(
					'model'=>$user, 'attribute'=>'birthday',
					'options'=>array(
						'dateFormat'=>'yy-mm-dd',
						'yearRange'=>'-70:+0',
						'changeYear'=>'true',
						'changeMonth'=>'true',
						'maxDate'=>'-18y',
					),
					'htmlOptions'=>array('class'=>'form-control'),
				));?>
			</div>
			<?php echo $form->error($user,'birthday'); ?>
		</div>

		<div class="form-group">
			<?php echo $form->labelEx($user,'sex'); ?>
			<div class="input-group">
				<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
				<?php echo $form->dropDownList($user,'sex',Lookup::items('user-sex'), array('class'=>'form-control')); ?>
				<?php //echo $form->error($user,'sex'); ?>
			</div>
		</div>

		<div class="form-group">
			<?php echo $form->labelEx($user,'hp_number'); ?>
			<div class="input-group">
				<span class="input-group-addon">65</span>
				<?php echo $form->textField($user,'hp_number',array('class'=>'form-control','maxlength'=>15)); ?>
			</div>
			<?php echo $form->error($user,'hp_number'); ?>
		</div>

	
		<div class="form-group">
			<?php echo CHtml::submitButton($user->isNewRecord ? Yii::t('translation','Submit') : Yii::t('translation','Save'), array('class'=>'btn btn-primary')); ?>
		</div>
</fieldset>
<?php $this->endWidget(); ?>
