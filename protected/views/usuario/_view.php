<?php
/* @var $this UsuarioController */
/* @var $data Usuario */
?>

<div class="view">

    <b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
    <?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id' => $data->id)); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('username')); ?>:</b>
    <?php echo CHtml::encode($data->username); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('email')); ?>:</b>
    <?php echo CHtml::encode($data->email); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('nombre')); ?>:</b>
    <?php echo CHtml::encode($data->nombre); ?>
    <br />

    <?php /*
      <b><?php echo CHtml::encode($data->getAttributeLabel('apellido')); ?>:</b>
      <?php echo CHtml::encode($data->apellido); ?>
      <br />

      <b><?php echo CHtml::encode($data->getAttributeLabel('telefono')); ?>:</b>
      <?php echo CHtml::encode($data->telefono); ?>
      <br />

      <b><?php echo CHtml::encode($data->getAttributeLabel('celular')); ?>:</b>
      <?php echo CHtml::encode($data->celular); ?>
      <br />

      <b><?php echo CHtml::encode($data->getAttributeLabel('acceso')); ?>:</b>
      <?php echo CHtml::encode($data->acceso); ?>
      <br />

      <b><?php echo CHtml::encode($data->getAttributeLabel('estado')); ?>:</b>
      <?php echo CHtml::encode($data->estado); ?>
      <br />

      <b><?php echo CHtml::encode($data->getAttributeLabel('fecha')); ?>:</b>
      <?php echo CHtml::encode($data->fecha); ?>
      <br />

      <b><?php echo CHtml::encode($data->getAttributeLabel('grupo')); ?>:</b>
      <?php echo CHtml::encode($data->grupo); ?>
      <br />

      <b><?php echo CHtml::encode($data->getAttributeLabel('verficado')); ?>:</b>
      <?php echo CHtml::encode($data->verficado); ?>
      <br />

      <b><?php echo CHtml::encode($data->getAttributeLabel('ip')); ?>:</b>
      <?php echo CHtml::encode($data->ip); ?>
      <br />

      <b><?php echo CHtml::encode($data->getAttributeLabel('modificado')); ?>:</b>
      <?php echo CHtml::encode($data->modificado); ?>
      <br />

     */ ?>
    <hr id="horizontalrule">
</div>