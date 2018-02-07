<!DOCTYPE html>
<html lang="en">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="language" content="en" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link rel="stylesheet" type="text/css" href="/assets/css/bootstrap.min.css"/>
<link rel="stylesheet" type="text/css" href="/assets/css/bootstrap-theme.min.css"/>
<link rel="stylesheet" type="text/css" href="/assets/css/theme.css"/>
<?php 
#Yii::app()->clientScript->registerCssFile($this->assetsBase.'/css/bootstrap.min.css');
#Yii::app()->clientScript->registerCssFile($this->assetsBase.'/css/bootstrap-theme.min.css');
#Yii::app()->clientScript->registerCssFile($this->assetsBase.'/css/theme.css');

Yii::app()->clientScript->registerCoreScript('jquery');
Yii::app()->clientScript->registerScriptFile($this->assetsBase.'/js/bootstrap.min.js');
?>

<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

	<div id="page">

		<div id="header">
			<?php $this->renderPartial('//layouts/_header');?>
		</div>
		<!-- header -->

		<div id="content">
			<?php echo $content; ?>
		</div>

		<div id="footer">
			<?php $this->renderPartial('//layouts/_footer');?>
		</div>
		<!-- footer -->

	</div>
	<!-- page -->

	<script type="text/javascript">
	$('.dropdown-toggle').dropdown();
</script>
</body>
</html>
