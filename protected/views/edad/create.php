<?php
/* @var $this EdadController */
/* @var $model Edad */
?>

<?php
$this->breadcrumbs=array(
	'Edads'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Edad', 'url'=>array('index')),
	array('label'=>'Manage Edad', 'url'=>array('admin')),
);
?>

<h1>Create Edad</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>