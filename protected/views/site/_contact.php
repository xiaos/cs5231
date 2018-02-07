
<ul class="list-group">
	<li class="list-group-item"> 
		<b><?php echo CHtml::encode($data->getAttributeLabel('content')); ?>:</b>
		<?php echo $data->content; ?>
	</li>

	<li class="list-group-item"> 
		<b><?php echo CHtml::encode($data->getAttributeLabel('created_on')); ?>:</b>
		<?php echo CHtml::encode($data->created_on); ?>
	</li>
</ul>

