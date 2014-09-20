<?php echo validation_errors(); ?>

<?php echo form_open('user/login'); ?>

<h5>Username</h5>
<input type="text" name="name" value="" size="50" />

<h5>Password</h5>
<input type="text" name="password" value="" size="50" />

<div><input type="submit" value="Submit" /></div>

</form>

