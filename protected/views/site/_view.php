<div class="view post well well-small">

	<?php echo GxHtml::encode($data->getAttributeLabel('id')); ?>:
	<?php echo GxHtml::link(GxHtml::encode($data->id), array('//post/view', 'id' => $data->id)); ?>
	<br />

	<?php echo GxHtml::encode($data->getAttributeLabel('user')); ?>:
	<?php echo GxHtml::encode(GxHtml::valueEx($data->user)); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('title')); ?>:
	<?php echo GxHtml::encode($data->title); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('body')); ?>:
	<?php echo GxHtml::encode($data->body); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('status')); ?>:
	<?php echo GxHtml::encode($data->status); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('in_frontpage')); ?>:
	<?php echo GxHtml::encode($data->in_frontpage); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('created_at')); ?>:
	<?php echo GxHtml::encode($data->created_at); ?>
	<br />
	<?php /*
	<?php echo GxHtml::encode($data->getAttributeLabel('publication_date')); ?>:
	<?php echo GxHtml::encode($data->publication_date); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('visits')); ?>:
	<?php echo GxHtml::encode($data->visits); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('in_blog')); ?>:
	<?php echo GxHtml::encode($data->in_blog); ?>
	<br />
	*/ ?>

</div>