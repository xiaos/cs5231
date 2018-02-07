<?php
$this->breadcrumbs=array(
	'Cookies'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Cookie', 'url'=>array('index')),
	array('label'=>'Create Cookie', 'url'=>array('create')),
	array('label'=>'View Cookie', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Cookie', 'url'=>array('admin')),
);
?>

<h1>Update Cookie <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>