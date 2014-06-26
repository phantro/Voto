<?php
/* @var $this DepartamentoController */
/* @var $data Departamento */
?>

<div class="view">

    	<b><?php echo CHtml::encode($data->getAttributeLabel('Id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->Id),array('view','id'=>$data->Id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('NombreDepartamento')); ?>:</b>
	<?php echo CHtml::encode($data->NombreDepartamento); ?>
	<br />


</div>