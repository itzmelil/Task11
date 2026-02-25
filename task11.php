<?php

class Book {

    public $title;
    public $author;
    public $year;
    public $isAvailable = true; 

    public function __construct($title, $author, $year) {
        $this->title = $title;
        $this->author = $author;
        $this->year = $year;
    }
    public function borrowBook() {  
        $this->isAvailable = false;
        echo $this->title . " has been borrowed.<br>";
    }
    public function returnBook() {
        $this->isAvailable = true;
        echo $this->title . " has been returned.<br>";
    }
    public function displayBookInfo() {
        echo "Title: " . $this->title . "<br>";
        echo "Author: " . $this->author . "<br>";
        echo "Year: " . $this->year . "<br>";
        echo "Available: " . ($this->isAvailable ? "Yes" : "No") . "<br><br>";
    }
}

$book1 = new Book("Jack the Giant Slayer", "Jack Rizal", 1995);
$book1->displayBookInfo();
$book1->borrowBook();
$book1->displayBookInfo();
$book1->returnBook();
$book1->displayBookInfo();

?>