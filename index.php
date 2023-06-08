<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>nature</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>
  <body>

  <!-- navbar -->

  <nav class="navbar navbar-expand-lg bg-body-tertiary sticky-top" data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Nature</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link" href="#about">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#services">Services</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#gallary">Gallary</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#contact">Contact</a>
        </li>        
    
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

  <!-- carousel -->

<div id="carouselExampleIndicators" class="carousel slide">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/1.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/2.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/3.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

  <!-- about us -->

    <section class="my-5" id="about">
        <div class="py-5">
            <h2 class="text-center">About Us</h2>
        </div>


        <div class="container-fluid">
            <div class="row">
            <div class="col-lg-6 col-md-6 col-12">
                <img src="img/4.jpg" class="img-fluid aboutimg">
            </div> 
            <div class="col-lg-6 col-md-6 col-12">
               <h2 class="display-4">I am Harsh Gautam</h2>
               <p class="py-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum eaque explicabo laborum, aliquid rem amet vel quidem omnis atque eveniet.</p>
               <a href="about.php" class="btn btn-success">check more</a>
            </div> 
            </div>
        </div>
    </section>

    <!-- our services -->

    <section class="my-5" id="services">
        <div class="py-5">
            <h2 class="text-center">Our Services</h2>
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-12">
                        <div class="card" style="width: 18rem;">
                        <img src="img/5.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                        </div>
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                        <div class="card" style="width: 18rem;">
                        <img src="img/6.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                        </div>
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                        <div class="card" style="width: 18rem;">
                        <img src="img/17.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                        </div>
                </div>
                
            </div>
        </div>
        </section>

        <!-- our gallary -->

        <section class="my-5" id="gallary">
        <div class="py-5">
            <h2 class="text-center">Our Gallary</h2>
        </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-12">
                       <img src="img/8.jpg" class="img-fluid pb-4"> 
                    </div>
                    <div class="col-lg-4 col-md-4 col-12">
                       <img src="img/9.jpg" class="img-fluid pb-4"> 
                    </div>
                    <div class="col-lg-4 col-md-4 col-12">
                       <img src="img/10.jpg" class="img-fluid pb-4"> 
                    </div>
                    <div class="col-lg-4 col-md-4 col-12">
                       <img src="img/11.jpg" class="img-fluid pb-4"> 
                    </div>
                    <div class="col-lg-4 col-md-4 col-12">
                       <img src="img/12.jpg" class="img-fluid pb-4"> 
                    </div>
                    <div class="col-lg-4 col-md-4 col-12">
                       <img src="img/13.jpg" class="img-fluid pb-4"> 
                    </div>
                    <div class="col-lg-4 col-md-4 col-12">
                       <img src="img/14.jpg" class="img-fluid pb-4"> 
                    </div>
                    <div class="col-lg-4 col-md-4 col-12">
                       <img src="img/15.jpg" class="img-fluid pb-4"> 
                    </div>
                    <div class="col-lg-4 col-md-4 col-12">
                       <img src="img/18.jpg" class="img-fluid pb-4"> 
                    </div>
                </div>
            </div>

        </section>

        <!-- contact -->

        <section class="my-5" id="contact">
        <div class="py-5">
            <h2 class="text-center">Contact Us</h2>
        </div>

        <div class="w-50 m-auto">
            <form action="userinfo.php" method="post">
              <div class="form-group">
                <label>UserName</label>
                <input type="text" name="user" autocomplete="off" class="form-control">
              </div>
              <div class="form-group">
                <label>Email</label>
                <input type="text" name="email" autocomplete="off" class="form-control">
              </div>
              <div class="form-group">
                <label>Mobile No.</label>
                <input type="text" name="mobile" autocomplete="off" class="form-control">
              </div>
              <div class="form-group">
                <label>Comment</label>
              <textarea class="form-control" name="comment"></textarea>
              </div>
              <br>
              <button type="submit" class="btn btn-success">Submit</button>
            </form>                                                                                                                                               
        </div>


        </section>

        <!-- footer -->

        <footer>
          <h3 class="p-3 bg-dark text-white text-center">@harshGautam</h3>
        </footer>

















    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>