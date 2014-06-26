<?php
/* @var $this FormacionController */
/* @var $dataProvider CActiveDataProvider */
?>

<?php
$this->breadcrumbs=array(
	'Formacions',
);
 ?> 
<div class="row-fluid">
    <div class="span9">
        <h1>Formacions</h1>
    </div>
 <div class="span3"> 
     Menu Administrativo
     <?php
        echo TbHtml::stackedTabs(array(
	array('label'=>'Create Formacion','url'=>array('create')),
	array('label'=>'Manage Formacion','url'=>array('admin')),
        ));
     ?>
   

 </div>
</div>    



<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>