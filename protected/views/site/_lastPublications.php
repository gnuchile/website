<div class="view post well well-small">

	<?php
        echo CHtml::openTag('h3', array());
        echo GxHtml::link(GxHtml::encode($data->title), array('//post/view', 'id' => $data->id));
        echo CHtml::closeTag('h3');
        
        echo GxHtml::openTag('h5', array('class'=>''));
        echo CHtml::openTag('span', array('class'=>'label label-inverse'));
            echo '<i class="icon-user icon-white"></i> '.GxHtml::encode(GxHtml::valueEx($data->user)).'';
            echo '<i class="icon-time icon-white"></i> '.$data->getPubDate('Y-m-d');

        echo CHtml::closeTag('span');
        echo CHtml::closeTag('h5');

        $data->showCategoriesAsLabel();
    ?>
	<br />
<!--
	<?php echo GxHtml::encode($data->getAttributeLabel('body')); ?>:-->
	<?php 
        echo $data->getMarkdownBody();
    ?>
	<br />
	
    <?php echo GxHtml::encode($data->getAttributeLabel('visits')); ?>:
	<?php echo GxHtml::encode($data->visits); ?>
	<br />

</div>