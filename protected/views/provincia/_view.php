<?php
/* @var $this ProvinciaController */
/* @var $data Provincia */
?>

<div class="view">

    	<b><?php echo CHtml::encode($data->getAttributeLabel('Id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->Id),array('view','id'=>$data->Id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('NombreProvincia')); ?>:</b>
	<?php echo CHtml::encode($data->NombreProvincia); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('IdDepartamento')); ?>:</b>
	<?php echo CHtml::encode($data->IdDepartamento); ?>
	<br />


</div>