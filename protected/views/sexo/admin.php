<?php
/* @var $this SexoController */
/* @var $model Sexo */

?>

<div class="row-fluid">
    <div class="span9">
<?php
$this->breadcrumbs=array(
	'Sexos'=>array('index'),
	'Manage',
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#sexo-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Sexos</h1>

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
	array('label'=>'List Sexo', 'url'=>array('index')),
	array('label'=>'Create Sexo', 'url'=>array('create')),
        ));
        ?>
        </div>
</div>
<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'sexo-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'Id',
		'DescripcionSexo',
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
		),
	),
)); ?>