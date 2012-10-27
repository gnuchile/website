<div class="form">


<?php $form = $this->beginWidget('GxActiveForm', array(
	'id' => 'event-form',
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
		<div class="row">
		<?php echo $form->labelEx($model,'event_type_id'); ?>
		<?php echo $form->dropDownList($model, 'event_type_id', GxHtml::listDataEx(EventType::model()->findAllAttributes(null, true))); ?>
		<?php echo $form->error($model,'event_type_id'); ?>
		</div><!-- row -->

		<label><?php echo GxHtml::encode($model->getRelationLabel('dates')); ?></label>
		<?php echo $form->checkBoxList($model, 'dates', GxHtml::encodeEx(GxHtml::listDataEx(Date::model()->findAllAttributes(null, true)), false, true)); ?>
		<label><?php echo GxHtml::encode($model->getRelationLabel('attendants')); ?></label>
		<?php echo $form->checkBoxList($model, 'attendants', GxHtml::encodeEx(GxHtml::listDataEx(Attendant::model()->findAllAttributes(null, true)), false, true)); ?>
		<label><?php echo GxHtml::encode($model->getRelationLabel('organizers')); ?></label>
		<?php echo $form->checkBoxList($model, 'organizers', GxHtml::encodeEx(GxHtml::listDataEx(Organizer::model()->findAllAttributes(null, true)), false, true)); ?>
		<label><?php echo GxHtml::encode($model->getRelationLabel('partners')); ?></label>
		<?php echo $form->checkBoxList($model, 'partners', GxHtml::encodeEx(GxHtml::listDataEx(Partner::model()->findAllAttributes(null, true)), false, true)); ?>
		<label><?php echo GxHtml::encode($model->getRelationLabel('sponsors')); ?></label>
		<?php echo $form->checkBoxList($model, 'sponsors', GxHtml::encodeEx(GxHtml::listDataEx(Sponsor::model()->findAllAttributes(null, true)), false, true)); ?>

<?php
echo GxHtml::submitButton('Save');
$this->endWidget();
?>
</div><!-- form -->