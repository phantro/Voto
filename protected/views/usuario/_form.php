<?php
/* @var $this UsuarioController */
/* @var $model Usuario */
/* @var $form TbActiveForm */
?>

<div class="form">

    <?php
    $form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
        'id' => 'usuario-form',
        'htmlOptions' => array('class' => 'well'),
        // Please note: When you enable ajax validation, make sure the corresponding
        // controller action is handling ajax validation correctly.
        // There is a call to performAjaxValidation() commented in generated controller code.
        // See class documentation of CActiveForm for details on this.
        'enableAjaxValidation' => false,
            ));
    ?>

    <p class="help-block">Fields with <span class="required">*</span> are required.</p>

    <?php echo $form->errorSummary($model); ?>

    <?php echo $form->textFieldControlGroup($model, 'username', array('span' => 5, 'maxlength' => 128)); ?>

    <?php echo $form->textFieldControlGroup($model, 'password', array('span' => 5, 'maxlength' => 128, 'required'=>true)); ?>

    <?php echo $form->textFieldControlGroup($model, 'email', array('span' => 5, 'maxlength' => 128)); ?>

    <?php echo $form->textFieldControlGroup($model, 'nombre', array('span' => 5, 'maxlength' => 128)); ?>

    <?php echo $form->textFieldControlGroup($model, 'apellido', array('span' => 5, 'maxlength' => 128)); ?>

    <?php echo $form->textFieldControlGroup($model, 'telefono', array('span' => 5, 'maxlength' => 8)); ?>

    <?php echo $form->textFieldControlGroup($model, 'celular', array('span' => 5, 'maxlength' => 8)); ?>

    <?php echo $form->textFieldControlGroup($model, 'estado', array('span' => 5, 'maxlength' => 10)); ?>

    <?php echo $form->textFieldControlGroup($model, 'grupo', array('span' => 5, 'maxlength' => 128)); ?>

        <?php echo $form->labelEx($model, 'verficado'); ?>

    <?php echo $form->dropDownList($model, 'verficado', Usuario::getverifi(), array('span' => 5)); ?>

    <?php echo $form->error($model, 'verficado'); ?>        

    <?php echo $form->labelEx($model, 'acceso'); ?>

    <?php echo $form->dropDownList($model, 'acceso', Usuario::getprivilegio(), array('span' => 5)); ?>

    <?php echo $form->error($model, 'acceso'); ?>

    <br/>

    <?php if (CCaptcha::checkRequirements()): ?>

        <?php echo $form->labelEx($model, 'verifyCode'); ?>
        <div>

            <?php $this->widget('CCaptcha'); ?>

            <?php echo $form->textField($model, 'verifyCode'); ?>
        </div>
        <div class="hint">Please enter the letters as they are shown in the image above.
            <br/>Letters are not case-sensitive.</div>
        <?php echo $form->error($model, 'verifyCode'); ?>

    <?php endif; ?>    

    <?php
    echo TbHtml::formActions(array(
        TbHtml::submitButton($model->isNewRecord ? 'Create' : 'Save', array(
            'color' => TbHtml::BUTTON_COLOR_PRIMARY,
            'size' => TbHtml::BUTTON_SIZE_LARGE,
        )),
        TbHtml::resetButton('Reset', array(
            'size' => TbHtml::BUTTON_SIZE_LARGE,
        )),
    ));
    ?>

    <?php $this->endWidget(); ?>

</div><!-- form -->