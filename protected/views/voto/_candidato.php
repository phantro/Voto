<?php
/* @var $this _candidato */
/* @var $data Candidato */
/* @var $form TbActiveForm */
?>


<li class="span3">
    <div class="thumbnail">
        <img src="<?php echo Yii::app()->baseUrl.'/images/'.CHtml::encode($data->Foto); ?>" alt="Candidatos Elecciones Presidenciales Bolivia" />
        <div class="caption">
            <h3><?php echo CHtml::encode($data->NombreCandidato); ?></h3>
            <p><?php echo CHtml::encode($data->SloganPartido); ?></p>
            <span id="Voto_IdCandidato">
                <label class="casilla">
                    <input class="cuadro" data-icon="X" value="<?php echo CHtml::encode($data->Id); ?>" id="Voto_IdCandidato_0" type="radio" name="Voto[IdCandidato]" /> 
                </label>
            </span>
        </div>
    </div>
</li>                    