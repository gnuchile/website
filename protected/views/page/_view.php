<div class="view">

	<?php echo GxHtml::encode($data->getAttributeLabel('id')); ?>:
	<?php echo GxHtml::link(GxHtml::encode($data->id), array('view', 'id' => $data->id)); ?>
	<br />

	<?php echo GxHtml::encode($data->getAttributeLabel('title')); ?>:
	<?php echo GxHtml::encode($data->title); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('slug')); ?>:
	<?php echo GxHtml::encode($data->slug); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('content')); ?>:
	<?php echo GxHtml::encode($data->content); ?>
	<br />

</div>