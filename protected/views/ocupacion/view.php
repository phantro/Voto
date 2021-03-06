<?php
/* @var $this OcupacionController */
/* @var $model Ocupacion */
?>

<?php
$this->breadcrumbs=array(
	'Ocupacions'=>array('index'),
	$model->Id,
);

$this->menu=array(
	array('label'=>'List Ocupacion', 'url'=>array('index')),
	array('label'=>'Create Ocupacion', 'url'=>array('create')),
	array('label'=>'Update Ocupacion', 'url'=>array('update', 'id'=>$model->Id)),
	array('label'=>'Delete Ocupacion', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->Id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Ocupacion', 'url'=>array('admin')),
);
?>

<h1>View Ocupacion #<?php echo $model->Id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView',array(
    'htmlOptions' => array(
        'class' => 'table table-striped table-condensed table-hover',
    ),
    'data'=>$model,
    'attributes'=>array(
		'Id',
		'NombreOcupacion',
	),
)); ?>