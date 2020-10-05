<?php
 require "./controller/connectbdd.php";

 class Article{
    private $title,$date,$autor,$content;
    
    

    public function __construct($title,$date,$autor,$content){
       $this->title= $title;
       $this->date= $date;
       $this->autor=$autor;
       $this->content=$content;
    


    }

    public function show(){
        include './template/article.php';
    }

    public static function getAllArticles(){
      $articles=array();
      global $bdd, $e;
      $req = $bdd->prepare('SELECT * FROM articles ORDER BY date_de_parution DESC') or die('Erreur : ' . $e->getMessage());
      $req->execute(array());

      while($data= $req->fetch(PDO::FETCH_ASSOC)){
        array_push($articles,new Article($data['titre'],$data['date_de_parution'],$data['auteur'],$data['contenu']));
      }
      return $articles;
    }



 }





?>