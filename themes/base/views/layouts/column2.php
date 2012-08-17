<?php $this->beginContent('//layouts/main'); ?>
<div class="span8">
	<?php echo $content; ?>
</div>
<div class="span3">
	<div id="sidebar">
	<?php

//		$this->beginWidget('zii.widgets.CPortlet', array(
//			'title'=>'Operations',
////			'htmlOptions'=>array('class'=>'sidebar-nav'),
//		));

        // se modifica $this->menu para adecuarlo a EBoostrapSidebar :)
        $this->menu = array(array('label'=>'Operations', 'items'=>$this->menu));

        $this->widget('EBootstrapSidebar', array(
			'items'=>$this->menu,
			'htmlOptions'=>array('class'=>'operations'),
		));
//		$this->endWidget();
	?>
	</div><!-- sidebar -->
</div>
<?php $this->endContent(); ?>