<?php
include "db.php";
?>


<!doctype html>

<html lang="en">
    <head>
        <title>Title</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />
        <style>
            body ,nav,footer{
                background-image: linear-gradient( to right,black , rgb(137, 37, 37), black);
            }
            .nav-item{
                color: black;
            }
            h4{
                color: red;
            }
            .card-title{
                color: red;
            }   
        </style>
 

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
    </head>

    <body class="bg-black">
        <header>
            <!-- place navbar here -->
             <nav
                class="navbar navbar-expand-sm navbar-dark bg-black"
             >
             <img
                height="40px"
                width="80px"
                src="https://stallionguns.com/images/logo.png"
                class="img-fluid rounded mx-5"
                alt=""
             />
             
               
                <button
                    class="navbar-toggler d-lg-none"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#collapsibleNavId"
                    aria-controls="collapsibleNavId"
                    aria-expanded="false"
                    aria-label="Toggle navigation"
                ></button>
                <div class="collapse navbar-collapse text-center" id="collapsibleNavId">
                    =  <ul class="navbar-nav w-100 justify-content-around mt-2 mt-lg-0 text-center" style="color: aliceblue;">

                            
                            <li class="nav-item ">
                                <a class="nav-link"  style="color: rgb(171, 42, 42);font-family: 'Lucida Sans' ; font-size: larger ; font-weight: 300;" class="" href="home.php">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link"  style="color: aliceblue;font-family: 'Lucida Sans' ; font-size: larger ; font-weight: 300;" href="product.php">Product</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link"  style="color: aliceblue;font-family: 'Lucida Sans' ; font-size: larger ; font-weight: 300;" href="product_details.html">Product Detail</a>
                            </li> 
                            <li class="nav-item">
                                <a class="nav-link"  style="color: aliceblue;font-family: 'Lucida Sans' ; font-size: larger ; font-weight: 300;" href="about.html">About Us</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link"  style="color: aliceblue;font-family: 'Lucida Sans' ; font-size: larger ; font-weight: 300;" href="contact.html">Contact Us</a>
                            </li>   
                              
                            <li class="nav-item">
                                <a class="nav-link" style="color: aliceblue;font-family: 'Lucida Sans' ; font-size: larger ; font-weight: 300;" href="registration.php">Registration</a>
                            </li>  
                              
                            <li class="nav-item">
                                <a class="nav-link" style="color: aliceblue;font-family: 'Lucida Sans' ; font-size: larger ; font-weight: 300;"  href="login.php">Login</a>
                            </li>  
                             
                            
                        </ul>
                    <form class="d-flex my-2 my-lg-0" action="registration.html">
                        
                        <button class="btn btn-outline-success m-4" type="submit">
                            Register
                        </button>
                    </form>
                </div>
            </nav>
            
        </header>
        <main>
            <div
                class="container justify-content-center w-50 my-2 col-10"
            >
            <div id="carouselId" class="carousel slide bg-red" data-bs-ride="carousel">
                <ol class="carousel-indicators">
                    <li
                        data-bs-target="#carouselId"
                        data-bs-slide-to="0"
                        class="active"
                        aria-current="true"
                        aria-label="First slide"
                    ></li>
                    <li
                        data-bs-target="#carouselId"
                        data-bs-slide-to="1"
                        aria-label="Second slide"
                    ></li>
                    <li
                        data-bs-target="#carouselId"
                        data-bs-slide-to="2"
                        aria-label="Third slide"
                    ></li>
                </ol>
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                        <img
                            src="https://stallionguns.com/images/product/revolver/cs/3inch-revolver-stallion1.png"
                            class="w-100 d-block"
                            height="500px"
                            alt="First slide"
                        />
                    </div>
                    <div class="carousel-item">
                        <img
                            src="https://stallionguns.com/images/product/pistol/stallion-pistol-s32-black.png"
                            class="w-80 d-block"
                            height="500px"
                            alt="Second slide"
                        />
                    </div>
                    <div class="carousel-item">
                        <img
                            src="https://stallionguns.com/images/product/pistol/c32.png"
                            class="w-100 d-block"
                            height="500px"
                            alt="Third s    lide"
                        />
                    </div>
                </div>
                <button
                    class="carousel-control-prev"
                    type="button"
                    data-bs-target="#carouselId"
                    data-bs-slide="prev"
                >
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button
                    class="carousel-control-next"
                    type="button"
                    data-bs-target="#carouselId"
                    data-bs-slide="next"
                >
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>



          
           
           
            </div>
            

            </div>
            <div
                class="container w-100 bg-BLACK "
            >
                <div
                    class="row justify-content-center align-items-center g-2 w-100"
                >
                    <div class="card col-3 bg-black text-white border-white mx-1">
                <img class="card-img-top" src="https://stallionguns.com/images/product/semiautomatic/sx-401-fsp-21.png" alt="Title" />
                <div class="card-body">
                    <h4 class="card-title  text-danger   ">SEMI AUTOMATICSX-401-FSP</h4>
                    <p class="card-text">Elevate your shooting experience with the Stallion SX-401-FSP-21"Inch, India's lightest semiautomatic shotgun designed for unparalleled performance, reliability, and versatility. Crafted with precision engineering and cutting-edge technology, the SX-401-FSP-21"Inch embodies excellence in design and functionality, making it the ultimate choice for discerning shooters and enthusiasts alike.</p>
                </div>
            </div>

               <div class="card col-3 bg-black text-white border-white mx-1">
                <img class="card-img-top" src="https://stallionguns.com/images/product/semiautomatic/semi-407-grid.png" alt="Title" />
                <div class="card-body">
                    <h4 class="card-title text-danger">Stallion SX-407-FSP-21"Inch</h4>
                    <p class="card-text">This exceptional firearm combines advanced features with rugged durability to deliver va shotgun that excels in any shooting environment. Its semi-automatic inertia action mechanism ensures smooth and consistent cycling, allowing for rapid follow-up shots and enhanced shooting efficiency. Whether navigating dense forests, stalking elusive game, or engaging in competitive shooting sports, the SX-407 rises to the occasion with unwavering reliability and precision.</p>
                </div>
            </div>


                    <div class="card col-3 bg-black text-white border-white mx-1">
                <img class="card-img-top" src="https://stallionguns.com/images/product/semiautomatic/sx-401-fsp-28-front.png" alt="Title" />
                <div class="card-body">
                    <h4 class="card-title text-danger">Stallion SX-401-FSP-28"Inch</h4>
                    <p class="card-text">Crafted for precision and reliability, the Stallion SX-401-FSP-28"Inch sets the standard for excellence in semi-automatic shotguns. Its innovative inertia action mechanism ensures smooth and reliable operation, while the 12-gauge caliber and 3-inch chamber provide versatility and stopping power in any shooting scenario.
Designed with the shooter in mind,</p>
                </div>
            </div>


                 
                </div>
                
            </div>
            
            
            
        </main>
        <footer 
        class="bg-black  p-2 text-center text-white  m-1">
            <!-- place footer here -->
            <hr>
            <hr>
             <span style="color: black; font-size: larger; font-weight: 500;">&copy; Stallion store , All Rights Reserved By Charlie</span>
             <hr>
             <hr>
        </footer>
        <!-- Bootstrap JavaScript Libraries -->
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
    </body>
</html>




  
             
           
            
            
          