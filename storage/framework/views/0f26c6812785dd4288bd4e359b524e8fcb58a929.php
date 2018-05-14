<?php $__env->startSection('content'); ?>
<div class="registration">
<h1>Sign up</h1><br>
<form>
	
	<input type="text" name="" placeholder=" Login"><br><br>
	<input type="text" name="" placeholder=" First Name"><br><br>
	<input type="text" name="" placeholder=" Last Name"><br><br>
	<input type="text" name="" placeholder=" Email"><br><br>
	<input type="password" name="" placeholder=" Password"><br><br><br>
	<input type="submit" name="" value="     Submit">
	

</form>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.reg-header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>