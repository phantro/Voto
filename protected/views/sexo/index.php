<?php
/* @var $this SexoController */
/* @var $dataProvider CActiveDataProvider */
?>

<?php
$this->breadcrumbs=array(
	'Sexos',
);
 ?> 
<div class="row-fluid">
    <div class="span9">
        <h1>Sexos</h1>
    </div>
 <div class="span3"> 
     Menu Administrativo
     <?php
        echo TbHtml::stackedTabs(array(
	array('label'=>'Create Sexo','url'=>array('create')),
	array('label'=>'Manage Sexo','url'=>array('admin')),
        ));
     ?>
   

 </div>
</div>    



<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>