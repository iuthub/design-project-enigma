<?php $__env->startSection('content'); ?>
<div class="row contact-content">
    <div class="col-md-4 col-xs-12 form-block">
        <form>
            <h1>CONTACT</h1>
            <div class="form-element">
                <input type="text" class="form-control form-element" placeholder="Name">
            </div>

            <div class="form-element">
                <input type="text" class="form-control form-element" placeholder="E-mail">
            </div>

            <div class="form-element">
                <input type="text" class="form-control form-element" placeholder="Subject">
            </div>

            <div class="form-element">
                <textarea class="form-control form-element" aria-label="With textarea" placeholder="Message"></textarea>
            </div>

            <div class="form-element">
                <select class="custom-select form-element">
                    <option selected>Choose your country</option>
                    <option value="1">Uzbekistan</option>
                    <option value="2">Russia</option>
                    <option value="3">USA</option>
                </select>
            </div>

            <div class="form-element">
                <input type="submit" class="btn btn-secondary form-element" value="Submit">
            </div>
        </form>
    </div>
    <div class="col-md-8">
        <div class="form-image-block">

        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>