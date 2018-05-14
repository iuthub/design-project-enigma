<?php $__env->startSection('content'); ?>
<div class="container-fluid">

<div class="row shop-first-row">
    <div class="col-md-4">
        <div class="shop-text-block">
            <h1>SHOP</h1>
        </div>
    </div>
    <div class="col-md-8">
        <div class="shop-image-block">

        </div>
    </div>
</div>

<div class="row shop-content">
    <div class="col-md-2">
        <h2>filters</h2>
        <hr>
        <h5>Collection</h5>
        <div class="shop-category-filter">
            <ul>
                <li><a href="#" class="">All</a></li>
                <li><a href="#">Sports Bras</a></li>
                <li><a href="#">Leggings</a></li>
                <li><a href="#">Shirts</a></li>
                <li><a href="#">Shorts</a></li>
                <li><a href="#">New Arivalls</a></li>
                <li><a href="#">Best Sellers</a></li>
            </ul>
        </div>
        <hr>
        <h5>Price range</h5>
        <div class="shop-price-filter">
            <div class="input-group input-group-sm mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-sm">Min</span>
                </div>
                <input type="text" class="form-control" aria-label="Min" aria-describedby="inputGroup-sizing-sm">
            </div>

            <div class="input-group input-group-sm mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-sm">Max</span>
                </div>
                <input type="text" class="form-control" aria-label="Max" aria-describedby="inputGroup-sizing-sm">
            </div>
        </div>
        <hr>
        <h5>Size</h5>
        <div class="shop-size-filter">
            <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="customCheck1">
                <label class="custom-control-label" for="customCheck1">Large</label>
            </div>

            <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="customCheck2">
                <label class="custom-control-label" for="customCheck2">Medium</label>
            </div>

            <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="customCheck3">
                <label class="custom-control-label" for="customCheck3">Small</label>
            </div>

        </div>
        <hr>

        <button class="btn btn-secondary">Cancel filters</button>
    </div>


    <div class="col-md-10">
        <div class="row product-row">
            <div class="col-md-3 shop-product-block">
                <a href="<?php echo e(route('product', ['id' => 0])); ?>">
                    <div class="card">
                        <img src="./images/sample_product.png" alt="" class="card-image-top shop-product-image">
                        <div class="card-body">
                            <h5 class="card-title">T-Shirt</h5>
                            <div class="card-text">
                                <p>Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                            <div class="card-text">
                                <p class="text-muted">25000<span class="price-sum">SUM</span></p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-3 shop-product-block">
                <a href="#">
                    <div class="card">
                        <img src="./images/sample_product.png" alt="" class="card-image-top shop-product-image">
                        <div class="card-body">
                            <h5 class="card-title">T-Shirt</h5>
                            <div class="card-text">
                                <p>Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                            <div class="card-text">
                                <p class="text-muted">25000<span class="price-sum">SUM</span></p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-3 shop-product-block">
                <a href="#">
                    <div class="card">
                        <img src="./images/sample_product.png" alt="" class="card-image-top shop-product-image">
                        <div class="card-body">
                            <h5 class="card-title">T-Shirt</h5>
                            <div class="card-text">
                                <p>Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                            <div class="card-text">
                                <p class="text-muted">25000<span class="price-sum">SUM</span></p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-3 shop-product-block">
                <a href="#">
                    <div class="card">
                        <img src="./images/sample_product.png" alt="" class="card-image-top shop-product-image">
                        <div class="card-body">
                            <h5 class="card-title">T-Shirt</h5>
                            <div class="card-text">
                                <p>Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                            <div class="card-text">
                                <p class="text-muted">25000<span class="price-sum">SUM</span></p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

        </div>

    </div>
</div>
</div>
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>