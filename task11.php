<?php

class Book {
    public $title;
    public $author;
    public $year;
    public $isAvailable;

    function __construct($title, $author, $year){
        $this->title = $title;
        $this->author = $author; 
        $this->year = $year;
        $this->isAvailable = true;
    }

    public function borrow(){
        if($this->isAvailable){
            $this->isAvailable = false;
            return "You have successfully borrowed {$this->title}.";
        } else {
            return "Sorry, {$this->title} is not available.";
        }
    }

    public function checkAvailability(){
        return $this->isAvailable ? "Available" : "Not Available";
    }

    public function getInfo(){
        return "
            <p><strong>Title:</strong> {$this->title}</p>
            <p><strong>Author:</strong> {$this->author}</p>
            <p><strong>Year:</strong> {$this->year}</p>
        ";
    }
}

$book1 = new Book("Jack the Giant Slayer", "Cassandra Luv", 1925);
$book2 = new Book("366 days", "Jeraldine Wyne", 1960);
$book3 = new Book("Maria Lyle", "Jack Rizal", 1949);

echo "<div style='font-family: \"Times New Roman\"; font-size: 14px;'>";


echo $book1->getInfo();
echo "<p><strong>Status:</strong> " . $book1->checkAvailability() . "</p>";
echo "<p>" . $book1->borrow() . "</p>";
echo "<br/>";


echo $book2->getInfo();
echo "<p><strong>Status:</strong> " . $book2->checkAvailability() . "</p>";
echo "<p>" . $book2->borrow() . "</p>";
echo "<br/>";


echo $book3->getInfo();
echo "<p><strong>Status:</strong> " . $book3->checkAvailability() . "</p>";
echo "<p>" . $book3->borrow() . "</p>";
echo "<br/>";

?>