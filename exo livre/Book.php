<?php

class Book { // crée classe Book
    private Author $author;
    private string $title;
    private int $numberOfPage;
    private  int $yearOfPublication;
    private float $price;

    
   
    public function __construct(Author $author,$title,$numberOfPage,$yearOfPublication,$price){// on appelle l'objet Auhtor dans le construct Book pour liée les deux classes
        $this-> author = $author; // objet this-> author = $ author vaut ------->>> objet author en cour
        $this-> title = $title;
        $this-> numberOfPage = $numberOfPage;
        $this-> yearOfPublication = $yearOfPublication;
        $this-> price = $price;
        $this->author->addBook($this); // pour l'auteur en cour (ex : author1) utilise la fonction addbook pour l'objet en cour (ex:book1 ou book2) !!
        // sa fonctionne car author est relier dans la class Book par  private Author $author;__construct(Author $author) !!!!!
      }
        public function getTitle(){
            return $this-> title;
        }
        public function getNumberOfPage(){
            return $this-> numberOfPage;
        }
        public function getYearOfPublication(){
            return $this-> yearOfPublication;
        }
        public function getPrice(){
            return $this-> price;
        }
        public function getAuthor(){ 
            return $this-> author;
        }
        public function Infos(){
            $this->title.", qui contient pages ".$this->numberOfPage." et publié en ".$this-> yearOfPublication." au prix de : ".$this-> price." € "."<br>";
        }
        public function __toString(){
            return $this->title.", qui contient pages ".$this->numberOfPage." et publié en ".$this-> yearOfPublication." au prix de : ".$this-> price." € "."<br>";
        }
            
}

?>