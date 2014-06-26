<?php
/* @var $this SexoController */
/* @var $model Sexo */
?>

<?php
$this->breadcrumbs=array(
	'Sexos'=>array('index'),
	$model->Id,
);

$this->menu=array(
	array('label'=>'List Sexo', 'url'=>array('index')),
	array('label'=>'Create Sexo', 'url'=>array('create')),
	array('label'=>'Update Sexo', 'url'=>array('update', 'id'=>$model->Id)),
	array('label'=>'Delete Sexo', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->Id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Sexo', 'url'=>array('admin')),
);
?>

<h1>View Sexo #<?php echo $model->Id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView',array(
    'htmlOptions' => array(
        'class' => 'table table-striped table-condensed table-hover',
    ),
    'data'=>$model,
    'attributes'=>array(
		'Id',
		'DescripcionSexo',
	),
)); ?>