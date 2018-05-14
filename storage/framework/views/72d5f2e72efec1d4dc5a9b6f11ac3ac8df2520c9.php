<?php $__env->startSection('content'); ?>
<div class="login">
<img src="/images/login-icon.png" class="login-icon">
<form>
	<p>Login</p>
	<input type="text" name="" placeholder=" ">
	<p>Password</p>
	<input type="password" name="" placeholder=" "><br><br><br>
	<input type="submit" name="" value="Sign in">
	<a href="<?php echo e(route('registration')); ?>">New customer? Start here.</a>
</form>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.login-header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>