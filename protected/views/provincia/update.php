<?php
/* @var $this ProvinciaController */
/* @var $model Provincia */
?>

<?php
$this->breadcrumbs=array(
	'Provincias'=>array('index'),
	$model->Id=>array('view','id'=>$model->Id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Provincia', 'url'=>array('index')),
	array('label'=>'Create Provincia', 'url'=>array('create')),
	array('label'=>'View Provincia', 'url'=>array('view', 'id'=>$model->Id)),
	array('label'=>'Manage Provincia', 'url'=>array('admin')),
);
?>

    <h1>Update Provincia <?php echo $model->Id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>