<?php
$this->pageTitle=Yii::app()->name . ' - '. Yii::t('site', 'Contact Us');
$this->breadcrumbs=array(
	'Contacto',
);
?>
<div class="span10">
<h1>Contacto</h1>

<?php if(Yii::app()->user->hasFlash('contact')): ?>

<div class="flash-success">
	<?php echo Yii::app()->user->getFlash('contact'); ?>
</div>

<?php else: ?>

<p>
Por cualquier duda o consulta, no dudes en contactarnos!
</p>

<div class="form">

<?php $form=$this->beginWidget('EBootstrapActiveForm', array(
	'id'=>'contact-form',
	'enableClientValidation'=>true,
    'horizontal'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>

	<p class="note">Los campos con <span class="required">*</span> son requeridos.</p>

	<?php echo $form->errorSummary($model); ?>



    <?php echo $form->beginControlGroup($model, 'name'); ?>
        <?php echo $form->labelEx($model,'name'); ?>
        <?php echo $form->beginControls(); ?>
            <?php echo $form->textField($model,'name'); ?>
            <?php echo $form->error($model,'name'); ?>
        <?php echo $form->endControls(); ?>
    <?php echo $form->endControlGroup(); ?>

    <?php echo $form->beginControlGroup($model, 'email'); ?>
        <?php echo $form->labelEx($model,'email'); ?>
        <?php echo $form->beginControls(); ?>
            <?php echo $form->textFieldPrepend($model,'email','@'); ?>
            <?php echo $form->error($model,'email'); ?>
        <?php echo $form->endControls(); ?>
    <?php echo $form->endControlGroup(); ?>

    <?php echo $form->beginControlGroup($model, 'subject'); ?>
        <?php echo $form->labelEx($model,'subject'); ?>
        <?php echo $form->beginControls(); ?>
            <?php echo $form->textFieldAppend($model,'subject','!',array('maxlength'=>128)); ?>
            <?php echo $form->error($model,'subject'); ?>
        <?php echo $form->endControls(); ?>
    <?php echo $form->endControlGroup(); ?>

    <?php echo $form->beginControlGroup($model, 'body'); ?>
        <?php echo $form->labelEx($model,'body'); ?>
        <?php echo $form->beginControls(); ?>
            <?php echo $form->textArea($model,'body',array('rows'=>6, 'cols'=>50)); ?>
            <?php echo $form->error($model,'body'); ?>
        <?php echo $form->endControls(); ?>
    <?php echo $form->endControlGroup(); ?>

    <?php if(CCaptcha::checkRequirements()): ?>
        <div class="captcha">
            <?php echo $form->beginControlGroup($model, 'body'); ?>
                <?php echo $form->labelEx($model,'verifyCode'); ?>
                <?php echo $form->beginControls(); ?>
                    <?php $this->widget('CCaptcha'); ?><br />
                    <?php echo $form->textField($model,'verifyCode'); ?>

                    <?php echo $form->helpBlock(Yii::t('site','Please enter the letters as they are shown in the image above.<br />Letters are not case-sensitive.')); ?>
                    <?php echo $form->error($model,'verifyCode'); ?>
                <?php echo $form->endControls(); ?>
            <?php echo $form->endControls(); ?>
        </div>
    <?php endif; ?>

    <?php echo $form->beginActions(); ?>
        <?php echo $form->submitButton(Yii::t('site', 'Submit')); ?>
    <?php echo $form->endActions(); ?>
    
<?php $this->endWidget(); ?>

</div><!-- form -->

<?php endif; ?>
</div>