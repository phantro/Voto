<?php
/* @var $this SexoController */
/* @var $model Sexo */
?>

<?php
$this->breadcrumbs=array(
	'Sexos'=>array('index'),
	$model->Id=>array('view','id'=>$model->Id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Sexo', 'url'=>array('index')),
	array('label'=>'Create Sexo', 'url'=>array('create')),
	array('label'=>'View Sexo', 'url'=>array('view', 'id'=>$model->Id)),
	array('label'=>'Manage Sexo', 'url'=>array('admin')),
);
?>

    <h1>Update Sexo <?php echo $model->Id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>