<?php
$this->pageTitle=Yii::app()->name . ' - Login';
$this->breadcrumbs=array(
	'Login',
);
?>

<h1>Login</h1>

<p>Please fill out the following form with your login credentials:</p>

<div class="form">
<?php $form=$this->beginWidget('EBootstrapActiveForm', array(
	'id'=>'login-form',
	'enableClientValidation'=>true,
    'horizontal'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>


    <?php echo $form->beginControlGroup($model, 'username'); ?>
        <?php echo $form->labelEx($model,'username'); ?>
        <?php echo $form->beginControls(); ?>
            <?php echo $form->textField($model,'username'); ?>
            <?php echo $form->error($model,'username'); ?>
        <?php echo $form->endControls(); ?>
    <?php echo $form->endControlGroup(); ?>

	<?php echo $form->beginControlGroup($model, 'password'); ?>
        <?php echo $form->labelEx($model,'password'); ?>
        <?php echo $form->beginControls(); ?>
		<?php echo $form->passwordField($model,'password'); ?>
		<?php echo $form->error($model,'password'); ?>
		<p class="hint">
			Hint: You may login with <kbd>demo</kbd>/<kbd>demo</kbd> or <kbd>admin</kbd>/<kbd>admin</kbd>.
		</p>
        <?php echo $form->endControls(); ?>
    <?php echo $form->endControlGroup(); ?>

<!--	<div class="row rememberMe">-->
    <?php echo $form->beginControlGroup($model, 'rememberMe'); ?>
        <?php echo $form->labelEx($model,'rememberMe'); ?>
        <?php echo $form->beginControls(); ?>
		<?php echo $form->checkBox($model,'rememberMe'); ?>
		<?php  // echo $form->label($model,'rememberMe'); ?>
		<?php echo $form->error($model,'rememberMe'); ?>
<!--	</div>-->
        <?php echo $form->endControls(); ?>
    <?php echo $form->endControlGroup(); ?>

<!--	<div class="row buttons">
		<?php // echo CHtml::submitButton('Login'); ?>
	</div>-->

    <?php echo $form->beginActions(); ?>
        <?php echo $form->submitButton('Login'); ?>
    <?php echo $form->endActions(); ?>


<?php $this->endWidget(); ?>
</div><!-- form -->
