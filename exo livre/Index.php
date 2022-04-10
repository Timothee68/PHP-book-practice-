<?php
include 'Author.php';
include 'Book.php';


$author=new Author("Stephen","King");

$book1=new Book ($author,"Ca",1138,1986,20);
$book2=new Book ($author,"Simetierre",374,1983,15);
$book3=new Book ($author,"Le Fléau",823,1978,14);
$book4=new Book ($author,"Shinning",447,1977,16);

// echo $book1."<br>";
// echo $book2."<br>";
// echo $book3."<br>";
// echo $book4."<br>";

$author1=new Author("Stefdgfdgfdphen","Kisdddsng");

$book5=new Book ($author1,"Cadfdsfsd",1138,1986,20);
$book6=new Book ($author1,"Simffdetierre",374,1983,15);
$book7=new Book ($author1,"Le Flésdfsdfsdau",823,1978,14);
$book8=new Book ($author1,"Shindfdsfning",447,1977,16);

// echo $book5."<br>";
// echo $book6."<br>";
// echo $book7."<br>";
// echo $book8."<br>";

echo $author1->showBibliographie()."<br>";
echo $author->showBibliographie();
?>