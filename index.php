<!DOCTYPE html>
<html>
  <head>
    <title>Questura Trento - UTL - 4^ Sezione Informatica e Teecomunicazioni</title>
    <link href="./css/bootstrap.min.css" rel="stylesheet">
    <script src="./js/bootstrap.bundle.min.js"></script>
  </head>
  <body>
    <div class="container">
        <nav class="navbar bg-primary navbar-dark">
          <div class="container-fluid">
            <a class="navbar-brand" href="#">
              <img src="./images/logo_polizia_di_stato.png" alt="" width="30" height="24" class="d-inline-block align-text-top">
             Questura di Trento - U.T.L. - 4^ Sezione Telecomunicazioni
            </a>
          </div>
        </nav>
      
      <?php

        //leggo il file json

        // inventario tlc f
        // dokuwiki f
        // utlticket f
        // tinyFilemanager f
        // homepagequestura f
        // projeqtor f
        // nubuilder f
        // rubrica


        $jsonfile = file_get_contents("links.json");
        $json = json_decode($jsonfile);

        //estraggo i dati e creo le varie card
        echo "<div class='row mt-3'>";
        foreach ($json->links as $j){
  
          echo '<div class="col-3 mb-1">
                <div class="card" style="width: 18rem;">
                <div class="card-header">'.$j->title.'</div>
                <div class="card-body">
                <h6 class="card-subtitle mb-2 text-muted">'.$j->subtitle.'</h6>
                <p class="card-text ">'.$j->description.'</p>
                <a href="'.$j->url.'" class="card-link">Vai alla pagina ...</a>
                </div></div></div>';
        }

        echo "</div>";
        

      ?>

    
    </div>
  </body>
</html>
