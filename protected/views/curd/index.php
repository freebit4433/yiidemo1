<?php
/* @var $this CurdController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Curds',
);

$this->menu=array(
	array('label'=>'Create Curd', 'url'=>array('create')),
	array('label'=>'Manage Curd', 'url'=>array('admin')),
);
?>

<h1>Curds</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
