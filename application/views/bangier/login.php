
<?php echo form_open('user/login'); ?>

<div id="login-block">
    <h2>Log in</h2>
    
<div class="input-group login-group" style="width:fit-content">
  <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
  <input type="text" name="name" value="<?php echo set_value('name'); ?>" class="form-control" placeholder="Username">
</div>
<div class="error-block"><?php echo form_error('name', '<span class="error">', '</span>'); ?> </div>

<div class="input-group login-group">
  <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
  <input type="password" name="password" class="form-control" placeholder="Password">
</div>
 <div class="error-block"><?php echo form_error('password', '<span class="error">', '</span>'); ?> </div>

<button class="btn btn-info" type="submit">Log in</button>
</div>


</form>

