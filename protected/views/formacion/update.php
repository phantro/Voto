<?php
/* @var $this FormacionController */
/* @var $model Formacion */
?>

<?php
$this->breadcrumbs=array(
	'Formacions'=>array('index'),
	$model->Id=>array('view','id'=>$model->Id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Formacion', 'url'=>array('index')),
	array('label'=>'Create Formacion', 'url'=>array('create')),
	array('label'=>'View Formacion', 'url'=>array('view', 'id'=>$model->Id)),
	array('label'=>'Manage Formacion', 'url'=>array('admin')),
);
?>

    <h1>Update Formacion <?php echo $model->Id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>