<?php
/**
 * The following variables are available in this template:
 * - $this: the BootstrapCode object
 */
?>
<?php echo "<?php\n"; ?>
/* @var $this <?php echo $this->getControllerClass(); ?> */
/* @var $dataProvider CActiveDataProvider */
<?php echo "?>\n"; ?>

<?php
echo "<?php\n";
$label = $this->pluralize($this->class2name($this->modelClass));
echo "\$this->breadcrumbs=array(
	'$label',
);\n ?> \n";
?>
<div class="row-fluid">
    <div class="span9">
        <h1><?php
            
            echo $label;
       
           ?></h1>
    </div>
 <div class="span3"> 
     Menu Administrativo
     <?php
            echo "<?php\n";
     ?>
        echo TbHtml::stackedTabs(array(
	array('label'=>'Create <?php echo $this->modelClass; ?>','url'=>array('create')),
	array('label'=>'Manage <?php echo $this->modelClass; ?>','url'=>array('admin')),
        ));
     <?php
            echo "?>\n";
     ?>   

 </div>
</div>    



<?php echo "<?php"; ?> $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>