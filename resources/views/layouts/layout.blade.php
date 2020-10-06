<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="Description" content="Enter your description here"/>
        <link rel="shortcut icon" type="image/x-icon" href="assets/images/icons8-k-64.ico" />
        <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-alpha1/css/bootstrap.min.css"> -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
        @yield('style_css')
        <title> Kirana @yield('title')</title>
    </head>
<body>

    <nav class="navbar navbar-expand-md rounded-0 navbar-light ">
        <div class="container-fluid">
            <div class="brand">
                <a class="navbar-brand brand_logo" href="/"><img src="assets/images/icons8-k-64.png" alt="" class="d-inline-block align-top " width="50 my-auto" height="40">MAXX Kirana</a>
            </div>
            
                    <form class=" my-md-auto d-none d-md-flex search_form mx-md-auto ">
                        <input class="form-control mr-2 search_input text-white  " type="search" placeholder="Search" aria-label="Search">
                        <button class="btn border-0 search_submit " type="submit"><i class="fas fa-search"></i></button>
                    </form>
                    <ul class="navbar-nav mb-2 mb-md-0 ml-md-auto nav_item">
                        <li class="nav-item mr-md-3">
                            <a class="nav-link active" href="/login"><i class="fas fa-sign-in-alt mr-1"></i>Login</a>
                        </li>
                        <li class="nav-item mr-md-5">
                            <a class="nav-link" href="#"><i class="fas fa-user-plus mr-1"></i>SignUp</a>
                        </li>
                    </ul>
                            <!-- <img src="assets/images/41Jp8x8jhLL.jpg" class="img-responsive  image_profile  ml-md-auto" onclick="" alt=""> -->
                    
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText1" aria-controls="navbarText1" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                        </button>
        </div>

    </nav>

    <nav class="navbar cat_nav navbar-expand-md sticky-top navbar-light shadow">
        <div class="container-fluid">
            <div class="brand">
                <!-- <a class="navbar-brand brand_logo" href="#"><img src="assets/images/logo.png" alt="" class="d-inline-block align-top " width="50 my-auto" height="40">Shopify</a> -->
            </div>
            <form class="d-flex my-md-auto d-md-none search_form m-auto w-100">
                <input class="form-control mr-2 search_input text-white" type="search" placeholder="Search" aria-label="Search">
                <button class="btn border-0 search_submit" type="submit"><i class="fas fa-search"></i></button>
            </form>
            <!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button> -->
                <div class="collapse navbar-collapse text-center" id="navbarText1">
                    <ul class="navbar-nav mb-2 mb-md-0  nav_item m-auto">
                        <li class="nav-item mr-md-3">
                            <a class="nav-link btn Cat_btn">Electronic</a>
                        </li>
                        <li class="nav-item mr-md-3">
                            <a class="nav-link Cat_btn " href="#">Fashion</a>
                        </li>
                        <li class="nav-item mr-md-3">
                            <a class="nav-link Cat_btn " href="#">Gaming</a>
                        </li>
                        <li class="nav-item mr-md-3">
                            <a class="nav-link btn Cat_btn" href="">Home</a>
                        </li>
                        <li class="nav-item mr-md-3">
                            <a class="nav-link Cat_btn " href="#">Books</a>
                        </li>
                        <li class="nav-item mr-md-3">
                            <a class="nav-link Cat_btn " href="#">Entertaiment</a>
                        </li>
                        <li class="nav-item mr-md-3">
                            <a class="nav-link btn Cat_btn">Groosary</a>
                        </li>
                        <li class="nav-item mr-md-3">
                            <a class="nav-link Cat_btn " href="#">Bikes & Cars</a>
                        </li>
                    </ul>
               </div>
        </div>
    </nav>

    @yield('content')

    
    <footer class="text-light container-fluid w-100 mt-4  pt-5 .">
        <!-- <h3 class="text-capitalize text-center display-6">Copy Right</h3> -->
        <!-- <hr class="w-50 mx-auto"/> -->
        <div class="">
        <div class="row">
            <div class="col-11 col-md-12 col-lg-11  py-3  m-auto d-md-inline-flex">
                <!-- <div class="col-md-2 ">
                    <h1 class="h3 text-center">Social Media</h1>
                    <ul class="list-inline text-center">
                        <li class="list-inline-item bg-transparent mr-4"><i class="fab fa-facebook-f"></i></li>
                        <li class="list-inline-item bg-transparent mr-4"><i class="fab fa-twitter"></i></li>
                        <li class="list-inline-item  bg-transparent mr-4"><i class="fab fa-instagram"></i></li>
                        <li class="list-inline-item  bg-transparent mr-4"><i class="fab fa-reddit"></i></li>
                    </ul>
                </div> -->
                <div class="col-md-3 ">
                    <h1 class="h3 text-center text-uppercase">Shop <p class="lead text-capitalize">By Category</p></h1>
                    <ul class="list-group-flush text-left">
                        <li class="list-group-item bg-transparent">Dairy Product</li>
                        <li class="list-group-item bg-transparent">Food</li>
                        <li class="list-group-item bg-transparent">HouseHold Item</li>
                        <li class="list-group-item bg-transparent">Stationery</li>
                        <li class="list-group-item bg-transparent">Tools</li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <h1 class="h3 text-center text-uppercase">Support</h1>
                    <ul class="list-group-flush text-left">
                        <li class="list-group-item bg-transparent">Store Locator</li>
                        <li class="list-group-item bg-transparent">Order Status</li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <ul class="list-group-flush text-left">
                        <h1 class="h3 text-center text-uppercase">Store</h1>
                        <li class="list-group-item bg-transparent">Customer Service</li>
                        <li class="list-group-item bg-transparent">Term of Use</li>
                        <li class="list-group-item bg-transparent">Privacy</li>
                        <li class="list-group-item bg-transparent">Careers</li>
                        <li class="list-group-item bg-transparent">About</li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <h1 class="h3 text-center text-uppercase">Contact</h1>
                    <ul class="list-group-flush text-left">
                        <li class="list-group-item bg-transparent">Email <b class="">Rathodriteshrock@gmail.com</b> </li>
                        <li class="list-group-item bg-transparent">Telephone No. <p>+91 873-405-1728</p></li>
                        <li class="list-group-item bg-transparent">Address <br><b>119,shree ram nagar soc., Dhakwada, Gujarat, 396321</b></li>
                        <li class="list-group-item bg-transparent">Hours <br>M - F 6.00am - 8.00pm IST</li>
                    </ul>
                </div>
            
            </div>
            <div class="col-11 col-md-12 col-lg-11 my-4 d-md-inline-flex ">
                <div class="col-md-4 text-center">
                    <h3 class="text-uppercase">Store Location</h3>
                    <p class="">Find Store at Your Nearest Location</p>
                    <a href="http://" class="btn btn-danger px-5 py-2">Find a Store</a>
                </div>
                <div class="col-md-4 ">
                    <h3 class=" text-center text-uppercase mt-3 mt-md-0">Social Media</h3>
                    <ul class="list-inline text-center mt-3">
                        <li class="list-inline-item bg-transparent mr-4"><i class="fab  fa-facebook fa-2x "></i></li>
                        <li class="list-inline-item bg-transparent mr-4"><i class="fab fa-twitter fa-2x"></i></li>
                        <li class="list-inline-item  bg-transparent mr-4"><i class="fab fa-instagram fa-2x"></i></li>
                        <li class="list-inline-item  bg-transparent mr-4"><i class="fab fa-reddit fa-2x"></i></li>
                    </ul>
                </div>
                <div class="col-md-4 text-left">
                    <h3 class="text-uppercase">Subcribe</h3>
                    <p class=" text-capitalize">receive product news and update in your inbox</p>
                    <div class="form d-flex search_form">
                      <label for="#email"></label>
                      <input type="email" class="form-control search_input" name="" id="email" aria-describedby="emailHelpId" placeholder="Enter your Email">
                        <button type="submit" class="px-2 btn mr-1"><i class="fa fa-check text-white" aria-hidden="true"></i></button>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </footer>
    
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-alpha1/js/bootstrap.min.js"></script> -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
</body>
</html>