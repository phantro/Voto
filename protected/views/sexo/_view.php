<?php
/* @var $this SexoController */
/* @var $data Sexo */
?>

<div class="view">

    	<b><?php echo CHtml::encode($data->getAttributeLabel('Id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->Id),array('view','id'=>$data->Id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('DescripcionSexo')); ?>:</b>
	<?php echo CHtml::encode($data->DescripcionSexo); ?>
	<br />


</div>