<?php
/* @var $this VotoController */
/* @var $model Voto */

?>

<div class="row-fluid">
    <div class="span9">
<?php
$this->breadcrumbs=array(
	'Votos'=>array('index'),
	'Manage',
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#voto-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Votos</h1>

<p>
    You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>
        &lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button btn')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->
</div>
        <div class="span3">
        Menu Administrativo
        <?php
        echo TbHtml::stackedTabs(array(
	array('label'=>'List Voto', 'url'=>array('index')),
	array('label'=>'Create Voto', 'url'=>array('create')),
        ));
        ?>
        </div>
</div>
<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'voto-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'Id',
		'Fecha',
		'Ip',
		'Navegador',
		'IdEdad',
		'IdProvincia',
		/*
		'IdFormacion',
		'IdSexo',
		'IdOcupacion',
		'IdCandidato',
		*/
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
		),
	),
)); ?>