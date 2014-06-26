<?php
/* @var $this FormacionController */
/* @var $model Formacion */
?>

<?php
$this->breadcrumbs=array(
	'Formacions'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Formacion', 'url'=>array('index')),
	array('label'=>'Manage Formacion', 'url'=>array('admin')),
);
?>

<h1>Create Formacion</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>