<div class="navbar navbar-default navbar-static-top">
		<div class="container">
			<div class="navbar-header">
				<a class="navbar-brand" href="/"><?php echo Yii::t('translation', 'Home');?></a>
				<button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			</div>

			<nav class="collapse navbar-collapse bs-navbar-collapse" role="navigation">
				<ul class="nav navbar-nav">
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<?php if(Yii::app()->user->isGuest):?>
					<li><a class="" href="<?php echo $this->createUrl('/user/login');?>"><span
							class="glyphicon glyphicon-user"></span> <?php echo Yii::t('translation', 'Login');?>
					</a></li>
					<li><a class=""
						href="<?php echo $this->createUrl('/user/register');?>"><span class="glyphicon glyphicon-pencil
"></span> <?php echo Yii::t('translation', 'Register');?>
					</a></li>
					<?php else:?>
					<?php 
					$unreadCount=Message::model()->getCountUnreaded(Yii::app()->user->id);
					$unreadLabel="";
					if($unreadCount>0){
								$unreadLabel=' <span class="badge badge-warning">'.$unreadCount.'</span>';
							}
							?>
					<li><a href="<?php echo $this->createUrl('/message');?>"><span
							class="glyphicon  glyphicon-envelope"></span> <?php echo Yii::t('translation', 'Message');?>
							<?php echo $unreadLabel;?> </a></li>
					<li><a class=""
						href="<?php echo $this->createUrl('/user/'.Yii::app()->user->id);?>"><?php echo Yii::t('translation', 'Home Page');?>
					</a></li>
					<li class="dropdown"><a href="#" data-toggle="dropdown"
						class="dropdown-toggle"><?php echo Yii::t('translation', 'Settings');?><b
							class="caret"></b> </a>
						<ul class="dropdown-menu">
							<li><a href="<?php echo $this->createUrl('/user/update');?>"><span
									class="glyphicon glyphicon-user"></span> <?php echo Yii::t('translation', 'Account');?>
							</a></li>
							<li class="divider"></li>
							<li><a href="<?php echo $this->createUrl('/user/logout');?>"><span
									class="glyphicon glyphicon-remove"></span> <?php echo Yii::t('translation', 'Logout');?>
							</a></li>
						</ul>
					</li>
					<?php endif;?>
				</ul>
			</nav>
		</div>
</div>
