<?php
/* @var $this EdadController */
/* @var $data Edad */
?>

<div class="view">

    	<b><?php echo CHtml::encode($data->getAttributeLabel('Id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->Id),array('view','id'=>$data->Id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('RangoEdad')); ?>:</b>
	<?php echo CHtml::encode($data->RangoEdad); ?>
	<br />


</div>