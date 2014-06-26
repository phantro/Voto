<?php
/* @var $this SiteController */
/* @var $model ContactForm */
/* @var $form CActiveForm */

$this->pageTitle=Yii::app()->name . ' - Contact Us';

?>

<h1>Contact Us</h1>

<?php if(Yii::app()->user->hasFlash('contact')) ?>

<div class="flash-success">
	<?php echo Yii::app()->user->getFlash('contact'); ?>
</div>



<p>
If you have business inquiries or other questions, please fill out the following form to contact us. Thank you.
</p>

<div class="wpcf7" id="wpcf7-f630-p631-o1">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'contact-form',
        
        //'novalidate'=>'novalidate',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
    'htmlOptions' => array(
        'class'=>'wpcf7-form',
        'novalidate'=>'novalidate',
    ),
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<span class="wpcf7-form-control-wrap your-name">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('aria-invalid'=>'false','aria-required'=>'true','size'=>'40','class'=>'wpcf7-form-control wpcf7-text wpcf7-validates-as-required')); ?>
		<?php echo $form->error($model,'name'); ?>	

        </span>
        <span class="wpcf7-form-control-wrap your-email">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('aria-invalid'=>'false','aria-required'=>'true','size'=>'40','class'=>'wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email')); ?>
		<?php echo $form->error($model,'email'); ?>
	
	</span>
        <span class="wpcf7-form-control-wrap your-name">
		<?php echo $form->labelEx($model,'subject'); ?>
		<?php echo $form->textField($model,'subject',array('aria-invalid'=>'false','class'=>'wpcf7-form-control wpcf7-text','size'=>40,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'subject'); ?>
	
        </span>
        <span class="wpcf7-form-control-wrap your-name">
		<?php echo $form->labelEx($model,'body'); ?>
		<?php echo $form->textArea($model,'body',array('aria-invalid'=>'false','class'=>'wpcf7-form-control wpcf7-textarea' ,'rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'body'); ?>
	</span>
	<?php if(CCaptcha::checkRequirements()): ?>
	
		<?php echo $form->labelEx($model,'verifyCode'); ?>
		<div>
		<?php $this->widget('CCaptcha'); ?>
		<?php echo $form->textField($model,'verifyCode'); ?>
		</div>
		<div class="hint">Please enter the letters as they are shown in the image above.
		<br/>Letters are not case-sensitive.</div>
		<?php echo $form->error($model,'verifyCode'); ?>
	
	<?php endif; ?>

	
		<?php echo CHtml::submitButton('Submit'); ?>
	

<?php $this->endWidget(); ?>



 </div>  
