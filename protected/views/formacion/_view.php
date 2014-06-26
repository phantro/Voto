<?php
/* @var $this FormacionController */
/* @var $data Formacion */
?>

<div class="view">

    	<b><?php echo CHtml::encode($data->getAttributeLabel('Id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->Id),array('view','id'=>$data->Id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('NombreFormacion')); ?>:</b>
	<?php echo CHtml::encode($data->NombreFormacion); ?>
	<br />


</div>