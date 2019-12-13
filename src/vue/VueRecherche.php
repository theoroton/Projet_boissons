<?php

namespace cocktails\vue;

use \cocktails\vue\VueHeader;

class VueRecherche {

  private $ingredients;

  public function __construct($igr){
    $this->ingredients = $igr;
  }

  public function render(){
      $vue = new VueHeader();
      $header = $vue->render();

      $content = <<<END
      <div id='contenu'>
        <div id='ingredients'>
          <label class='label' for="souhaite">Ingrédients souhaités</label>
          <label class='label' for="nesouhaitepas">Ingrédients non souhaités</label>

          <div id='souhaite' class='divContenu'>
          </div>

          <div id='nesouhaitepas' class='divContenu'>
          </div>
        </div>

        <button id="reinit" type="button">Réinitialiser</button>

        <div id='recherche'>
          <label class='label' for="search">Recherche d'un ingrédient</label><br>
          <input id="search" type="text" autocomplete="off" />
          <div id='results'></div>
          <div id='erreur'></div>
        </div>

        <div id='actions'>
          <button id="addIngreSouhaiter" type="button">Souhaiter</button>
          <button id="addIngrePasSouhaiter" type="button">Non souhaiter</button>
        </div>

        <button id="effectuerRecherche" type="button">Recherche</button>
      </div>
END;

      $html = <<<END
      <!DOCTYPE html>
        <head>
          <meta charset="utf-8">
          <link rel="stylesheet" href="css/vueRecherche.css">
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
          <script src='js/recherche.js'></script>
          <link rel="stylesheet" href="css/VueRecherche.css">
          <title>Recherche</title>
        </head>
        $header
        <body>
        <br>
        $content

        </body>
      </html>
END;

      echo $html;
  }

}
