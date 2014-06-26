<?php
/* @var $this FormacionController */
/* @var $model Formacion */
?>

<?php
$this->breadcrumbs=array(
	'Formacions'=>array('index'),
	$model->Id,
);

$this->menu=array(
	array('label'=>'List Formacion', 'url'=>array('index')),
	array('label'=>'Create Formacion', 'url'=>array('create')),
	array('label'=>'Update Formacion', 'url'=>array('update', 'id'=>$model->Id)),
	array('label'=>'Delete Formacion', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->Id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Formacion', 'url'=>array('admin')),
);
?>

<h1>View Formacion #<?php echo $model->Id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView',array(
    'htmlOptions' => array(
        'class' => 'table table-striped table-condensed table-hover',
    ),
    'data'=>$model,
    'attributes'=>array(
		'Id',
		'NombreFormacion',
	),
)); ?>