<?php
/* @var $this OcupacionController */
/* @var $data Ocupacion */
?>

<div class="view">

    	<b><?php echo CHtml::encode($data->getAttributeLabel('Id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->Id),array('view','id'=>$data->Id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('NombreOcupacion')); ?>:</b>
	<?php echo CHtml::encode($data->NombreOcupacion); ?>
	<br />


</div>