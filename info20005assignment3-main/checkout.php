<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout</title>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./Styles/style.css">
</head>

<body>
    <?php
        include('./Partials/header.php');
    ?>

    <div class="my-5 spacer"></div>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <ul class="nav nav-tabs" id="checkoutTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="cart-tab" data-toggle="tab" href="#cart" role="tab" aria-controls="cart" aria-selected="true">Cart</a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link" id="account-tab" data-toggle="tab" href="#account" role="tab" aria-controls="account" aria-selected="false">Account</a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link" id="shipping-tab" data-toggle="tab" href="#shipping" role="tab" aria-controls="shipping" aria-selected="false">Shipping</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" id="payment-tab" data-toggle="tab" href="#payment" role="tab" aria-controls="payment" aria-selected="false">Payment</a>
                    </li>
                </ul>

                <div class="tab-content" id="checkoutTabContent">
                    <div class="tab-pane fade show active" id="cart" role="tabpanel" aria-labelledby="cart-tab">
                        <div class="my-5 spacer"></div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="my-5 spacer"></div>
                                <div class="product-image">
                                    <img src="./Images/pexels-thought-catalog-2228577.jpg" alt="" class="img-responsive">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="cart-details">
                                    <div class="product-title">
                                        <h3>Peanuts Greatest Hits</h3>
                                    </div>

                                    <div class="product-price">
                                        <p class="">$29.88</p>
                                    </div>

                                    <div class="product-quantity">
                                        <div class="d-flex align-items-center">
                                            <i class="fa fa-plus-circle cursor-pointer"></i>

                                            <div class="mx-2 spacer"></div>

                                            <i class="fa fa-minus-circle cursor-pointer"></i>

                                            <div class="mx-3 spacer"></div>

                                            <input type="number" name="quantity" id="quantity" class="form-control quantity">
                                        </div>
                                    </div>

                                    <div class="my-5 spacer"></div>

                                    <div class="remove-product">
                                        <button class="btn btn-lg">Remove</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="my-5 spacer"></div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="title-block bg-light shadow d-flex align-items-center">
                                    <h6>Details</h6>
                                </div>

                                <div class="my-5 spacer"></div>

                                <div class="d-flex justify-content-between">
                                    <div>
                                        <p class="text-uppercase">Cart Subtotal</p>

                                        <button class="btn btn-outline btn-outline-dark">Status Process <i class="fa fa-angle-down"></i></button>
                                    </div>

                                    <div>
                                        <div class="shipping-fee">
                                            <p>Estimated Shipping Fee: <span>$5.00</span></p>
                                        </div>

                                        <div class="tax-fee">
                                            <p>Estimated Tax: <span>$2.50</span></p>
                                        </div>

                                        <div class="total-price">
                                            <p>Subtotal Price: <span>$38.48</span></p>
                                        </div>

                                        <button class="btn btn-outline btn-outline-dark">Confirm</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="account" role="tabpanel" aria-labelledby="account-tab">
                        <div class="my-5 spacer"></div>

                        <div class="row">
                            <div class="col-md-6 offset-md-3">
                                <form class="needs-validation" novalidate="">
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label for="firstName">First Name</label>
                                            <input type="text" class="form-control" id="firstName" placeholder="" value="" required="">
                                        </div>

                                        <div class="col-md-6 mb-3">
                                            <label for="lastName">Last Name</label>
                                            <input type="text" class="form-control" id="lastName" placeholder="" value="" required="">
                                        </div>
                                    </div>

                                    <div class="mb-3">
                                        <label for="username">Username</label>
                                        
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                            <span class="input-group-text">@</span>
                                            </div>
                                            <input type="text" class="form-control" id="username" placeholder="Username" required="">
                                        </div>
                                    </div>

                                    <div class="mb-3">
                                        <label for="email">Email <span class="text-muted">(Optional)</span></label>
                                        
                                        <input type="email" class="form-control" id="email" placeholder="you@example.com">
                                    </div>

                                    <div class="mb-3">
                                        <label for="password">Password</label>
                                        
                                        <input type="password" class="form-control" id="password" placeholder="*****">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="shipping" role="tabpanel" aria-labelledby="shipping-tab">
                        <div class="my-5 spacer"></div>

                        <div class="row">
                            <div class="col-md-6 offset-md-3">
                                <div class="mb-3">
                                    <label for="address">Address</label>

                                    <input type="text" class="form-control" id="address" placeholder="1234 Main St" required="">
                                    <div class="invalid-feedback">
                                        Please enter your shipping address.
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label for="address2">Address 2 <span class="text-muted">(Optional)</span></label>
                                    <input type="text" class="form-control" id="address2" placeholder="Apartment or suite">
                                </div>

                                <div class="row">
                                    <div class="col-md-5 mb-3">
                                        <label for="country">Country</label>
                                        <select class="form-control" id="country" required="">
                                            <option value="">Choose...</option>
                                            <option>United States</option>
                                        </select>
                                    </div>

                                    <div class="col-md-4 mb-3">
                                        <label for="state">State</label>
                                        <select class="form-control" id="state" required="">
                                            <option value="">Choose...</option>
                                            <option>California</option>
                                        </select>
                                    </div>

                                    <div class="col-md-3 mb-3">
                                        <label for="zip">Zip</label>
                                        <input type="text" class="form-control" id="zip" placeholder="" required="">
                                        <div class="invalid-feedback">
                                        Zip code required.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="payment" role="tabpanel" aria-labelledby="payment-tab">
                        <div class="my-5 spacer"></div>

                        <div class="row">
                            <div class="col-md-6 offset-md-3">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="header">Payment</div>
                                    <div class="icons"> 
                                        <img src="https://img.icons8.com/color/48/000000/visa.png" /> 
                                        <img src="https://img.icons8.com/color/48/000000/mastercard-logo.png" /> 
                                        <img src="https://img.icons8.com/color/48/000000/maestro.png" /> 
                                    </div>
                                </div>

                                <form>
                                    <div class="mb-3">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <label for="">Cardholder's name:</label>
                                                <input type="text" placeholder="Linda Williams" name="name" class="form-control">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mb-3">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <label for="">Card Number:</label>
                                                <input type="number" placeholder="0125 6780 4567 9909"name="number" class="form-control">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mb-3">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label for="">Expiry Date:</label>
                                                <input type="date" name="date" class="form-control">
                                            </div>

                                            <div class="col-md-6">
                                                <label for="">CVV:</label>
                                                <input type="number" placeholder="CVV" name="cvv" class="form-control">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mb-3">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <button class="btn btn-primary btn-lg btn-block" type="submit">Continue to checkout</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="my-5 spacer"></div>
</body>
</html>