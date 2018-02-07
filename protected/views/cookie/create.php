<?php
$this->breadcrumbs=array(
	'Cookies'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Cookie', 'url'=>array('index')),
	array('label'=>'Manage Cookie', 'url'=>array('admin')),
);
?>

<h1>Create Cookie</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>