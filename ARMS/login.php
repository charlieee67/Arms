<?php
    include "db.php";

    if($_SERVER["REQUEST_METHOD"]==="POST"){
        $username=$_POST["username"];
        $pass=$_POST["password"];
    }

    $sql=$conn->prepare("select password from register where username=?");
    $sql->bind_param("s",$username);
    $sql->execute();
    $sql->store_result();
    $sql->bind_result($password);
    
    if($sql->fetch()&& password_verify($pass,$password)){
        header("location:home.php");
    }else{
        echo "invalid Credentials ";
    }

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
            input{
                color: white;
                background-image: linear-gradient(to right,rgb(61, 56, 56) ,orange  , rgb(61, 56, 56) ,orange,);
            }   
            label{
                color: black;
                font-weight: 500;
            }
            button{
                color: white;
                font-weight: 600;
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
            <center><h3 class="text-white " style="font-family: 'Franklin Gothic Medium';">Log in</h3></center>
            <hr>
                <div
                    class="container text-center "
                >

                <form method="POST" class="m-2 ">
                    <div class="form-floating m-4">
                        <input
                            type="username"x`
                            class="form-control"
                            name="username"
                            id="formId1"
                            placeholder=""
                        />
                        <label for="formId1">User-name</label>
                    </div>
                    
                    <div class="form-floating m-4">
                        <input
                            type="password"
                            class="form-control"
                            name="password"
                            id="formId1"
                            placeholder=""
                        />
                        <label for="formId1">Password</label>
                    </div>
                    <button
                    
                        type="submit"
                        class="btn btn-warning text-cnter m-4 px-5 "
                    >
                        Log in
                    </button>
                    
                    

                </form>
                
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

