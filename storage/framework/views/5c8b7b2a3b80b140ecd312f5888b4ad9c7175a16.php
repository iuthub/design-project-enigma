<?php $__env->startSection('content'); ?>
<div class="container-fluid">
        <div class="row product-page-row">
            <div class="col-md-6">
                <div class="product-image-block">
                    <img src="./images/sample-product2.jpg" alt="">
                    <div class="product-image-block-text">
                        <p><?php echo e($spec); ?></p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <h5><?php echo e($name); ?></h5>
                <h6 class="text-muted">Product ID: <?php echo e($id); ?></h6>
                <p><?php echo e($price); ?><span class="price-sum">SUM</span></p>

                <div class="form-group">
                        <label for="exampleFormControlSelect1" class="text-muted">Size</label>
                        <select class="form-control" id="exampleFormControlSelect1" required>
                            <option disabled selected hidden>Choose...</option>
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                        </select>

                        <label for="example-number-input" class="text-muted">Number</label>
                        <input class="form-control" type="number" value="1" id="example-number-input">
                </div>

                <div class="product-add-cart">
                    <button class="btn btn-secondary">Add to Cart</button>
                </div>

                <div class="accordion" id="accordionExample">
                        <div class="card">
                          <div class="card-header" id="headingOne">
                            <h5 class="mb-0">
                              <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Product Info
                              </button>
                            </h5>
                          </div>
                      
                          <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                            <div class="card-body">
                                <?php echo e($descr); ?>

                            </div>
                          </div>
                        </div>
                        <div class="card">
                          <div class="card-header" id="headingTwo">
                            <h5 class="mb-0">
                              <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Return & Refund Policy
                              </button>
                            </h5>
                          </div>
                          <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                            <div class="card-body">
                                    I’m a Return and Refund policy. I’m a great place to let your customers know what to do in case they are dissatisfied with their purchase. Having a straightforward refund or exchange policy is a great way to build trust and reassure your customers that they can buy with confidence.</div>
                          </div>
                        </div>
                        <div class="card">
                          <div class="card-header" id="headingThree">
                            <h5 class="mb-0">
                              <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Shpping Info
                              </button>
                            </h5>
                          </div>
                          <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                            <div class="card-body">
                                    I'm a shipping policy. I'm a great place to add more information about your shipping methods, packaging and cost. Providing straightforward information about your shipping policy is a great way to build trust and reassure your customers that they can buy from you with confidence.</div>
                          </div>
                        </div>
                      </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>