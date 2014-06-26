<?php
/* @var $this CandidatoController */
/* @var $model Candidato */
?>

<?php
$this->breadcrumbs=array(
	'Candidatos'=>array('index'),
	$model->Id=>array('view','id'=>$model->Id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Candidato', 'url'=>array('index')),
	array('label'=>'Create Candidato', 'url'=>array('create')),
	array('label'=>'View Candidato', 'url'=>array('view', 'id'=>$model->Id)),
	array('label'=>'Manage Candidato', 'url'=>array('admin')),
);
?>

    <h1>Update Candidato <?php echo $model->Id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>