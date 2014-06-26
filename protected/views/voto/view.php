<?php
/* @var $this VotoController */
/* @var $model Voto */
?>

<?php
$this->breadcrumbs=array(
	'Votos'=>array('index'),
	$model->Id,
);

$this->menu=array(
	array('label'=>'List Voto', 'url'=>array('index')),
	array('label'=>'Create Voto', 'url'=>array('create')),
	array('label'=>'Update Voto', 'url'=>array('update', 'id'=>$model->Id)),
	array('label'=>'Delete Voto', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->Id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Voto', 'url'=>array('admin')),
);
?>

<h1>View Voto #<?php echo $model->Id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView',array(
    'htmlOptions' => array(
        'class' => 'table table-striped table-condensed table-hover',
    ),
    'data'=>$model,
    'attributes'=>array(
		'Id',
		'Fecha',
		'Ip',
		'Navegador',
		'IdEdad',
		'IdProvincia',
		'IdFormacion',
		'IdSexo',
		'IdOcupacion',
		'IdCandidato',
	),
)); ?>