<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Keren || By NURUL KHATAMI</title>
    <link rel="shortcut icon" href="images/aj.jpeg" type="image/x-icon">
<link rel="stylesheet" href="css/style.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
  <style>
    
    body{
    margin-top:0px;
    color: #1a202c;
    text-align: left;
    background-color: #e2e8f0;    
}
        nav {
    background: linear-gradient(to bottom, #33ccff 0%, #ff99cc 100%);
    -webkit-box-shadow: 5px 5px 8px #888;
-moz-box-shadow: 5px 5px 5px #888;
box-shadow: 5px 5px 5px #888;
}
nav {background-image: linear-gradient(to right, rgb(236, 139, 155), rgb(0, 174, 255));}
  </style>

   <header>
    <div class="collapse bg-dark" id="navbarHeader">
      <div class="container">
        <div class="row">
          <div class="col-sm-8 col-md-7 py-4">
            <h4 class="text-white">About</h4>
            <p class="text-muted">Add some information about the album below, the author, or any other background
              context. Make it a few sentences long so folks can pick up some informative tidbits. Then, link them off
              to some social networking sites or contact information.</p>
          </div>
          <div class="col-sm-4 offset-md-1 py-4">
            <h4 class="text-white">Contact</h4>
            <ul class="list-unstyled">
              <li><a href="#" class="text-white">Follow on Twitter</a></li>
              <li><a href="#" class="text-white">Like on Facebook</a></li>
              <li><a href="#" class="text-white">Email me</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="navbar navbar-dark bg-dark shadow-sm">
      <div class="container">
        <a href="#" class="navbar-brand d-flex align-items-center">
          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor"
            stroke-linecap="round" stroke-linejoin="round" stroke-width="2" aria-hidden="true" class="mr-2"
            viewBox="0 0 24 24">
            <path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z" />
            <circle cx="12" cy="13" r="4" /></svg>
          <strong>MOBILE LEGENDS</strong>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader"
          aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
    </div>
  </header>

<nav class="navbar navbar-expand-lg bg-body-tertiary " >
  <div class="container-fluid">
    <a class="navbar-brand" href=".">
        <img src="images/aj.jpeg" alt="MOBILE LEGENDS" height="100px" title="NURUL KHATAMI"  >
         <b><span class="h2">MOBILE LEGENDS</span></b> 
        </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarScroll">
      <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href=".">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?m=profil" title="Profil">Profil</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Tutorial
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="?m=webdev" title="MOBILE LEGENDS">Webdev</a></li>
            <li><a class="dropdown-item" href="?m=jarkom" title="Jual diamond" >Jarkom</a></li>
            <li><a class="dropdown-item" href="?m=server"title ="Server">Server</a></li>
            <li><a class="dropdown-item" href="?m=sejarahmobilelegend" title="Sejarah Mobile Legend">Sejarah Mobile Legend</a></li>
           
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?m=videomobilegend" title="Video">Video</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
<div class="container mt-2">
    <?php include_once('mobilelegends.php')?> 
</div>

<div class="fixed-bottom">
    <div class="card" >
        <div class="card-body">
            &copy; 2024-<?= date("Y")?> - MOBILE LEGENDS
        </div>

    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>