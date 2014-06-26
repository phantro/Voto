<?php
/* @var $this EdadController */
/* @var $model Edad */
?>

<?php
$this->breadcrumbs=array(
	'Edads'=>array('index'),
	$model->Id=>array('view','id'=>$model->Id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Edad', 'url'=>array('index')),
	array('label'=>'Create Edad', 'url'=>array('create')),
	array('label'=>'View Edad', 'url'=>array('view', 'id'=>$model->Id)),
	array('label'=>'Manage Edad', 'url'=>array('admin')),
);
?>

    <h1>Update Edad <?php echo $model->Id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>