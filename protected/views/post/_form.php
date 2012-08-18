<div class="well">
<div class="form">


<?php $form = $this->beginWidget('GxActiveForm', array(
	'id' => 'post-form',
	'enableAjaxValidation' => false,
        'type'=>'horizontal',
        'htmlOptions'=>array(
           // 'class'=>'form-horizontal',
        )
));
?>
    <fieldset>
        <legend>
	<p class="note">
		Fields with <span class="required">*</span> are required.
	</p>
        </legend>

	<?php echo $form->errorSummary($model); ?>
        <div class="control-group">
            <div class="span4">
		<div class="row">
		<?php // echo $form->labelEx($model,'user_id'); ?>
		<?php // echo $form->dropDownList($model, 'user_id', GxHtml::listDataEx(User::model()->findAllAttributes(null, true))); ?>
		<?php // echo $form->error($model,'user_id'); ?>
		</div><!-- row -->
                <?php //echo $form->dropDownListRow($model,'user_id',GxHtml::listDataEx(User::model()->findAllAttributes(null, true)),array('class'=>'span5','maxlength'=>255, 'prompt'=>'lala...')); ?>
                <?php echo $form->textFieldRow($model,'title',array('class'=>'span5','maxlength'=>255)); ?>
		<div class="row">
		<?php //echo $form->labelEx($model,'title'); ?>
		<?php //echo $form->textField($model, 'title', array('maxlength' => 200)); ?>
		<?php //echo $form->error($model,'title'); ?>

		</div><!-- row -->
                <?php // echo $form->textAreaRow($model,'body',array('class'=>'span5')); ?>
        <?php $this->widget(
    'application.extensions.ddeditor.DDEditor',
    array(
        'model'=>$model,
        'attribute'=>'body',
        'htmlOptions'=>array('rows'=>10, 'cols'=>70),
        'previewRequest'=>'post/preview')); ?>

		<div class="row">
		<?php // echo $form->labelEx($model,'body'); ?>
		<?php // echo $form->textArea($model, 'body'); ?>
		<?php // echo $form->error($model,'body'); ?>
		</div><!-- row -->
		<div class="row">
		<?php // echo $form->labelEx($model,'status'); ?>
		<?php // echo $form->textField($model, 'status', array('maxlength' => 45)); ?>
		<?php // echo $form->error($model,'status'); ?>
		</div><!-- row -->

                <?php echo $form->textFieldRow($model,'status',array('class'=>'span5','maxlength'=>45)); ?>
                <div class="row">
		<?php // echo $form->labelEx($model,'in_frontpage'); ?>
		<?php // echo $form->checkBox($model, 'in_frontpage'); ?>
		<?php // echo $form->error($model,'in_frontpage'); ?>
		</div><!-- row -->
                <?php echo $form->checkBoxRow($model,'in_frontpage',array()); ?>
                <?php echo $form->checkBoxRow($model,'in_blog',array()); ?>
		<div class="row">
		<?php //echo $form->labelEx($model,'created_at'); ?>
		<?php //echo $form->textField($model, 'created_at'); ?>
		<?php //echo $form->error($model,'created_at'); ?>
		</div><!-- row -->
		<div class="control-group">
		<?php echo $form->labelEx($model,'publication_date', array('class'=>'control-label')); ?>
		<?php
                //echo $form->textField($model, 'publication_date', array('maxlength' => 45));

                echo CHtml::openTag('div', array('class'=>'controls'));
                $this->widget('zii.widgets.jui.CJuiDatePicker', array(
                    'model'=>$model,
                    'attribute'=>'publication_date',
//                    'name'=>'Post[publication_date]',
                    // additional javascript options for the date picker plugin
                    'options'=>array(
                        'showAnim'=>'fold',
                        'changeMonth'=>true,
                        'changeYear'=>true,
                        'dateFormat'=>'yy-mm-dd',
                        ),
                    'language'=>'es',
                    'htmlOptions'=>array(
//                        'style'=>'height:20px;',
                        'class'=>'span5',
                    ),
                ));
                echo CHtml::closeTag('div');
                ?>
		<?php echo $form->error($model,'publication_date'); ?>
		</div><!-- row -->
		<div class="row">
		<?php //echo $form->labelEx($model,'visits'); ?>
		<?php //echo $form->textField($model, 'visits', array('maxlength' => 20)); ?>
		<?php //echo $form->error($model,'visits'); ?>
		</div><!-- row -->

<!--		<label><?php echo GxHtml::encode($model->getRelationLabel('categories')); ?></label>-->
		<?php echo $form->checkBoxListRow($model, 'categories', GxHtml::encodeEx(GxHtml::listDataEx(Category::model()->findAllAttributes(null, true)), false, true)); ?>
            </div>
        </div>

<?php
echo GxHtml::submitButton('Save');
$this->endWidget();
?>
</fieldset>
</div><!-- form -->
</div>