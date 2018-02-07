<?php $this->beginContent('//layouts/main'); ?>

<?php
$message=new Message;
$unreadCount=$message->getCountUnreaded(Yii::app()->user->id);
if($unreadCount>0){
	$unreadLabel='<span class="badge badge-important">'.$unreadCount.'</span>';
}

$unreadLabel='';
$userMenu=array(
	'/message'=>Yii::t('translation','Messages').' '.$unreadLabel,
	'/user/friend'=>Yii::t('translation','Friends'),
	'seprator',
	'/user/update'=>Yii::t('translation','Update'),
	'/user/password'=>Yii::t('translation','Change Password'),
);
$adminMenu=array(
	'/admin/member'=>Yii::t('translation','Member Management'),
	'/admin/contact'=>Yii::t('translation','Contact'),
);

$icons=array(
	'/user/friend'=>'icon-user',
	'/message'=>'icon-envelope',
	'/user/update'=>'icon-edit',
	'/user/password'=>'icon-lock',
	'/admin/member'=>'icon-calendar',
	'/admin/contact'=>'icon-pencil',
);

$curPath=$_SERVER['REQUEST_URI'];
?>

<div class="container">
	<div class="row">	
		<div class="col-md-3">
			<div class="list-group">
				<?php $class=''; foreach($userMenu as $path=>$label):?>
					<?php if($path=='separator'):?>
						<a class="list-group-item"></>
					<?php else:?>
						<?php 
							if(strpos($curPath, $path)!==false){
								$class='list-group-item active';
							}else{
								$class='list-group-item';
							}
						?>
						<a class="<?php echo $class;?>" href="<?php echo $this->createUrl($path);?>" > <i class="<?php echo $icons[$path];?>"></i> <?php echo $label;?></a>
					<?php endif;?>
				<?php endforeach;?>
				<?php if(Yii::app()->user->role==Lookup::item('user-role', User::ROLE_ADMIN)):?>
					<a class="list-group-item"></a>
					<?php foreach($adminMenu as $path=>$label):?>
						<?php 
							if(strpos($curPath, $path)!==false){
								$class='list-group-item active';
							}else{
								$class='list-group-item';
							}
						?>
						<a class="<?php echo $class;?>" href="<?php echo $this->createUrl($path);?>" > <i class="<?php echo $icons[$path];?>"></i> <?php echo $label;?></a>
					<?php endforeach;?>
				<?php endif;?>
			</div>
		</div>
		<div class="col-md-9">
			<?php echo $content; ?>
		</div>
	</div>
</div>
<?php $this->endContent(); ?>
