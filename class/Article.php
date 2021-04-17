<?php 
   class Article {

      private $titre;
      private $contenu;
      private $dateDePublication;
  
      public function __construct($titre = null, $contenu = null, $dateDePublication = null)
      {
         $this->titre = $titre;
         $this->contenu = $contenu;
         $this->dateDePublication = $dateDePublication;
      }
      
      function afficher() 
      {
         setlocale(LC_TIME, ['fr', 'fra', 'fr_FR']);
         date_default_timezone_set('Europe/Paris');
         // $date = utf8_encode(strftime('%A %d %B %Y'));
         $date = datetime::createFromFormat('Y-m-d', $this->dateDePublication);

         // var_dump($date);
         echo "<article>
         <h2>$this->titre</h2>
         <p>$this->contenu</p>
         <p>Publié le <time datetime=\"$this->dateDePublication\">" .$date->format('d/m/Y') ."</time></p>
         </article>";
      }


      /**
       * Get the value of datePublication
       */ 
      public function getDatePublication()
      {
            return $this->datePublication;
      }

      /**
       * Set the value of datePublication
       *
       * @return  self
       */ 
      public function setDatePublication($datePublication)
      {
            $this->datePublication = $datePublication;

            return $this;
      }

      /**
       * Get the value of contenu
       */ 
      public function getContenu()
      {
            return $this->contenu;
      }

      /**
       * Set the value of contenu
       *
       * @return  self
       */ 
      public function setContenu($contenu)
      {
            $this->contenu = $contenu;

            return $this;
      }

      /**
       * Get the value of titre
       */ 
      public function getTitre()
      {
            return $this->titre;
      }

      /**
       * Set the value of titre
       *
       * @return  self
       */ 
      public function setTitre($titre)
      {
            $this->titre = $titre;

            return $this;
      }
  }

