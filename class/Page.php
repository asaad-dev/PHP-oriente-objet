<?php 
   class Page {

      private $contenu;
      private $titre;
      private $datePublication;
      private $url;
  
      public function __construct($titre, $contenu, $datePublication)
      {
          $this->titre = $titre;
          $this->contenu = $contenu;
          $this->datePublication = $datePublication;
  
          echo "Le titre de cet page est $this->titre, son contenu est $this->contenu et sa date de publication est $this->datePublication";
      }
  
  }