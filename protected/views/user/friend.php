<?php
$this->pageTitle=Yii::app()->name.' '.Yii::t('translation','Friend');
?>
<div class="user-friend">
	<div class="panel panel-primary">
		<div class="panel-heading">
			<?php echo Yii::t('translation','Requests');?>
		</div>
		<div class="panel-body">
			<?php foreach($user->pendingFriends as $pendingFriend):?>
				<?php $this->renderPartial('_friend', array('data'=>$pendingFriend));?>
			<?php endforeach;?>
		</div>
	</div>

	<div class="panel panel-primary">
		<div class="panel-heading">
			<?php echo Yii::t('translation','Friends');?>
		</div>
		<div class="panel-body">
			<?php foreach($user->getFriends() as $friend):?>
				<?php $this->renderPartial('_friend', array('data'=>$friend));?>
				<div class="clear"></div>
			<?php endforeach;?>
		</div>
	</div>
</div>
