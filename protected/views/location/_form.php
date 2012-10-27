<div class="form">


<?php $form = $this->beginWidget('GxActiveForm', array(
	'id' => 'location-form',
	'enableAjaxValidation' => false,
));
?>

	<p class="note">
		Fields with <span class="required">*</span> are required.
	</p>

	<?php echo $form->errorSummary($model); ?>

		<div class="row">
		<?php echo $form->labelEx($model,'address'); ?>
		<?php echo $form->textArea($model, 'address'); ?>
		<?php echo $form->error($model,'address'); ?>
		</div><!-- row -->

		<label><?php echo GxHtml::encode($model->getRelationLabel('events')); ?></label>
		<?php echo $form->checkBoxList($model, 'events', GxHtml::encodeEx(GxHtml::listDataEx(Event::model()->findAllAttributes(null, true)), false, true)); ?>
		<label><?php echo GxHtml::encode($model->getRelationLabel('organizations')); ?></label>
		<?php echo $form->checkBoxList($model, 'organizations', GxHtml::encodeEx(GxHtml::listDataEx(Organization::model()->findAllAttributes(null, true)), false, true)); ?>

<?php
echo GxHtml::submitButton('Save');
$this->endWidget();
?>
</div><!-- form -->