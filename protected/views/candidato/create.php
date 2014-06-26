<?php
/* @var $this CandidatoController */
/* @var $model Candidato */
?>

<?php
$this->breadcrumbs=array(
	'Candidatos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Candidato', 'url'=>array('index')),
	array('label'=>'Manage Candidato', 'url'=>array('admin')),
);
?>

<h1>Create Candidato</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>