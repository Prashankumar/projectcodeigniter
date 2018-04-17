<h2>Login form </h2>

<?php $attributes= array('id'=>'login_form', 'class'=>'form_horizontal'); ?>

<?php if($this->session->flashdata('errors')): ?>
<?php echo $this->session->flashdata('errors'); ?>
<?php endif; ?>
<?php  echo form_open('users/login', $attributes);?>
<div class="form-group">
<?php echo form_label('Username'); ?>
<?php 
$data= array(
'class'=>'form-control',
'name'=>'username',
'placeholder'=>'Enter Username'
);
?>
<?php echo form_input($data);?>
</div>
<div class="form-group">
<?php echo form_label('Email'); ?>
<?php 
$data= array(
'class'=>'form-control',
'name'=>'email',
'placeholder'=>'Enter Email'
);
?>
<?php echo form_input($data);?>
</div>


<div class="form-group">
<?php echo form_label('Password'); ?>
<?php 
$data= array(
'class'=>'form-control',
'name'=>'password',
'placeholder'=>'Enter Password'
);
?>
<?php echo form_password($data);?>
</div>

<div class="form-group">
<?php echo form_label(' Confirm Password'); ?>
<?php 
$data= array(
'class'=>'form-control',
'name'=>'confirm_password',
'placeholder'=>'Confirm Password'
);
?>
<?php echo form_password($data);?>
</div>

<div class="form-group">
<?php 
$data= array(
'class'=>'btn btn-primary',
'name'=>'submit',
'value'=>'Login'
);
?>
<?php echo form_submit($data);?>
</div>

<?php form_close('users/login', $attributes);?>