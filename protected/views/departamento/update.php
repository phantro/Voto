<?php
/* @var $this DepartamentoController */
/* @var $model Departamento */
?>

<?php
$this->breadcrumbs=array(
	'Departamentos'=>array('index'),
	$model->Id=>array('view','id'=>$model->Id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Departamento', 'url'=>array('index')),
	array('label'=>'Create Departamento', 'url'=>array('create')),
	array('label'=>'View Departamento', 'url'=>array('view', 'id'=>$model->Id)),
	array('label'=>'Manage Departamento', 'url'=>array('admin')),
);
?>

    <h1>Update Departamento <?php echo $model->Id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>