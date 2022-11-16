<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container ">

  <h2>Demande Autorisation d'absence</h2>

  <form method="POST" action="{{ route('absence')}}" enctype="multipart/form-data">
  @csrf
    <div class="form-group">
      <label for="dateDeb">Date Debut Absence :</label>
      <input type="date" class="form-control" id="dateDeb" placeholder="Entrer la date de debut de votre absence" name="dateDebutAbsence">
    </div>
    <div class="form-group">
     <label for="dateF">Date fin Absence :</label>
      <input type="date" class="form-control" id="dateF" placeholder="Entrer la date de fin de votre absence" name="dateFinAbsence">
    </div>
    <div class="form-group">
  <label for="comment">Donnez le motif: <span>vous avez la possiblite d'uploader un fichier</span>  </label>
  <input type="file" class="form-control" id="Fichier" accept=".docs,.pdf" placeholder="uploader un fichier" name="file"> <br> Ecrire ici <br>
  <textarea class="form-control" rows="7" id="comment" name="motif"></textarea>
</div>
    <button type="submit" class="btn btn-primary">Envoyer</button>
    <a href="#" class="btn btn-danger">Retour</a>
  
  </form>
</div>

</body>
</html>
