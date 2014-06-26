<?php
/* @var $this UsuarioController */
/* @var $model Usuario */
?>

<div class="row-fluid">
    <div class="span9">
        <?php
        $this->breadcrumbs = array(
            'Usuarios' => array('index'),
            'Manage',
        );
        echo 'el tipo de usuario es: ' . Yii::app()->user->getState('tipo');
        Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#usuario-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
        ?>

        <h1>Manage Usuarios</h1>

        <p>
            You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>
                &lt;&gt;</b>
            or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
        </p>

        <?php echo CHtml::link('Advanced Search', '#', array('class' => 'search-button btn')); ?>
        <div class="search-form" style="display:none">
            <?php
            $this->renderPartial('_search', array(
                'model' => $model,
            ));
            ?>
        </div><!-- search-form -->
    </div>
    <div class="span3">
        Menu Administrativo
        <?php
        echo TbHtml::stackedTabs(array(
            array('label' => 'List Usuario', 'url' => array('index')),
            array('label' => 'Create Usuario', 'url' => array('create')),
        ));
        ?>
    </div>
</div>
<a href="report">aqui</a>

<?php
$this->widget('bootstrap.widgets.TbGridView', array(
    'id' => 'usuario-grid',
    'dataProvider' => $model->search(),
    'filter' => $model,
    'columns' => array(
        'id',
        'username',
        //'password',
        'email',
        'session',
        //'profile',
        'nombre',
        'apellido',
        'telefono',
        'celular',
        'verficado',
        'acceso',
        /*
          'nombre',
          'apellido',
          'telefono',
          'celular',
          'acceso',
          'estado',
          'fecha',
          'grupo',
          'verficado',
          'ip',
          'modificado',
         */
        array(
            'class' => 'bootstrap.widgets.TbButtonColumn',
        ),
    ),
));
?>