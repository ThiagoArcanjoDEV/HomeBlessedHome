<div id='formLogin'>
	<?php echo validation_errors(); ?>
	<?php echo form_open('pages/view'); ?>
	
	<span class="group">
		<label for='login'>Login</label>
		<input type='text' name='login'>
	</span>
	<span class="group">
		<label for='senha'>Senha</label>
		<input type='password' name='senha'>
	</span>
	<span class="group">
		<input type="submit" name="submit" value="Entrar" />
	</span>
</div>
