<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="bootstrap\css\bootstrap.min.css">
    <link rel="stylesheet" href='cssconnexion\style.css'>
    <title>la page admin</title>
</head>
<body>
    <div class="container">
        
      <div class="row row_style">
        <div class="col-6 page">
            <h1>Bienvenue Sur La Page Admin</h1>
            <label for=""><img src="cssconnexion\1t.jpg" width="500"></label>
        </div>
        
        <div class="col-6">
          <form action="{{route('admin.store')}}" method="post">
              {{ csrf_field() }}
              <h2>Connexion Administrateur</h2>
          <div>
              <label for="email">Adresse Email</label>
              <input type="text" name="email" class="form-control @error('email') is-invalid @enderror" id="email">
              @error('email')
              <div class="alert alert-danger">{{ $message }}
          @enderror
          </div>
          
          <div>
          <label for="password">Mot de Passe </label>
          <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password">
              @error('password')
              <div class="alert alert-danger">{{ $message }}
          @enderror
          </div>
          
          
          <div>
          <input type="submit" value="connexion" class="form-control btn btn-primary">
          </div>
          </form>

        </div>
      </div>

    </div>
    <script src="backend\bootstrap\js\bootstrap.min.js"></script>
</body>
</html>