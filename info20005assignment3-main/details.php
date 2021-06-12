<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Details</title>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    
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
            <div class="col-md-6">
                <div class="product-image">
                    <img src="./Images/pexels-thought-catalog-2228577.jpg" alt="" class="img-responsive">
                </div>
            </div>

            <div class="col-md-6">
                <div class="product-details">
                    <div class="product-actions">
                        <div class="rating">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                        </div>
                    </div>

                    <div class="product-title">
                        <h3>Peanuts Greatest Hits</h3>

                        <div class="d-flex justify-content-between">
                            <p>Vince Guaraliti</p>
                            <p>Vinyl</p>
                        </div>

                        <div class="d-flex justify-content-between">
                            <p>$29.88</p>
                            <p>888072173666</p>
                        </div>
                    </div>

                    <div class="product-specification">
                        <div class="title bg-light p-2 shadow">Info</div>

                        <p>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                        </p>
                    </div>

                    <div class="cart-button">
                        <button class="btn btn-lg">Add To Cart</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="my-5 spacer"></div>

        <div class="row">
            <div class="col-md-12">
                <video width="100%" height="auto" controls autoplay muted loop>
                    <source src="https://www.youtube.com/watch?v=koeObMIFBjg" type="video/mp4">
                </video>
            </div>
        </div>

        <div class="my-5 spacer"></div>

        <div class="row">
            <div class="col-md-12">
                <div class="title-block">
                    <h3>Reviews</h3>
                </div>

                <div class="product-reviews">
                    <div class="review">
                        <div class="d-flex align-items-center justify-content-between">
                            <div class="user-avatar">
                                <img src="./Icons/man.svg" alt="Avatar" width="50">
                            </div>

                            <div class="mx-5 spacer"></div>

                            <div class="user-review">
                                <div class="stars">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star"></span>
                                </div>

                                <div class="review-comment">
                                    <p class="samp">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque posuere dictum enim, non ornare massa molestie eget. Maecenas sollicitudin vestibulum.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="review">
                        <div class="d-flex align-items-center justify-content-between">
                            <div class="user-avatar">
                                <img src="./Icons/woman.svg" alt="Avatar" width="50">
                            </div>

                            <div class="mx-5 spacer"></div>

                            <div class="user-review">
                                <div class="stars">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star"></span>
                                </div>

                                <div class="review-comment">
                                    <p class="samp">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque posuere dictum enim, non ornare massa molestie eget. Maecenas sollicitudin vestibulum.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>