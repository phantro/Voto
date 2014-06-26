<?php
/* @var $this VotoController */
/* @var $model Voto */
?>

<?php
/*$this->breadcrumbs=array(
	'Votos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Voto', 'url'=>array('index')),
	array('label'=>'Manage Voto', 'url'=>array('admin')),
);*/
?>

<!-- <h1>Create Voto</h1> -->

<?php $this->renderPartial('_form', array('model'=>$model,'datoCandidato'=>$datoCandidato)); ?>