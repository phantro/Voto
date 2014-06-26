<?php
/* @var $this VotoController */
/* @var $model Voto */
/* @var $form TbActiveForm */
?>
<br/>
<div class="row-fluid">  
    <div class="span12" align="center">
        <img src="<?php echo Yii::app()->baseUrl . '/images/banner.jpg'; ?>" alt="Banner Elecciones Presidenciales Bolivia" />
    </div>
</div>
<br/>
<div class="row-fluid">  
    <div class="span12" align="center">
        <?php
        $this->widget('application.extensions.addThis.addThis', array(
            'id' => 'addThis',
            'scriptUrl' => 'http://s7.addthis.com/js/300/addthis_widget.js#pubid=ra-52fd523b198099c0',
            'showDefaultButton' => false,
            'showDefaultButtonCaption' => true,
            'htmlOptions' => array('class' => 'addthis_toolbox addthis_default_style'),
            'showServices' => array('true'),
            'showServicesTitle' => true,
            'config' => array('ui_language' => 'es'),
            'share' => array(),
                )
        );
        ?>
    </div>
</div>
<br/>
<div class="form">

    <?php
    $form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
        'id' => 'voto-form',
        // Please note: When you enable ajax validation, make sure the corresponding
        // controller action is handling ajax validation correctly.
        // There is a call to performAjaxValidation() commented in generated controller code.
        // See class documentation of CActiveForm for details on this.
        'enableAjaxValidation' => false,
            ));
    ?>

    <?php echo $form->errorSummary($model); ?>

    <br/>
    <?php echo TbHtml::label('1.- Elija un Candidato a la Presidencia', 'candidato'); ?>
    <ul align="center" class="thumbnails">
        <?php
        $this->widget('zii.widgets.CListView', array(
            'dataProvider' => $datoCandidato,
            'itemView' => '_candidato',
            'ajaxType' => 'GET',
            'ajaxUpdate' => false,
            'updateSelector' => true,
        ));
        ?>
    </ul>

    <h3>Rellene sus Datos Personales</h3>

    <?php echo TbHtml::label('2.- Seleccione su Rango de Edad', 'IdEdad'); ?>

    <?php echo TbHtml::radioButtonList('Voto[IdEdad]', '', CHtml::listData(Edad::model()->findAll(), 'Id', 'RangoEdad')); ?>

    <?php echo TbHtml::label('3.- Seleccione su sexo', 'IdSexo'); ?>

    <?php echo TbHtml::radioButtonList('Voto[IdSexo]', '', CHtml::listData(Sexo::model()->findAll(), 'Id', 'DescripcionSexo')); ?>

    <?php echo TbHtml::label('4.- Seleccione su departamento y Provincia', 'IdDepartamento'); ?>

    <?php
    $htmlOptions = array(
        "ajax" => array(
            "url" => $this->createUrl("provinciaDepartamento"),
            "type" => "POST",
            "update" => "#Voto_IdProvincia",
        ),
    );
    ?>

    <?php echo $form->dropDownListControlGroup($model, 'IdDepartamento', $model->getDepartamento(), $htmlOptions); ?>

    <?php echo $form->dropDownListControlGroup($model, 'IdProvincia', $model->getProvincia()); ?>

    <?php echo $form->dropDownListControlGroup($model, 'IdOcupacion', CHtml::listData(Ocupacion::model()->findAll(), 'Id', 'NombreOcupacion'), array('empty' => 'Seleccione su Ocupación')); ?>

    <?php echo $form->dropDownListControlGroup($model, 'IdFormacion', CHtml::listData(Formacion::model()->findAll(), 'Id', 'NombreFormacion'), array('empty' => 'Seleccione su Formación')); ?>

    <br/>

    <?php if (CCaptcha::checkRequirements()): ?>

        <?php echo $form->labelEx($model, 'codigoVerificacion'); ?>
        <div>

            <?php $this->widget('CCaptcha'); ?>

            <?php echo $form->textField($model, 'codigoVerificacion'); ?>
        </div>
        <div class="hint">Por favor introduce las letras tal como se muestran en la imagen de arriba. 
            <br/>Las letras no distinguen entre mayúsculas y minúsculas.</div>
        <?php echo $form->error($model, 'codigoVerificacion'); ?>

    <?php endif; ?>    

    <div class="form-actions">
        <?php
        echo TbHtml::submitButton($model->isNewRecord ? 'Enviar Votación' : 'Save', array(
            'color' => TbHtml::BUTTON_COLOR_SUCCESS,
            'size' => TbHtml::BUTTON_SIZE_LARGE,
        ));
        ?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- form -->
<div class="row-fluid">  
    <div class="span12" align="center">
        <?php
        $this->widget('application.extensions.addThis.addThis', array(
            'id' => 'addThis',
            'scriptUrl' => 'http://s7.addthis.com/js/300/addthis_widget.js#pubid=ra-52fd523b198099c0',
            'showDefaultButton' => true,
            'showDefaultButtonCaption' => true,
            'htmlOptions' => array('class' => 'addthis_toolbox addthis_default_style addthis_32x32_style'),
            'showServices' => array('facebook', 'google_plusone_share', 'twitter', 'google', 'blogger', 'textme', 'hotmail', 'mailto', 'gmail', 'email', 'linkedin'),
            'showServicesTitle' => false,
            'config' => array('ui_language' => 'es'),
            'share' => array(),
                )
        );
        ?>
    </div>
</div>
<br/>