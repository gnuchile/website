<div class="form">


<?php $form = $this->beginWidget('GxActiveForm', array(
	'id' => 'event-type-form',
	'enableAjaxValidation' => false,
));
?>

	<p class="note">
		Fields with <span class="required">*</span> are required.
	</p>

	<?php echo $form->errorSummary($model); ?>

		<div class="row">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model, 'name', array('maxlength' => 45)); ?>
		<?php echo $form->error($model,'name'); ?>
		</div><!-- row -->

		<label><?php echo GxHtml::encode($model->getRelationLabel('events')); ?></label>
		<?php echo $form->checkBoxList($model, 'events', GxHtml::encodeEx(GxHtml::listDataEx(Event::model()->findAllAttributes(null, true)), false, true)); ?>

<?php
echo GxHtml::submitButton('Save');
$this->endWidget();
?>
</div><!-- form -->