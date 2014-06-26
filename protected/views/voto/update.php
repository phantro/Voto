<?php
/* @var $this VotoController */
/* @var $model Voto */
?>

<?php
$this->breadcrumbs=array(
	'Votos'=>array('index'),
	$model->Id=>array('view','id'=>$model->Id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Voto', 'url'=>array('index')),
	array('label'=>'Create Voto', 'url'=>array('create')),
	array('label'=>'View Voto', 'url'=>array('view', 'id'=>$model->Id)),
	array('label'=>'Manage Voto', 'url'=>array('admin')),
);
?>

    <h1>Update Voto <?php echo $model->Id; ?></h1>

<?php $this->renderPartial('_update', array('model'=>$model)); ?>