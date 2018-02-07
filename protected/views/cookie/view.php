<?php
$this->breadcrumbs=array(
	'Cookies'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Cookie', 'url'=>array('index')),
	array('label'=>'Create Cookie', 'url'=>array('create')),
	array('label'=>'Update Cookie', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Cookie', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Cookie', 'url'=>array('admin')),
);
?>

<h1>View Cookie #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'cookie',
		'created_at',
	),
)); ?>
