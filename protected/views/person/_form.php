<div class="form">


<?php $form = $this->beginWidget('GxActiveForm', array(
	'id' => 'person-form',
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
		<?php echo $form->labelEx($model,'middlename'); ?>
		<?php echo $form->textField($model, 'middlename', array('maxlength' => 45)); ?>
		<?php echo $form->error($model,'middlename'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'lastname'); ?>
		<?php echo $form->textField($model, 'lastname', array('maxlength' => 45)); ?>
		<?php echo $form->error($model,'lastname'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'dob'); ?>
		<?php $form->widget('zii.widgets.jui.CJuiDatePicker', array(
			'model' => $model,
			'attribute' => 'dob',
			'value' => $model->dob,
			'options' => array(
				'showButtonPanel' => true,
				'changeYear' => true,
				'dateFormat' => 'yy-mm-dd',
				),
			));
; ?>
		<?php echo $form->error($model,'dob'); ?>
		</div><!-- row -->

		<label><?php echo GxHtml::encode($model->getRelationLabel('attendants')); ?></label>
		<?php echo $form->checkBoxList($model, 'attendants', GxHtml::encodeEx(GxHtml::listDataEx(Attendant::model()->findAllAttributes(null, true)), false, true)); ?>
		<label><?php echo GxHtml::encode($model->getRelationLabel('emails')); ?></label>
		<?php echo $form->checkBoxList($model, 'emails', GxHtml::encodeEx(GxHtml::listDataEx(Email::model()->findAllAttributes(null, true)), false, true)); ?>
		<label><?php echo GxHtml::encode($model->getRelationLabel('organizations')); ?></label>
		<?php echo $form->checkBoxList($model, 'organizations', GxHtml::encodeEx(GxHtml::listDataEx(Organization::model()->findAllAttributes(null, true)), false, true)); ?>
		<label><?php echo GxHtml::encode($model->getRelationLabel('phones')); ?></label>
		<?php echo $form->checkBoxList($model, 'phones', GxHtml::encodeEx(GxHtml::listDataEx(Phone::model()->findAllAttributes(null, true)), false, true)); ?>
		<label><?php echo GxHtml::encode($model->getRelationLabel('users')); ?></label>
		<?php echo $form->checkBoxList($model, 'users', GxHtml::encodeEx(GxHtml::listDataEx(User::model()->findAllAttributes(null, true)), false, true)); ?>

<?php
echo GxHtml::submitButton('Save');
$this->endWidget();
?>
</div><!-- form -->