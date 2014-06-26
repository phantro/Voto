<?php
/* @var $this VotoController */
/* @var $data Voto */
?>

<div class="view">

    	<b><?php echo CHtml::encode($data->getAttributeLabel('Id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->Id),array('view','id'=>$data->Id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Fecha')); ?>:</b>
	<?php echo CHtml::encode($data->Fecha); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Ip')); ?>:</b>
	<?php echo CHtml::encode($data->Ip); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Navegador')); ?>:</b>
	<?php echo CHtml::encode($data->Navegador); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('IdEdad')); ?>:</b>
	<?php echo CHtml::encode($data->IdEdad); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('IdProvincia')); ?>:</b>
	<?php echo CHtml::encode($data->IdProvincia); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('IdFormacion')); ?>:</b>
	<?php echo CHtml::encode($data->IdFormacion); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('IdSexo')); ?>:</b>
	<?php echo CHtml::encode($data->IdSexo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('IdOcupacion')); ?>:</b>
	<?php echo CHtml::encode($data->IdOcupacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('IdCandidato')); ?>:</b>
	<?php echo CHtml::encode($data->IdCandidato); ?>
	<br />

	*/ ?>

</div>