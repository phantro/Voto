<?php
/* @var $this ProvinciaController */
/* @var $model Provincia */
?>

<?php
$this->breadcrumbs=array(
	'Provincias'=>array('index'),
	$model->Id,
);

$this->menu=array(
	array('label'=>'List Provincia', 'url'=>array('index')),
	array('label'=>'Create Provincia', 'url'=>array('create')),
	array('label'=>'Update Provincia', 'url'=>array('update', 'id'=>$model->Id)),
	array('label'=>'Delete Provincia', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->Id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Provincia', 'url'=>array('admin')),
);
?>

<h1>View Provincia #<?php echo $model->Id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView',array(
    'htmlOptions' => array(
        'class' => 'table table-striped table-condensed table-hover',
    ),
    'data'=>$model,
    'attributes'=>array(
		'Id',
		'NombreProvincia',
		'IdDepartamento',
	),
)); ?>