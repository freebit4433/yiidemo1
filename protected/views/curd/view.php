<?php
/* @var $this CurdController */
/* @var $model Curd */

$this->breadcrumbs=array(
	'Curds'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Curd', 'url'=>array('index')),
	array('label'=>'Create Curd', 'url'=>array('create')),
	array('label'=>'Update Curd', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Curd', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Curd', 'url'=>array('admin')),
);
?>

<h1>View Curd #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'sex',
		'phone',
		'address',
		'salary',
	),
)); ?>
