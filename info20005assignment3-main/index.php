<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

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
    <?php /* html for the navigation bar at the top */
        include('./Partials/header.php'); 
    ?>

    <div class="container-fluid">
        <div class="row mt-5">
            <div class="col-md-12">
                <div class="title-block">
                    <h3 class="text-center">News & Announcements</h3>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div id="slider">
                    <figure>
                        <img src="./Images/pexels-koolshooters-6621704.jpg" alt>
                        <img src="./Images/pexels-spencer-selover-706142.jpg" alt>
                    </figure>
                </div>
            </div>
        </div>

        <div class="my-5 spacer"></div> <!-- adds rows of space, used frequently betweeen sections -->

        <div class="row">
            <div class="col-md-12">
                <div class="title-block">
                    <div>
                        <h3 class="text-center">Popular Genres</h3>
                    </div>

                    <div>
                        <a href="#"><p>View All</p></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="my-5 spacer"></div>

        <div class="row">
            <div class="col-md-4">
                <div class="hovereffect">
                    <img class="img-responsive" src="./Images/pexels-thought-catalog-2228577.jpg" alt="">
                    <div class="overlay">
                        <h2>Jazz</h2>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="hovereffect">
                    <img class="img-responsive" src="./Images/pexels-thought-catalog-2228577.jpg" alt="">
                    <div class="overlay">
                        <h2>Rock</h2>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="hovereffect">
                    <img class="img-responsive" src="./Images/pexels-thought-catalog-2228577.jpg" alt="">
                    <div class="overlay">
                        <h2>Hip Hop</h2>
                    </div>
                </div>
            </div>
        </div>

        <div class="my-5 spacer"></div>

        <div class="row">
            <div class="col-md-12">
                <div class="advertisement-banner">
                		<img src="./Images/advertisement.jpg" alt="">
                </div>
            </div>
        </div>
        
        <div class="my-5 spacer"></div>

        <div class="row">
            <div class="col-md-12">
                <div class="title-block">
                    <div>
                        <h3 class="text-center">Featured</h3>
                    </div>

                    <div>
                        <a href="#"><p>View All</p></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="my-5 spacer"></div>

        <div class="row">
            <div class="col-md-4">
                <div class="hovereffect">
                    <img class="img-responsive" src="./Images/pexels-thought-catalog-2228577.jpg" alt="">
                    <div class="overlay">
                        <h2>Jazz</h2>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="hovereffect">
                    <img class="img-responsive" src="./Images/pexels-thought-catalog-2228577.jpg" alt="">
                    <div class="overlay">
                        <h2>Rock</h2>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="hovereffect">
                    <img class="img-responsive" src="./Images/pexels-thought-catalog-2228577.jpg" alt="">
                    <div class="overlay">
                        <h2>Hip Hop</h2>
                    </div>
                </div>
            </div>
        </div>

        <div class="my-5 spacer"></div>

        <div class="row">
            <div class="col-md-12">
                <div class="title-block">
                    <div>
                        <h3 class="text-center">Catalog</h3>
                    </div>

                    <div>
                        <a href="#"><p>View All</p></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="my-5 spacer"></div>

        <div class="row">
            <div class="col-md-12">
                <div class="d-flex align-items-center justify-content-center">
                    <button class="sort-option btn btn-outline btn-outline-dark">Sort Option <i class="fa fa-angle-down"></i></button>

                    <div class="mx-5 spacer"></div>

                    <button class="sort-option btn btn-outline btn-outline-dark">Sort Option <i class="fa fa-angle-down"></i></button>

                    <div class="mx-5 spacer"></div>

                    <button class="sort-option btn btn-outline btn-outline-dark">Sort Option <i class="fa fa-angle-down"></i></button>
                </div>
            </div>
        </div>

        <div class="my-5 spacer"></div>

        <div class="row"> <!-- row 1 of the catalog -->
            <div class="col-md-4">
                <div class="catalog">
                    <div class="catalog-image">
                        <img src="./Images/pexels-matthias-groeneveld-4200745.jpg" alt="">
                    </div>

                    <div class="mx-2 spacer"></div>

                    <div class="catalog-details">
                        <div class="catalog-name">
                            <a href="details.php"><h6>Peanuts Greatest Hits</h6></a>
                        </div>

                        <div class="catalog-genre">
                            <p class="mb-0">Vince Guaraliti</p>
                            <p>Vinyl</p>
                        </div>

                        <div class="catalog-actions">
                            <div class="play-pause d-flex justify-content-center">
                                <i class="fa fa-play cursor-pointer"></i>
                                <i class="fa fa-pause cursor-pointer"></i>
                            </div>
                            
                            <div class="my-1 spacer"></div>

                            <div class="cart-button">
                                <button class="btn btn-outline btn-outline-dark">Add</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="catalog">
                    <div class="catalog-image">
                        <img src="./Images/pexels-matthias-groeneveld-4200745.jpg" alt="">
                    </div>

                    <div class="mx-2 spacer"></div>

                    <div class="catalog-details">
                        <div class="catalog-name">
                            <a href="details.php"><h6>Peanuts Greatest Hits</h6></a>
                        </div>

                        <div class="catalog-genre">
                            <p class="mb-0">Vince Guaraliti</p>
                            <p>Vinyl</p>
                        </div>

                        <div class="catalog-actions">
                            <div class="play-pause d-flex justify-content-center">
                                <i class="fa fa-play cursor-pointer"></i>
                                <i class="fa fa-pause cursor-pointer"></i>
                            </div>
                            
                            <div class="my-1 spacer"></div>

                            <div class="cart-button">
                                <button class="btn btn-outline btn-outline-dark">Add</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="catalog">
                    <div class="catalog-image">
                        <img src="./Images/pexels-matthias-groeneveld-4200745.jpg" alt="">
                    </div>

                    <div class="mx-2 spacer"></div>

                    <div class="catalog-details">
                        <div class="catalog-name">
                            <a href="details.php"><h6>Peanuts Greatest Hits</h6></a>
                        </div>

                        <div class="catalog-genre">
                            <p class="mb-0">Vince Guaraliti</p>
                            <p>Vinyl</p>
                        </div>

                        <div class="catalog-actions">
                            <div class="play-pause d-flex justify-content-center">
                                <i class="fa fa-play cursor-pointer"></i>
                                <i class="fa fa-pause cursor-pointer"></i>
                            </div>
                            
                            <div class="my-1 spacer"></div>

                            <div class="cart-button">
                                <button class="btn btn-outline btn-outline-dark">Add</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="catalog-spacer"></div> <!-- adds space between the each row of records in the catalog -->

        <div class="row"> <!-- row 2 of the catalog -->
            <div class="col-md-4">
                <div class="catalog">
                    <div class="catalog-image">
                        <img src="./Images/pexels-matthias-groeneveld-4200745.jpg" alt="">
                    </div>

                    <div class="mx-2 spacer"></div>

                    <div class="catalog-details">
                        <div class="catalog-name">
                            <a href="details.php"><h6>Peanuts Greatest Hits</h6></a>
                        </div>

                        <div class="catalog-genre">
                            <p class="mb-0">Vince Guaraliti</p>
                            <p>Vinyl</p>
                        </div>

                        <div class="catalog-actions">
                            <div class="play-pause d-flex justify-content-center">
                                <i class="fa fa-play cursor-pointer"></i>
                                <i class="fa fa-pause cursor-pointer"></i>
                            </div>
                            
                            <div class="my-1 spacer"></div>

                            <div class="cart-button">
                                <button class="btn btn-outline btn-outline-dark">Add</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="catalog">
                    <div class="catalog-image">
                        <img src="./Images/pexels-matthias-groeneveld-4200745.jpg" alt="">
                    </div>

                    <div class="mx-2 spacer"></div>

                    <div class="catalog-details">
                        <div class="catalog-name">
                            <a href="details.php"><h6>Peanuts Greatest Hits</h6></a>
                        </div>

                        <div class="catalog-genre">
                            <p class="mb-0">Vince Guaraliti</p>
                            <p>Vinyl</p>
                        </div>

                        <div class="catalog-actions">
                            <div class="play-pause d-flex justify-content-center">
                                <i class="fa fa-play cursor-pointer"></i>
                                <i class="fa fa-pause cursor-pointer"></i>
                            </div>
                            
                            <div class="my-1 spacer"></div>

                            <div class="cart-button">
                                <button class="btn btn-outline btn-outline-dark">Add</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="catalog">
                    <div class="catalog-image">
                        <img src="./Images/pexels-matthias-groeneveld-4200745.jpg" alt="">
                    </div>

                    <div class="mx-2 spacer"></div>

                    <div class="catalog-details">
                        <div class="catalog-name">
                            <a href="details.php"><h6>Peanuts Greatest Hits</h6></a>
                        </div>

                        <div class="catalog-genre">
                            <p class="mb-0">Vince Guaraliti</p>
                            <p>Vinyl</p>
                        </div>

                        <div class="catalog-actions">
                            <div class="play-pause d-flex justify-content-center">
                                <i class="fa fa-play cursor-pointer"></i>
                                <i class="fa fa-pause cursor-pointer"></i>
                            </div>
                            
                            <div class="my-1 spacer"></div>

                            <div class="cart-button">
                                <button class="btn btn-outline btn-outline-dark">Add</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="my-5 spacer"></div>
    </div>
</body>
</html>