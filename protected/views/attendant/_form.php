<div class="form">


<?php $form = $this->beginWidget('GxActiveForm', array(
	'id' => 'attendant-form',
	'enableAjaxValidation' => false,
));
?>

	<p class="note">
		Fields with <span class="required">*</span> are required.
	</p>

	<?php echo $form->errorSummary($model); ?>

		<div class="row">
		<?php echo $form->labelEx($model,'person_id'); ?>
		<?php echo $form->dropDownList($model, 'person_id', GxHtml::listDataEx(Person::model()->findAllAttributes(null, true))); ?>
		<?php echo $form->error($model,'person_id'); ?>
		</div><!-- row -->

		<label><?php echo GxHtml::encode($model->getRelationLabel('events')); ?></label>
		<?php echo $form->checkBoxList($model, 'events', GxHtml::encodeEx(GxHtml::listDataEx(Event::model()->findAllAttributes(null, true)), false, true)); ?>

<?php
echo GxHtml::submitButton('Save');
$this->endWidget();
?>
</div><!-- form -->