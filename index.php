<!DOCTYPE html>
<html>
  <head>
    <title>Questura Trento - UTL - 4^ Sezione Informatica e Teecomunicazioni</title>
    <link href="./css/bootstrap.min.css" rel="stylesheet">
    <script src="./js/bootstrap.bundle.min.js"></script>
  </head>
  <body>
    <div class="container">
        <nav class="navbar bg-light">
          <div class="container-fluid">
            <a class="navbar-brand" href="#">
              <img src="" alt="" width="30" height="24" class="d-inline-block align-text-top">
             Questura di Trento - U.T.L. - 4^ Sezione Telecomunicazioni
            </a>
          </div>
        </nav>
      
      <?php

        //leggo il file json
        $jsonfile = file_get_contents("links.json");
        $json = json_decode($jsonfile);

        //estraggo i dati e creo le varie card
        foreach ($json->links as $j){
  
          echo "Title:" .$j->title;
          echo "Description: ". $j->description;
          echo "Url: ".$j->url;
          echo "<br>";

          echo '<div class="card" style="width: 18rem;">
                <div class="card-body">
                <h5 class="card-title">'.$j->title.'</h5>
                <h6 class="card-subtitle mb-2 text-muted">'.$j->subtitle.'</h6>
                <p class="card-text">'.$j->description.'</p>
                <a href="'.$j->url.'" class="card-link">Clicca qui</a>
                </div>
                </div>';
        }
        

      ?>

    
    </div>
  </body>
</html>
