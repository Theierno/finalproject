<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/offcanvas-navbar/">
<link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<link rel="stylesheet" href="{{ asset('css/app.css') }}">
<link href="{{ asset('css/offcanvas.css') }}" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-dark bg-dark fixed-top">

  <div class="container-fluid">
  
  <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar">
  <a class="navbar-brand" href="#">MAER</a>
        <span class="navbar-toggler-icon"></span>
    </button>
    <div>
    
    <form class="d-flex" role="search" action="route('logout')" method="post">
            <a href="{{ route('logout') }}" class="btn btn-secondary active" role="button" aria-pressed="true">Logout</a>
      </form>

    </div>
  
    <div class="offcanvas offcanvas-start text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel"> {{ Auth::user()->prenom}}</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
          <li class="nav-item">
            <a class="nav-link active fw-bolder" aria-current="page" href="#">Donner une decision </a>
          </li>
            </ul>
            </li>
        </ul>
      </div>
    </div>
  </div>
</nav>
<div class="col-sm-9 text-center"> 
      <h1>Liste des demandes d'absence</h1>
      <table class="table">
    <thead>
      <tr>
        <th>Date de demande</th>
        <th>Employes</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
  
      <tr>
        <td>2022-09-09 16:47:33</td>
        <td class=" alert alert-info">Lamine Barry</td>
        <td><a href="#" class="btn btn-danger">Refuser</a>
        <a href="#" class="btn btn-info">Accepter</a></td></td>
      </tr>
      <tr>
        <td>2022-05-08 17:47:33</td>
        <td class=" alert alert-success"> Lamine Barry</td>
        <td><a href="#" class="btn btn-danger">Accepter</a>
        <a href="#" class="btn btn-info">Refuser</a></td></td>
      </tr>
      <tr>
        <td>2022-09-09 16:47:33</td>
        <td class=" alert alert-danger"> Lamine Barry</td>
        <td><a href="#" class="btn btn-danger">Accepter</a>
        <a href="#" class="btn btn-info">Refuser</a></td></td>
      </tr>
     
      <tr>
        <td>2022-09-04 17:47:30</td>
        <td class=" alert alert-danger"> Yacine Sarr </td>
        <td><a href="#" class="btn btn-danger">Accepter</a>
        <a href="#" class="btn btn-info">Refuser</a></td></td>
      </tr>
    
    </tbody>

  </table>

    </div>


  </div>

<script src="{{ asset('js/bootstrap.bundle.min.js') }}" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script src="{{ asset('js/offcanvas.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    
</body>

</html>
  