<?php
/* @var $this VotoController */
/* @var $model Voto */
/* @var $form TbActiveForm */
?>

<div class="form">

    <?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'id'=>'voto-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

    <p class="help-block">Fields with <span class="required">*</span> are required.</p>

    <?php echo $form->errorSummary($model); ?>

            <?php echo $form->textFieldControlGroup($model,'Fecha',array('span'=>5)); ?>

            <?php echo $form->textFieldControlGroup($model,'Ip',array('span'=>5,'maxlength'=>12)); ?>

            <?php echo $form->textFieldControlGroup($model,'Navegador',array('span'=>5,'maxlength'=>20)); ?>

            <?php echo $form->textFieldControlGroup($model,'IdEdad',array('span'=>5,'maxlength'=>2)); ?>

            <?php echo $form->textFieldControlGroup($model,'IdProvincia',array('span'=>5,'maxlength'=>5)); ?>

            <?php echo $form->textFieldControlGroup($model,'IdFormacion',array('span'=>5,'maxlength'=>2)); ?>

            <?php echo $form->textFieldControlGroup($model,'IdSexo',array('span'=>5,'maxlength'=>10)); ?>

            <?php echo $form->textFieldControlGroup($model,'IdOcupacion',array('span'=>5,'maxlength'=>2)); ?>

            <?php echo $form->textFieldControlGroup($model,'IdCandidato',array('span'=>5,'maxlength'=>2)); ?>

        <div class="form-actions">
        <?php echo TbHtml::submitButton($model->isNewRecord ? 'Create' : 'Save',array(
		    'color'=>TbHtml::BUTTON_COLOR_PRIMARY,
		    'size'=>TbHtml::BUTTON_SIZE_LARGE,
		)); ?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- form -->