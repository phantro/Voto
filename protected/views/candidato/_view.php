<?php
/* @var $this CandidatoController */
/* @var $data Candidato */
?>

<div class="view">

    	<b><?php echo CHtml::encode($data->getAttributeLabel('Id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->Id),array('view','id'=>$data->Id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Sigla')); ?>:</b>
	<?php echo CHtml::encode($data->Sigla); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('NombreCandidato')); ?>:</b>
	<?php echo CHtml::encode($data->NombreCandidato); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Foto')); ?>:</b>
	<?php echo CHtml::encode($data->Foto); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('LogoPartido')); ?>:</b>
	<?php echo CHtml::encode($data->LogoPartido); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('SloganPartido')); ?>:</b>
	<?php echo CHtml::encode($data->SloganPartido); ?>
	<br />


</div>