<div class="view">

	<?php echo GxHtml::encode($data->getAttributeLabel('id')); ?>:
	<?php echo GxHtml::link(GxHtml::encode($data->id), array('view', 'id' => $data->id)); ?>
	<br />

	<?php echo GxHtml::encode($data->getAttributeLabel('event')); ?>:
	<?php echo GxHtml::encode(GxHtml::valueEx($data->event)); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('start_date')); ?>:
	<?php echo GxHtml::encode($data->start_date); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('end_date')); ?>:
	<?php echo GxHtml::encode($data->end_date); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('start_time')); ?>:
	<?php echo GxHtml::encode($data->start_time); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('end_time')); ?>:
	<?php echo GxHtml::encode($data->end_time); ?>
	<br />

</div>