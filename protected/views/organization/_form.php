<div class="form">


<?php $form = $this->beginWidget('GxActiveForm', array(
	'id' => 'organization-form',
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
		<div class="row">
		<?php echo $form->labelEx($model,'location_id'); ?>
		<?php echo $form->dropDownList($model, 'location_id', GxHtml::listDataEx(Location::model()->findAllAttributes(null, true))); ?>
		<?php echo $form->error($model,'location_id'); ?>
		</div><!-- row -->

		<label><?php echo GxHtml::encode($model->getRelationLabel('emails')); ?></label>
		<?php echo $form->checkBoxList($model, 'emails', GxHtml::encodeEx(GxHtml::listDataEx(Email::model()->findAllAttributes(null, true)), false, true)); ?>
		<label><?php echo GxHtml::encode($model->getRelationLabel('people')); ?></label>
		<?php echo $form->checkBoxList($model, 'people', GxHtml::encodeEx(GxHtml::listDataEx(Person::model()->findAllAttributes(null, true)), false, true)); ?>
		<label><?php echo GxHtml::encode($model->getRelationLabel('phones')); ?></label>
		<?php echo $form->checkBoxList($model, 'phones', GxHtml::encodeEx(GxHtml::listDataEx(Phone::model()->findAllAttributes(null, true)), false, true)); ?>

<?php
echo GxHtml::submitButton('Save');
$this->endWidget();
?>
</div><!-- form -->