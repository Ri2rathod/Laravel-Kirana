@extends('layouts.layout')

@section('style_css')
    <link rel="stylesheet" href="assets/css/style.css">
@endsection
@section('title','Product')
    @section('content')
        
        <section class="mt-auto ">
            <div class="container-fluid">
                <div class="row mr-auto py-5 heading">

                        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                            
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div class="display-4">
                                        <p>Welcome To Shopify We Provided Best Quality Product With Best Price</p>
                                    </div>
                                </div>
                                <div class="carousel-item"> 
                                    <div class="display-4">
                                        <p>Welcome To Shopify We Provided Best Quality Product With Best Price</p>
                                    </div>
                                </div>
                                <div class="carousel-item"> 
                                    <div class="display-4">
                                        <p>Welcome To Shopify We Provided Best Quality Product With Best Price</p>
                                    </div>
                                </div>
                            </div>
                            <div class="header_carousel_btn">
                                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                    <span class="carousel-control-prev-icon  " aria-hidden="true"></span>
                                    <!-- <span class="sr-only">Previous</span> -->
                                </a>
                            </div>
                            <a class="carousel-control-next  " href="#carouselExampleIndicators" role="button" data-slide="next">
                                <span class="carousel-control-next-icon " aria-hidden="true"></span>
                                <!-- <span class="sr-only">Next</span> -->
                            </a>
                        </div>

                    </div>
                    
                </div>
            </div>
        </section>
        
        <div class="container-fluid">
            <div class=" shadow bg-body px-5  ">
                <!-- <a href="http://"><i class="fa fa-arrow-left fa-2x " aria-hidden="true"></i></a> -->
                <div class="cat_name border-bottom my-2 py-2 px-2 d-flex justify-content-between">
                    <h4 class="">Home Essentials</h4>
                    <a href="http://" target="_blank" class="btn btn-primary px-3" rel="noopener noreferrer">View All</a>
                </div>
                <div class="row pb-4">
                    
                    <div class="col-12 col-sm-6  col-md-4  col-lg-3">
                        <div class="card">
        
                          <img class="card-img" src="https://s3.us-west-002.backblazeb2.com/Grid50/2017/12/PDgiEauw-white-background-prudct-photography-example.jpg" alt="Vans">
                          
                          <div class="card-body">
                            <h5 class="card-title">Vans Sk8-Hi MTE Shoes</h5>
                            <p class="card-subtitle  mb-2 text-muted">Style: VA33TXRJ5</p>
                            
                            <div class="options d-flex flex-fill">
                                <select class="form-select " aria-label="Default select example">
                                    <option selected disabled>Choose Size</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                  </select>
                                  
                            </div>
                            <div class="buy d-flex justify-content-between align-items-center">
                              <div class="price text-success"><h5 class="mt-4">₹1250.00/-</h5></div>
                               <a href="#" class="btn btn-danger w-25 mt-3 p-auto rounded"><i class="fas fa-shopping-cart"></i></a>
                            </div>
                          </div>
                        </div>
                        
                    </div>
                    <div class="col-12 col-sm-6  col-md-4 col-lg-3">
                    <div class="card">
    
                        <img class="card-img" src="https://cdn.shortpixel.ai/client/q_glossy,ret_img,w_1000/https://www.powproductphotography.com/app/uploads/2020/03/drink-photography-0008.jpg" alt="Vans">
                        
                        <div class="card-body">
                        <h5 class="card-title">Vans Sk8-Hi MTE Shoes</h5>
                        <p class="card-subtitle mb-2 text-muted">Style: VA33TXRJ5</p>
                        <div class="options d-flex flex-fill">
                            <select class="form-select " aria-label="Default select example">
                                <option selected disabled>Choose Color</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                                </select>
                                
                        </div>
                        <div class="buy d-flex justify-content-between align-items-center">
                            <div class="price text-success"><h5 class="mt-4">₹1250.00/-</h5></div>
                            <a href="#" class="btn btn-danger w-25 mt-3 rounded"><i class="fas fa-shopping-cart"></i></a>
                        </div>
                        </div>
                    </div>
                    
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                    <div class="card">
    
                        <img class="card-img" src="https://i.pinimg.com/originals/a4/43/62/a443629424b3da1a5a9ef3c5332a7def.jpg" alt="Vans">
                        
                        <div class="card-body">
                        <h5 class="card-title">Vans Sk8-Hi MTE Shoes</h5>
                        <p class="card-subtitle mb-2 text-muted">Style: VA33TXRJ5</p>
                        <div class="options d-flex flex-fill">
                            <select class="form-select " aria-label="Default select example">
                                <option selected disabled>Color</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                                </select>
                                
                        </div>
                        <div class="buy d-flex justify-content-between align-items-center">
                            <div class="price text-success"><h5 class="mt-4">₹1250.00/-</h5></div>
                            <a href="#" class="btn btn-danger w-25 mt-3 rounded"><i class="fas fa-shopping-cart"></i></a>
                        </div>
                        </div>
                    </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                    <div class="card">
    
                        <img class="card-img" src="https://cdn.shortpixel.ai/client/q_glossy,ret_img,w_1000/https://www.powproductphotography.com/app/uploads/2020/03/drink-photography-0008.jpg" alt="Vans">
                        
                        <div class="card-body">
                        <h5 class="card-title">Vans Sk8-Hi MTE Shoes</h5>
                        <p class="card-subtitle mb-2 text-muted">Style: VA33TXRJ5</p>
                        <div class="options d-flex flex-fill">
                            <select class="form-select " aria-label="Default select example">
                                <option selected disabled>Color</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                                </select>
                                
                        </div>
                        <div class="buy d-flex justify-content-between align-items-center">
                            <div class="price text-success"><h5 class="mt-4">₹1250.00/-</h5></div>
                            <a href="#" class="btn btn-danger w-25 mt-3 rounded"><i class="fas fa-shopping-cart"></i></a>
                        </div>
                        </div>
                    </div>
                    
                    </div>
                </div>
            </div>
        </div>

        <div id="carouselExampleCaptions" class="carousel slide container-fluid " data-ride="carousel">

            <ol class="carousel-indicators">
              <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="https://www.motherdairy.com/images/campaign/UHT%20Milk.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                </div>
              </div>
              <div class="carousel-item">
                <img src="https://www.motherdairy.com/images/campaign/LSL%20Banner%20mail.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                </div>
              </div>
             
            </div>
            <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
            </a>
          </div>

    @endsection

