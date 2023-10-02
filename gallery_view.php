<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <style>
    .ecommerce-gallery-main-img {
  max-width: 50vh;
  max-height: 60vh;
}

.ecommerce-gallery-thumb {
  max-width: 30vh;
  max-height: 20vh;
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
    </header>
  <section>
  <div class="ecommerce-gallery" data-mdb-zoom-effect="true" data-mdb-auto-height="true">
  <div class="row py-3 ml-5 shadow-5">
    <div class="mb-1 col-6">
      <div class="lightbox">
        <img
          src="soap/Snapchat-506861195.jpg"
          alt="Gallery image 1"
          class="ecommerce-gallery-main-img active w-100 rounded"
        />
      </div>
    </div>
    <div class="col-6 my-auto d-block">
      <a href="#" class="btn btn-primary">Buy now</a><br><br>
      <a href="#" class="btn btn-primary">Add to cart</a>
    </div>
    <div class="col-1 mt-3">
      <img
        src="soap/Snapchat-85506643.jpg"
        data-mdb-img="soap/Snapchat-85506643.jpg"
        alt="Gallery image 1"
        class="active w-100 rounded ecommerce-gallery-thumb mx-auto d-block"
      />
    </div>
    <div class="col-1 mt-3">
      <img
        src="soap/Snapchat-600397175.jpg"
        data-mdb-img="soap/Snapchat-600397175.jpg"
        alt="Gallery image 2"
        class="w-100 rounded ecommerce-gallery-thumb mx-auto d-block"
      />
    </div>
    <div class="col-1 mt-3">
      <img
        src="soap/Snapchat-666316410.jpg"
        data-mdb-img="soap/Snapchat-666316410.jpg"
        alt="Gallery image 3"
        class="w-100 rounded ecommerce-gallery-thumb mx-auto d-block"
      />
    </div>
    <div class="col-1 mt-3">
      <img
        src="soap/Snapchat-859494346.jpg"
        data-mdb-img="soap/Snapchat-859494346.jpg"
        alt="Gallery image 4"
        class="w-100 rounded float-left ecommerce-gallery-thumb"
      />
    </div>
  </div>
</div>
  </section>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>