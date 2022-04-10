<?php
// definition de la class auteur avec ses attrribut et methods liée qu'a l'auteur
class Author {
    private string $name;
    private string $firstName;    
    private array $bibliographie;

        public function __construct($name,$firstName){
            $this-> name = $name;
            $this-> firstName = $firstName;
            $this-> bibliographie = [];
            
}
            // methode de récupération de donnée avec get 

            public function getName(){
                return $this->name;
            }
            public function getFirstName(){
                return $this->firstName;
            }
            // getteur setteur bibliographie 
            public function getBibliographie(){
                return $this->bibliographie;
            } 
            public function setBibliographie(){
                return $this->bibliographie= [];
            }     
            //************************************ */   
            public function __toString(){ // methode magique permettant d'afficher les infos auteurs 
                return $this->name."<br>".$this->firstName."<br>";
            } 
            public function addBook(Book $book){ // méthode qui fait appelle a la classe book pour mettre dans un tableau des objet quand elle sont instancier dans le tableau
                $this-> bibliographie[]=$book; // on utilise un array push pour rajouter un élément a la fin du tableau.ici nos objet livre !!
            }                                   // $book est un objet livre rajouter a index [i]

            public function showBibliographie(){               //méthode pour parcourire les élément du tableaux 
                $biblio = '';                                  //  $biblio = ''; singifie que dans la varibale on auras un string en retour 
                foreach ($this->bibliographie as $book) {      // on parcour la bibliographie en cours ou book est chaque objet mis dans le tableau              
                    $biblio .= $book;                          // $biblio prend pour valeur $biblio.(objet book) a chaque tour de boucle 
                }
                return  "<strong>".$this->name." ".$this->firstName." : "."</strong>"."<br>".$biblio;     // retourne chauque objet avec le __toString !
            }
}  
?>

