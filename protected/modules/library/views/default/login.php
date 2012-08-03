<?php
	$this->pageTitle=Yii::app()->name . ' - Login';
?>

<div class="form">
<?php 
	$form=$this->beginWidget('CActiveForm', array('id' => 'login-form', 'enableClientValidation' => true, 'enableAjaxValidation' => true, 
							'focus' => array($model, 'username'), 'errorMessageCssClass' => 'errorMsg',));
?>

		<div class="span-21 box">
			<h2 class="large box-head"><strong>Login</strong></h2> 

			<div>
				<?php echo $form->labelEx($model,'username'); ?>
				<?php echo $form->textField($model,'username'); ?>
				<?php echo $form->error($model,'username'); ?>
			</div>
		
			<div>
				<?php echo $form->labelEx($model,'password'); ?>
				<?php echo $form->passwordField($model,'password'); ?>
				<?php echo $form->error($model,'password'); ?>
			</div>
		
			<div class="row rememberMe">
				<?php echo $form->label($model,'rememberMe'); ?>			
				<?php echo $form->checkBox($model,'rememberMe' ); ?>
				<?php echo $form->error($model,'rememberMe'); ?>
			</div>
			<br class="space" />
		    <div >
<?php			
				$this->widget('zii.widgets.jui.CJuiButton', array(
				    'buttonType'=>'submit',
				    'name'=>'btnSubmit',
				    'value'=>'1',
				    'caption'=>'Login',
				));
?>				
				<p style="vertical-align:center;display:inline;color:red"> |	</p>
<?php				

				$this->widget('zii.widgets.jui.CJuiButton', array(
				    'buttonType'=>'link',
				    'name'=>'btnClick',
				    'caption'=>'SignUp',
				    'url'=>array('default/register'),
				));				
?>				
		    </div>
		
</div>


<?php $this->endWidget(); ?>
</div><!-- form -->

