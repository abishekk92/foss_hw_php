<?php
$this->pageTitle=Yii::app()->name . 'Registration';
$this->breadcrumbs=array(
	'Staff-Registration Form',
);
?>

<h1>Please fill in the form</h1>

<?php if(Yii::app()->user->hasFlash('contact')): ?>

<div class="flash-success">
	<?php echo Yii::app()->user->getFlash('contact'); ?>
</div>

<?php else: ?>


<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'contact-form',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name'); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email'); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mobile'); ?>
		<?php echo $form->textField($model,'mobile'); ?>
		<?php echo $form->error($model,'mobile'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'designation'); ?>
		<?php echo $form->textField($model,'designation'); ?>
		<?php echo $form->error($model,'designation'); ?>
	</div>
      

       <div class="row">
           <?php echo $form->labelEx($model,'id');?>
 	   <?php echo $form->textField($model,'id'); ?>
	   <?php echo $form->error($model,'id');?>
        </div>

      <div class="row">
 	<?php echo $form->labelEx($model,'academic'); ?>
        <?php echo $form->textField($model,'academic'); ?>
	<?php echo $form->error($model,'academic'); ?>
	</div>
  <div class="row">
	<?php echo $form->labelEx($model,'branch');?>
	<?php echo $form->textField($model,'branch');?>
	<?php echo $form->error($model,'branch');?>
 </div>
<div class="row">
 <?php echo $form->labelEx($model,'year');?>
 <?php echo $form->textField($model,'year');?>
 <?php echo $from ->error($model,'year'); ?>
</div>

	<?php if(CCaptcha::checkRequirements()): ?>
	<div class="row">
		<?php echo $form->labelEx($model,'verifyCode'); ?>
		<div>
		<?php $this->widget('CCaptcha'); ?>
		<?php echo $form->textField($model,'verifyCode'); ?>
		</div>
		<div class="hint">Please enter the letters as they are shown in the image above.
		<br/>Letters are not case-sensitive.</div>
		<?php echo $form->error($model,'verifyCode'); ?>
	</div>
	<?php endif; ?>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Submit'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->

<?php endif; ?>
