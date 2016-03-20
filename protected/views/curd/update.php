<?php
/* @var $this CurdController */
/* @var $model Curd */

$this->breadcrumbs=array(
	'Curds'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Curd', 'url'=>array('index')),
	array('label'=>'Create Curd', 'url'=>array('create')),
	array('label'=>'View Curd', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Curd', 'url'=>array('admin')),
);
?>

<h1>Update Curd <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>