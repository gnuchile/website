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
		<?php echo $form->label($model, 'name'); ?>
		<?php echo $form->textField($model, 'name', array('maxlength' => 45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'location_id'); ?>
		<?php echo $form->dropDownList($model, 'location_id', GxHtml::listDataEx(Location::model()->findAllAttributes(null, true)), array('prompt' => 'All')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'event_type_id'); ?>
		<?php echo $form->dropDownList($model, 'event_type_id', GxHtml::listDataEx(EventType::model()->findAllAttributes(null, true)), array('prompt' => 'All')); ?>
	</div>

	<div class="row buttons">
		<?php echo GxHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
