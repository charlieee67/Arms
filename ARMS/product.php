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
                                <a class="nav-link"  style="color: aliceblue;font-family: 'Lucida Sans' ; font-size: larger ; font-weight: 300;" class="" href="home.php">Home</a>
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
            <hr>
            <center><h3 class="text-white " style="font-family: 'Franklin Gothic Medium';">Products</h3></center>
            <hr>
           <div class="container col-10 text-center text-white">
    <div class="row justify-content-center align-items-center g-2">
<div class="container col-10 text-center text-white">

    <!-- ROW 1 -->
    <div class="row justify-content-center align-items-center g-2">

        <div class="col">
            <img src="https://stallionguns.com/images/product/pistol/stallion-pistol-s32.png"
                 class="img-fluid rounded-top">
            <p>Stallion S-32 Pistol</p>
            <form action="add_to_cart.php" method="post">
                <input type="hidden" name="product" value="Stallion S-32 Pistol">
                <button class="btn btn-dark my-2" type="submit">Add to Cart</button>
            </form>
        </div>

        <div class="col">
            <img src="https://stallionguns.com/images/product/pistol/S-32X.png"
                 class="img-fluid rounded-top">
            <p>Stallion S-32X</p>
            <form action="add_to_cart.php" method="post">
                <input type="hidden" name="product" value="Stallion S-32X">
                <button class="btn btn-dark my-2" type="submit">Add to Cart</button>
            </form>
        </div>

        <div class="col">
            <img src="https://stallionguns.com/images/product/pistol/st32/st-32-pistol-1.png"
                 class="img-fluid rounded-top">
            <p>Stallion ST-32 Pistol</p>
            <form action="add_to_cart.php" method="post">
                <input type="hidden" name="product" value="Stallion ST-32 Pistol">
                <button class="btn btn-dark my-2" type="submit">Add to Cart</button>
            </form>
        </div>

    </div>

    <hr>

    <!-- ROW 2 -->
    <div class="row justify-content-center align-items-center g-2">

        <div class="col">
            <img src="https://stallionguns.com/images/product/pistol/c32.png"
                 class="img-fluid rounded-top">
            <p>Pistol C-32</p>
            <form action="add_to_cart.php" method="post">
                <input type="hidden" name="product" value="Pistol C-32">
                <button class="btn btn-dark my-2" type="submit">Add to Cart</button>
            </form>
        </div>

        <div class="col">
            <img src="https://stallionguns.com/images/product/pistol/sc-32-pistol-2.png"
                 class="img-fluid rounded-top">
            <p>Stallion Pistol SC-32</p>
            <form action="add_to_cart.php" method="post">
                <input type="hidden" name="product" value="Stallion Pistol SC-32">
                <button class="btn btn-dark my-2" type="submit">Add to Cart</button>
            </form>
        </div>

        <div class="col">
            <img src="https://stallionguns.com/images/product/pumpaction/zx-250-tsp/zx-250-tsp-front.png"
                 class="img-fluid rounded-top">
            <p>Pump Action Shotgun ZX-250-TSP</p>
            <form action="add_to_cart.php" method="post">
                <input type="hidden" name="product" value="Pump Action Shotgun ZX-250-TSP">
                <button class="btn btn-dark my-2" type="submit">Add to Cart</button>
            </form>
        </div>

    </div>

    <hr>

    <!-- ROW 3 -->
    <div class="row justify-content-center align-items-center g-2">

        <div class="col">
            <img src="https://stallionguns.com/images/product/revolver/stallion-revolver-CC-1.png"
                 class="img-fluid rounded-top">
            <p>Pump Action Shotgun PX-605-PGP</p>
            <form action="add_to_cart.php" method="post">
                <input type="hidden" name="product" value="Pump Action Shotgun PX-605-PGP">
                <button class="btn btn-dark my-2" type="submit">Add to Cart</button>
            </form>
        </div>

        <div class="col">
            <img src="https://stallionguns.com/images/product/pumpaction/PX-601-fsp.png"
                 class="img-fluid rounded-top">
            <p>Stallion PX-601-FSP</p>
            <form action="add_to_cart.php" method="post">
                <input type="hidden" name="product" value="Stallion PX-601-FSP">
                <button class="btn btn-dark my-2" type="submit">Add to Cart</button>
            </form>
        </div>

        <div class="col">
            <img src="https://stallionguns.com/images/product/pumpaction/FX-605-PGP.png"
                 class="img-fluid rounded-top">
            <p>Stallion Revolver: Classic Long-1</p>
            <form action="add_to_cart.php" method="post">
                <input type="hidden" name="product" value="Stallion Revolver Classic Long-1">
                <button class="btn btn-dark my-2" type="submit">Add to Cart</button>
            </form>
        </div>
    </div>
</div>




    <hr>

 <div class="container col-10 text-center text-white">
    <div class="row justify-content-center align-items-center g-2">

        <!-- Product 4 -->
        <div class="col">
            <img
                src="https://stallionguns.com/images/product/pistol/c32.png"
                class="img-fluid rounded-top"
                alt=""
            />
            <p>Pistol C-32</p>

            <form action="add_to_cart.php" method="post">
                <input type="hidden" name="product" value="Pistol C-32">
                <button type="submit" class="btn btn-dark my-2">
                    Add to Cart
                </button>
            </form>
        </div>

        <!-- Product 5 -->
        <div class="col">
            <img
                src="https://stallionguns.com/images/product/pistol/sc-32-pistol-2.png"
                class="img-fluid rounded-top"
                alt=""
            />
            <p>Stallion Pistol SC-32</p>

            <form action="add_to_cart.php" method="post">
                <input type="hidden" name="product" value="Stallion Pistol SC-32">
                <button type="submit" class="btn btn-dark my-2">
                    Add to Cart
                </button>
            </form>
        </div>

        <!-- Product 6 -->
        <div class="col">
            <img
                src="https://stallionguns.com/images/product/pumpaction/zx-250-tsp/zx-250-tsp-front.png"
                class="img-fluid rounded-top"
                alt=""
            />
            <p>Pump Action Shotgun ZX-250-TSP</p>

            <form action="add_to_cart.php" method="post">
                <input type="hidden" name="product" value="Pump Action Shotgun ZX-250-TSP">
                <button type="submit" class="btn btn-dark my-2">
                    Add to Cart
                </button>
            </form>
        </div>
            <div class="mt-4">
        <a href="cart.php" class="btn btn-warning">View Cart</a>
    </div>
    </div>
</div>


<hr>
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
