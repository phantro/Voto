<?php
/* @var $this EdadController */
/* @var $dataProvider CActiveDataProvider */
?>

<?php
$this->breadcrumbs=array(
	'Edads',
);
 ?> 
<div class="row-fluid">
    <div class="span9">
        <h1>Edads</h1>
    </div>
 <div class="span3"> 
     Menu Administrativo
     <?php
        echo TbHtml::stackedTabs(array(
	array('label'=>'Create Edad','url'=>array('create')),
	array('label'=>'Manage Edad','url'=>array('admin')),
        ));
     ?>
   

 </div>
</div>    



<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>