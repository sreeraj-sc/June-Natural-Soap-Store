<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JUNE</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="style/home_page.css" type="text/css">
    <link rel="icon" href="images/June-logo-3.png" type="image/png" sizes="16x16">
    <style>
      .search-bar {
        position: absolute;
        top: 55px;
        left: 0;
        width: 100%;
        z-index: 2;
      }
      .card-img-top {
        max-height: 30vh;
      }
      .card-body
      {
        color: blue;
      }
      .carousel-inner {
        height: 60vh;
      }
      .card-group
      {
        max-width: 211vh;
      }
      
      .card
      {
        background: #fff;
      }
    </style>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
            <div class="container">
                <a class="navbar-brand" href="#">June</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">    
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="">Home</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Shop
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="">Category 1</a></li>
                                <li><a class="dropdown-item" href="">Category 2</a></li>
                                <li><a class="dropdown-item" href="">Category 3</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <form class="d-flex search-bar justify-content-center align-items-center mt-1">
          <input class="form-control w-50" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
    </header>
    <section>
      <div class="bd-example">
        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="soap/Snapchat-1440625774.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="soap/Snapchat-1758077557.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="soap/Snapchat-2081809383.jpg" class="d-block w-100" alt="...">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
      <br><br>
      <div class="card-group row">
        <div class="card m-4 col d-flex justify-content-center align-items-center">
          <img src="soap/Snapchat-167481618.jpg" class="card-img-top mt-2" alt="...">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <a href="#" class="btn btn-primary">Buy now</a><br><br>
            <a href="#" class="btn btn-primary">Add to cart</a>
          </div>
        </div>
        <div class="card m-4 col d-flex justify-content-center align-items-center">
          <img src="soap/Snapchat-2094136855.jpg" class="card-img-top mt-2" alt="...">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <a href="#" class="btn btn-primary">Buy now</a><br><br>
            <a href="#" class="btn btn-primary">Add to cart</a>
          </div>
        </div>
        <div class="card m-4 col d-flex justify-content-center align-items-center">
          <img src="soap/Snapchat-491644450.jpg" class="card-img-top mt-2" alt="...">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <a href="#" class="btn btn-primary">Buy now</a><br><br>
            <a href="#" class="btn btn-primary">Add to cart</a>
          </div>
        </div>
        <div class="card m-4 col d-flex justify-content-center align-items-center">
          <img src="soap/Snapchat-491644450.jpg" class="card-img-top mt-2" alt="...">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <a href="#" class="btn btn-primary">Buy now</a><br><br>
            <a href="#" class="btn btn-primary">Add to cart</a>
          </div>
        </div>
      </div>
      <div class="card-group row">
        <div class="card m-4 col d-flex justify-content-center align-items-center">
          <img src="soap/Snapchat-167481618.jpg" class="card-img-top mt-2" alt="...">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <a href="#" class="btn btn-primary">Buy now</a><br><br>
            <a href="#" class="btn btn-primary">Add to cart</a>
          </div>
        </div>
        <div class="card m-4 col d-flex justify-content-center align-items-center">
          <img src="soap/Snapchat-2094136855.jpg" class="card-img-top mt-2" alt="...">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <a href="#" class="btn btn-primary">Buy now</a><br><br>
            <a href="#" class="btn btn-primary">Add to cart</a>
          </div>
        </div>
        <div class="card m-4 col d-flex justify-content-center align-items-center">
          <img src="soap/Snapchat-491644450.jpg" class="card-img-top mt-2" alt="...">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <a href="#" class="btn btn-primary">Buy now</a><br><br>
            <a href="#" class="btn btn-primary">Add to cart</a>
          </div>
        </div>
        <div class="card m-4 col d-flex justify-content-center align-items-center">
          <img src="soap/Snapchat-491644450.jpg" class="card-img-top mt-2" alt="...">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <a href="#" class="btn btn-primary">Buy now</a><br><br>
            <a href="#" class="btn btn-primary">Add to cart</a>
          </div>
        </div>
      </div>
      <div class="card-group row">
        <div class="card m-4 col d-flex justify-content-center align-items-center">
          <img src="soap/Snapchat-167481618.jpg" class="card-img-top mt-2" alt="...">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <a href="#" class="btn btn-primary">Buy now</a><br><br>
            <a href="#" class="btn btn-primary">Add to cart</a>
          </div>
        </div>
        <div class="card m-4 col d-flex justify-content-center align-items-center">
          <img src="soap/Snapchat-2094136855.jpg" class="card-img-top mt-2" alt="...">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <a href="#" class="btn btn-primary">Buy now</a><br><br>
            <a href="#" class="btn btn-primary">Add to cart</a>
          </div>
        </div>
        <div class="card m-4 col d-flex justify-content-center align-items-center">
          <img src="soap/Snapchat-491644450.jpg" class="card-img-top mt-2" alt="...">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <a href="#" class="btn btn-primary">Buy now</a><br><br>
            <a href="#" class="btn btn-primary">Add to cart</a>
          </div>
        </div>
        <div class="card m-4 col d-flex justify-content-center align-items-center">
          <img src="soap/Snapchat-491644450.jpg" class="card-img-top mt-2" alt="...">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <a href="#" class="btn btn-primary">Buy now</a><br><br>
            <a href="#" class="btn btn-primary">Add to cart</a>
          </div>
        </div>
      </div>
      <div class="card-group row">
        <div class="card m-4 col d-flex justify-content-center align-items-center">
          <img src="soap/Snapchat-167481618.jpg" class="card-img-top mt-2" alt="...">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <a href="#" class="btn btn-primary">Buy now</a><br><br>
            <a href="#" class="btn btn-primary">Add to cart</a>
          </div>
        </div>
        <div class="card m-4 col d-flex justify-content-center align-items-center">
          <img src="soap/Snapchat-2094136855.jpg" class="card-img-top mt-2" alt="...">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <a href="#" class="btn btn-primary">Buy now</a><br><br>
            <a href="#" class="btn btn-primary">Add to cart</a>
          </div>
        </div>
        <div class="card m-4 col d-flex justify-content-center align-items-center">
          <img src="soap/Snapchat-491644450.jpg" class="card-img-top mt-2" alt="...">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <a href="#" class="btn btn-primary">Buy now</a><br><br>
            <a href="#" class="btn btn-primary">Add to cart</a>
          </div>
        </div>
        <div class="card m-4 col d-flex justify-content-center align-items-center">
          <img src="soap/Snapchat-491644450.jpg" class="card-img-top mt-2" alt="...">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <a href="#" class="btn btn-primary">Buy now</a><br><br>
            <a href="#" class="btn btn-primary">Add to cart</a>
          </div>
        </div>
      </div>
      <div class="card-group row">
        <div class="card m-4 col d-flex justify-content-center align-items-center">
          <img src="soap/Snapchat-167481618.jpg" class="card-img-top mt-2" alt="...">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <a href="#" class="btn btn-primary">Buy now</a><br><br>
            <a href="#" class="btn btn-primary">Add to cart</a>
          </div>
        </div>
        <div class="card m-4 col d-flex justify-content-center align-items-center">
          <img src="soap/Snapchat-2094136855.jpg" class="card-img-top mt-2" alt="...">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <a href="#" class="btn btn-primary">Buy now</a><br><br>
            <a href="#" class="btn btn-primary">Add to cart</a>
          </div>
        </div>
        <div class="card m-4 col d-flex justify-content-center align-items-center">
          <img src="soap/Snapchat-491644450.jpg" class="card-img-top mt-2" alt="...">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <a href="#" class="btn btn-primary">Buy now</a><br><br>
            <a href="#" class="btn btn-primary">Add to cart</a>
          </div>
        </div>
        <div class="card m-4 col d-flex justify-content-center align-items-center">
          <img src="soap/Snapchat-491644450.jpg" class="card-img-top mt-2" alt="...">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <a href="#" class="btn btn-primary">Buy now</a><br><br>
            <a href="#" class="btn btn-primary">Add to cart</a>
          </div>
        </div>
      </div>
    </section>
    <footer>
      <div class="container-fluid footer row d-flex justify-content-center align-items-center">
        <h4>Contact Us</h4><br>
        <div class="col mt-5">
          <a href="https://www.facebook.com/sreeraj.vfc.1"><img src="images/facebook.png" alt="" class="facebook"></a>
        </div>
        <div class="col mt-5">
          <a href="https://github.com/sreeraj-sc"><img src="images/github.png" alt="" class="github"></a>
        </div>
        <div class="col mt-5">
          <a href="https://www.instagram.com/sreeraj.py/"><img src="images/instagram.png" alt="" class="instagram"></a>
        </div>
        <div class="col mt-5">
          <a href="https://twitter.com/"><img src="images/twitter.png" alt="" class="twitter"></a>
        </div>
      </div>
    </footer>
    <script src="script/script.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>