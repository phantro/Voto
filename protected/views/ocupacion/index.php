<?php
/* @var $this OcupacionController */
/* @var $dataProvider CActiveDataProvider */
?>

<?php
$this->breadcrumbs=array(
	'Ocupacions',
);
 ?> 
<div class="row-fluid">
    <div class="span9">
        <h1>Ocupacions</h1>
    </div>
 <div class="span3"> 
     Menu Administrativo
     <?php
        echo TbHtml::stackedTabs(array(
	array('label'=>'Create Ocupacion','url'=>array('create')),
	array('label'=>'Manage Ocupacion','url'=>array('admin')),
        ));
     ?>
   

 </div>
</div>    



<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>