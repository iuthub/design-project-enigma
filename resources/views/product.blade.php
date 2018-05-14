@extends('layouts.app')
@section('content')
<div class="container-fluid">

        <div class="row product-page-row">
            <div class="col-md-6">
                <div class="product-image-block">
                    <img src="./images/sample-product2.jpg" alt="">
                    <div class="product-image-block-text">
                        <p>
                            I'm a product description. I'm a great place to add more details about your product such as sizing, material, care instructions and cleaning instructions.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <h5>Some product</h5>
                <h6 class="text-muted">Articul: 005</h6>
                <p>25000<span class="price-sum">SUM</span></p>

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
                                    I'm a product detail. I'm a great place to add more information about your product such as sizing, material, care and cleaning instructions. This is also a great space to write what makes this product special and how your customers can benefit from this item.
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
@stop