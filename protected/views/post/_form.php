<div class="form">


    <?php
    $form = $this->beginWidget('EBootstrapActiveForm', array(
        'id'                   => 'post-form',
        'enableAjaxValidation' => false,
        'horizontal'           => true,
            ));
    ?>

    <p class="note">
        Fields with <span class="required">*</span> are required.
    </p>

<?php echo $form->errorSummary($model); ?>

    <!--		<div class="row">
    <?php echo $form->beginControlGroup($model, 'user_id'); ?>
    <?php echo $form->labelEx($model, 'user_id'); ?>
    <?php echo $form->beginControls(); ?>
    <?php echo $form->dropDownList($model, 'user_id', GxHtml::listDataEx(User::model()->findAllAttributes(null, true))); ?>
    <?php echo $form->error($model, 'user_id'); ?>
    <?php echo $form->endControls(); ?>
    <?php echo $form->endControlGroup(); ?>
            </div> row -->
    <div class="row">
        <?php echo $form->beginControlGroup($model, 'title'); ?>
        <?php echo $form->labelEx($model, 'title'); ?>
        <?php echo $form->beginControls(); ?>
        <?php echo $form->textField($model, 'title', array('maxlength' => 200)); ?>
        <?php echo $form->error($model, 'title'); ?>
        <?php echo $form->endControls(); ?>
        <?php echo $form->endControlGroup(); ?>
    </div><!-- row -->
    <div class="row">
        <?php echo $form->beginControlGroup($model, 'body'); ?>
        <?php echo $form->labelEx($model, 'body'); ?>
        <?php echo $form->beginControls(); ?>
        <?php echo $form->textArea($model, 'body'); ?>
        <?php echo $form->error($model, 'body'); ?>
        <?php echo $form->endControls(); ?>
        <?php echo $form->endControlGroup(); ?>
    </div><!-- row -->
<!--    <div class="row">
        <?php echo $form->beginControlGroup($model, 'status'); ?>
        <?php echo $form->labelEx($model, 'status'); ?>
        <?php echo $form->beginControls(); ?>
        <?php echo $form->textField($model, 'status', array('maxlength' => 45)); ?>
        <?php echo $form->error($model, 'status'); ?>
        <?php echo $form->endControls(); ?>
        <?php echo $form->endControlGroup(); ?>
    </div> row -->
    <div class="row">
        <?php echo $form->beginControlGroup($model, 'in_frontpage'); ?>
        <?php echo $form->labelEx($model, 'in_frontpage'); ?>
        <?php echo $form->beginControls(); ?>
        <?php echo $form->checkBox($model, 'in_frontpage'); ?>
        <?php echo $form->error($model, 'in_frontpage'); ?>
        <?php echo $form->endControls(); ?>
        <?php echo $form->endControlGroup(); ?>
    </div><!-- row -->

    <div class="row">
        <?php echo $form->beginControlGroup($model, 'publication_date'); ?>
        <?php echo $form->labelEx($model, 'publication_date'); ?>
        <?php echo $form->beginControls(); ?>
        <?php
        $form->widget('zii.widgets.jui.CJuiDatePicker', array(
            'model'     => $model,
            'attribute' => 'publication_date',
            'value'     => $model->publication_date,
            'options'   => array(
                'showButtonPanel' => true,
                'changeYear'      => true,
                'dateFormat'      => 'yy-mm-dd',
            ),
            'htmlOptions'=>array(
                'readonly'=>true,
            ),
        ));
        ;
        ?>
<?php echo $form->error($model, 'publication_date'); ?>
        <?php echo $form->endControls(); ?>
        <?php echo $form->endControlGroup(); ?>
    </div><!-- row -->
    <div class="row">
        <?php echo $form->beginControlGroup($model, 'in_blog'); ?>
        <?php echo $form->labelEx($model, 'in_blog'); ?>
        <?php echo $form->beginControls(); ?>
        <?php echo $form->checkBox($model, 'in_blog'); ?>
        <?php echo $form->error($model, 'in_blog'); ?>
        <?php echo $form->endControls(); ?>
        <?php echo $form->endControlGroup(); ?>
    </div><!-- row -->

            <?php echo $form->beginControlGroup($model, 'categories'); ?>

    <label><?php echo GxHtml::encode($model->getRelationLabel('categories')); ?></label>
            <?php echo $form->beginControls(); ?>

    <?php echo GxHtml::activecheckBoxList($model, 'categories', GxHtml::encodeEx(GxHtml::listDataEx(Category::model()->findAllAttributes(null, true)), false, true)); ?>
<?php echo $form->endControls(); ?>
        <?php echo $form->endControlGroup(); ?>
     <?php echo $form->beginActions(); ?>
        <?php echo $form->submitButton('Submit'); ?>
    <?php echo $form->endActions(); ?>

<?php $this->endWidget(); ?>
</div><!-- form -->