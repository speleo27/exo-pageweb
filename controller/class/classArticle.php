<?php
 require "../connectbdd.php";

 class Article{
    private $title,$date,$autor,$content;
    
    private static $articles;

    public function __construct($title,$date,$autor,$content){
       $this->title= $title;
       $this->date= $date;
       $this->autor=$autor;
       $this->content=$content;
    


    }

    public function show(){
        echo 
          '<div class="card" style="width: 18rem;">
            <div class="card-body">
              <h4 class="card-title">'.$this->title.'</h4>
              <h5 class="card-title">'.$this->date.'</h5>
              <h6 class="card-title">'.$this->autor.'</h6>
              <p class="card-text">'.$this->content.'</p>
            </div>
          </div>';
      return $this;
    }

    public static function getAllArticles(){
    global $bdd, $e;
      $req = $bdd->prepare('SELECT * FROM articles') or die('Erreur : ' . $e->getMessage());
      $req->execute(array());

      while($data= $req->fetch){
        array_push($articles,$data['titre'],$data['date_de_parution'],$data['auteur'],$data['contenu']);
      }

    }



 }





?>