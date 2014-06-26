<?php
/* @var $this EdadController */
/* @var $model Edad */
?>

<?php
$this->breadcrumbs=array(
	'Edads'=>array('index'),
	$model->Id,
);

$this->menu=array(
	array('label'=>'List Edad', 'url'=>array('index')),
	array('label'=>'Create Edad', 'url'=>array('create')),
	array('label'=>'Update Edad', 'url'=>array('update', 'id'=>$model->Id)),
	array('label'=>'Delete Edad', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->Id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Edad', 'url'=>array('admin')),
);
?>

<h1>View Edad #<?php echo $model->Id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView',array(
    'htmlOptions' => array(
        'class' => 'table table-striped table-condensed table-hover',
    ),
    'data'=>$model,
    'attributes'=>array(
		'Id',
		'RangoEdad',
	),
)); ?>