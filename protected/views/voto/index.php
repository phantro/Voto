<?php
/* @var $this VotoController */
/* @var $dataProvider CActiveDataProvider */
?>

<?php
$this->breadcrumbs=array(
	'Votos',
);
 ?> 
<div class="row-fluid">
    <div class="span9">
        <h1>Votos</h1>
    </div>
 <div class="span3"> 
     Menu Administrativo
     <?php
        echo TbHtml::stackedTabs(array(
	array('label'=>'Create Voto','url'=>array('create')),
	array('label'=>'Manage Voto','url'=>array('admin')),
        ));
     ?>
   

 </div>
</div>    



<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>