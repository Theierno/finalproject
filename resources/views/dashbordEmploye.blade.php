<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
  <style>

    /* Remove the navbar's default margin-bottom and rounded borders */ 

    .navbar {
        margin-bottom: 0;
        border-radius: 0;
    }
    
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {
      
      height:93vh;

    }
    
    /* Set gray background color and 100% height */
    .sidenav {
      padding-top: 20px;
      background-color: #f1f1f1;
      height: 100%;
    }
    
    /* Set black background color, white text and some padding */
    
    h1{
    margin-top:30px;
    margin-bottom:30px;
    
    }
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height:auto;} 
    }
  </style>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">MAER</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>

      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li class="active "> <a href="{{ route('logout') }}"><span class="glyphicon glyphicon-log-out  "></span>Deconnexion</a></li>
      </ul>
    </div>
  </div>
</nav>
  
<div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-sm-3 sidenav">
    <h4> <i class="fa-solid fa-user"></i> {{ Auth::user()->prenom}}</h4>
      <ul class="nav nav-pills nav-stacked">
        <li class="active"><a href="{{ route('absence') }}">Demande Autorisation d'absense</a></li>
    
      </ul>
    </div>
    <div class="col-sm-9 text-center"> 
      <h1>Liste Des demandes d'autorisation</h1>
      <table class="table">
    <thead>
      <tr>
        <th>Date de demande</th>
        <th>Etat</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
  
      <tr>
        <td>2022-09-09 16:47:33</td>
        <td class=" alert alert-info">En cours de traitement</td>
        <td><a href="#" class="btn btn-danger">Annuler</a>
        <a href="#" class="btn btn-info">Editer</a></td></td>
      </tr>
      <tr>
        <td>2022-05-08 17:47:33</td>
        <td class=" alert alert-success">Demande Accepter</td>
        <td><a href="#" class="btn btn-danger">Annuler</a>
        <a href="#" class="btn btn-info">Editer</a></td></td>
      </tr>
      <tr>
        <td>2022-09-09 16:47:33</td>
        <td class=" alert alert-danger"> Demande Refuser</td>
        <td><a href="#" class="btn btn-danger">Annuler</a>
        <a href="#" class="btn btn-info">Editer</a></td></td>
      </tr>
    
    </tbody>

  </table>

    </div>


  </div>

</div>


</body>
</html>
