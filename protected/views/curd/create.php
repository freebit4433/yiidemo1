<?php
/* @var $this CurdController */
/* @var $model Curd */

$this->breadcrumbs=array(
	'Curds'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Curd', 'url'=>array('index')),
	array('label'=>'Manage Curd', 'url'=>array('admin')),
);
?>

<h1>Create Curd</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>