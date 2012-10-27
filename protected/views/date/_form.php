<div class="form">


<?php $form = $this->beginWidget('GxActiveForm', array(
	'id' => 'date-form',
	'enableAjaxValidation' => false,
));
?>

	<p class="note">
		Fields with <span class="required">*</span> are required.
	</p>

	<?php echo $form->errorSummary($model); ?>

		<div class="row">
		<?php echo $form->labelEx($model,'event_id'); ?>
		<?php echo $form->dropDownList($model, 'event_id', GxHtml::listDataEx(Event::model()->findAllAttributes(null, true))); ?>
		<?php echo $form->error($model,'event_id'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'start_date'); ?>
		<?php echo $form->textField($model, 'start_date', array('maxlength' => 45)); ?>
		<?php echo $form->error($model,'start_date'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'end_date'); ?>
		<?php echo $form->textField($model, 'end_date', array('maxlength' => 45)); ?>
		<?php echo $form->error($model,'end_date'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'start_time'); ?>
		<?php echo $form->textField($model, 'start_time', array('maxlength' => 45)); ?>
		<?php echo $form->error($model,'start_time'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'end_time'); ?>
		<?php echo $form->textField($model, 'end_time', array('maxlength' => 45)); ?>
		<?php echo $form->error($model,'end_time'); ?>
		</div><!-- row -->


<?php
echo GxHtml::submitButton('Save');
$this->endWidget();
?>
</div><!-- form -->