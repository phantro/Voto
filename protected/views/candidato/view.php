<?php
/* @var $this CandidatoController */
/* @var $model Candidato */
?>

<?php
$this->breadcrumbs=array(
	'Candidatos'=>array('index'),
	$model->Id,
);

$this->menu=array(
	array('label'=>'List Candidato', 'url'=>array('index')),
	array('label'=>'Create Candidato', 'url'=>array('create')),
	array('label'=>'Update Candidato', 'url'=>array('update', 'id'=>$model->Id)),
	array('label'=>'Delete Candidato', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->Id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Candidato', 'url'=>array('admin')),
);
?>

<h1>View Candidato #<?php echo $model->Id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView',array(
    'htmlOptions' => array(
        'class' => 'table table-striped table-condensed table-hover',
    ),
    'data'=>$model,
    'attributes'=>array(
		'Id',
		'Sigla',
		'NombreCandidato',
		'Foto',
		'LogoPartido',
		'SloganPartido',
	),
)); ?>