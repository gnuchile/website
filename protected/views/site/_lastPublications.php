<div class="view post well well-small">

	<?php
        echo CHtml::openTag('h4', array());
        echo GxHtml::link(GxHtml::encode($data->title), array('//post/view', 'id' => $data->id));
        echo CHtml::closeTag('h4');
        
        echo GxHtml::openTag('h6', array('class'=>''));
        echo GxHtml::encode($data->getAttributeLabel('Autor')).': '.GxHtml::encode(GxHtml::valueEx($data->user)).'&nbsp;';
        echo CHtml::tag('span', array('class'=>'label label-info'), '@ '.date('Y-m-d', strtotime($data->publication_date)));
        echo CHtml::closeTag('h6');

    ?>
	<?php
        foreach ($data->categories as $key => $c)
        {
            echo CHtml::tag('span', array('class'=>'label'), $c->name);
            echo '&nbsp;';
        }
    ?>
	<br />

	<?php echo GxHtml::encode($data->getAttributeLabel('body')); ?>:
	<?php echo GxHtml::encode($data->body); ?>
	<br />
	
    <?php echo GxHtml::encode($data->getAttributeLabel('visits')); ?>:
	<?php echo GxHtml::encode($data->visits); ?>
	<br />

</div>