<div class="view">

	<?php echo GxHtml::encode($data->getAttributeLabel('id')); ?>:
	<?php echo GxHtml::link(GxHtml::encode($data->id), array('view', 'id' => $data->id)); ?>
	<br />

	<?php echo GxHtml::encode($data->getAttributeLabel('name')); ?>:
	<?php echo GxHtml::encode($data->name); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('location')); ?>:
	<?php echo GxHtml::encode(GxHtml::valueEx($data->location)); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('eventType')); ?>:
	<?php echo GxHtml::encode(GxHtml::valueEx($data->eventType)); ?>
	<br />

</div>