<?php
/* @var $this CandidatoController */
/* @var $dataProvider CActiveDataProvider */
?>

<?php
$this->breadcrumbs=array(
	'Candidatos',
);
 ?> 
<div class="row-fluid">
    <div class="span9">
        <h1>Candidatos</h1>
    </div>
 <div class="span3"> 
     Menu Administrativo
     <?php
        echo TbHtml::stackedTabs(array(
	array('label'=>'Create Candidato','url'=>array('create')),
	array('label'=>'Manage Candidato','url'=>array('admin')),
        ));
     ?>
   

 </div>
</div>    



<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>