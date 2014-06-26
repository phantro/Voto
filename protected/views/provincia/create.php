<?php
/* @var $this ProvinciaController */
/* @var $model Provincia */
?>

<?php
$this->breadcrumbs=array(
	'Provincias'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Provincia', 'url'=>array('index')),
	array('label'=>'Manage Provincia', 'url'=>array('admin')),
);
?>

<h1>Create Provincia</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>