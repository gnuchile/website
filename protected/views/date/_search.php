<div class="wide form">

<?php $form = $this->beginWidget('GxActiveForm', array(
	'action' => Yii::app()->createUrl($this->route),
	'method' => 'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model, 'id'); ?>
		<?php echo $form->textField($model, 'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'event_id'); ?>
		<?php echo $form->dropDownList($model, 'event_id', GxHtml::listDataEx(Event::model()->findAllAttributes(null, true)), array('prompt' => 'All')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'start_date'); ?>
		<?php echo $form->textField($model, 'start_date', array('maxlength' => 45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'end_date'); ?>
		<?php echo $form->textField($model, 'end_date', array('maxlength' => 45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'start_time'); ?>
		<?php echo $form->textField($model, 'start_time', array('maxlength' => 45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'end_time'); ?>
		<?php echo $form->textField($model, 'end_time', array('maxlength' => 45)); ?>
	</div>

	<div class="row buttons">
		<?php echo GxHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
