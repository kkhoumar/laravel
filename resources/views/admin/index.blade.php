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
              <!-- affichage des erreurs-->
              @if (Session::has('status'))
                <div class="alert alert-danger" style="font-size: 20px;color:red">
                    {{Session::get('status')}}
                </div>
                
              @endif
            @if ($errors->any())
              <div class="alert alert-danger">
                  <ul>
                      @foreach ($errors->all() as $error)
                          <li>{{ $error }}</li>
                      @endforeach
                  </ul>
                    </div>
              @endif
          <div>
              <label for="email">Adresse Email</label>
              <input type="email" name="email" class="form-control" id="email" value="{{ old('email') }}">
          </div>
          
          <div>
          <label for="password">Mot de Passe </label>
          <input type="password" name="password" class="form-control" id="password">
      
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