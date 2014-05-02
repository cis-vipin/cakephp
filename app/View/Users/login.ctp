<div class="container">
<div class="hero-unit">
<?php echo $this->Form->create('User'); ?>
    <fieldset>
        <legend>
            <?php echo __('Please enter your username and password'); ?>
        </legend>
	 <div class="control-group">
		<div class="controls">
			<?php echo $this->Form->input('username'); ?>
    		</div>
  	</div>
	 <div class="control-group">
		<div class="controls">
			<?php echo $this->Form->input('password');?>
    		</div>
  	</div>
	<?php 
	$options = array(
    	'label' => 'Login',
    	'div' => array(
        	'class' => 'btn btn-primary',
    	)
	); ?>
	<div class="control-group">
	   
		<?php echo $this->Form->end('Login',$options); ?>
    	 
  	</div>
</fieldset>

</div>
</div>
