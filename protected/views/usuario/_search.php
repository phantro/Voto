<?php
/* @var $this UsuarioController */
/* @var $model Usuario */
/* @var $form CActiveForm */
?>

<div class="wide form">

    <?php
    $form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
        'action' => Yii::app()->createUrl($this->route),
        'htmlOptions' => array('class' => 'well'),
        'method' => 'get',
            ));
    ?>

    <?php echo $form->textFieldControlGroup($model, 'id', array('span' => 5, 'maxlength' => 10)); ?>

    <?php echo $form->textFieldControlGroup($model, 'username', array('span' => 5, 'maxlength' => 128)); ?>

    <?php echo $form->textFieldControlGroup($model, 'email', array('span' => 5, 'maxlength' => 128)); ?>

    <?php echo $form->textAreaControlGroup($model, 'session', array('rows' => 6, 'span' => 8)); ?>

    <?php echo $form->textAreaControlGroup($model, 'profile', array('rows' => 6, 'span' => 8)); ?>

    <?php echo $form->textFieldControlGroup($model, 'nombre', array('span' => 5, 'maxlength' => 128)); ?>

    <?php echo $form->textFieldControlGroup($model, 'apellido', array('span' => 5, 'maxlength' => 128)); ?>

    <?php echo $form->textFieldControlGroup($model, 'telefono', array('span' => 5, 'maxlength' => 8)); ?>

    <?php echo $form->textFieldControlGroup($model, 'celular', array('span' => 5, 'maxlength' => 8)); ?>

    <?php echo $form->textFieldControlGroup($model, 'acceso', array('span' => 5, 'maxlength' => 10)); ?>

    <?php echo $form->textFieldControlGroup($model, 'estado', array('span' => 5, 'maxlength' => 10)); ?>

    <?php echo $form->textFieldControlGroup($model, 'fecha', array('span' => 5)); ?>

    <?php echo $form->textFieldControlGroup($model, 'grupo', array('span' => 5, 'maxlength' => 128)); ?>

    <?php echo $form->textFieldControlGroup($model, 'verficado', array('span' => 5)); ?>

    <?php echo $form->textFieldControlGroup($model, 'ip', array('span' => 5, 'maxlength' => 15)); ?>

    <?php echo $form->textFieldControlGroup($model, 'modificado', array('span' => 5)); ?>

    <?php
    echo TbHtml::formActions(array(
        TbHtml::submitButton('Search', array(
            'color' => TbHtml::BUTTON_COLOR_PRIMARY,
            'size' => TbHtml::BUTTON_SIZE_LARGE,
        )),
        TbHtml::resetButton('Reset', array(
            'size' => TbHtml::BUTTON_SIZE_LARGE,
        )),
    ));
    ?>
    <?php $this->endWidget(); ?>

</div><!-- search-form -->